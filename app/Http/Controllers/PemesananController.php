<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Pemesanan;
 
class PemesananController extends Controller
{
    /**
     * Handle an authentication attempt.
     */

    public function store(Request $request)
    {
        $current_user = auth()->user();
        $pemesanan = new Pemesanan;
        $pemesanan->id_admin = $current_user->id;
        $pemesanan->id_kendaraan = $request->kendaraan;
        $pemesanan->id_driver = $request->driver;
        $pemesanan->id_approver_1 = $request->mid;
        $pemesanan->id_approver_2 = $request->top;
        $pemesanan->status_1 = 3;
        $pemesanan->status_2 = 3;
        $pemesanan->save();
        return redirect('/pemesanan');
    }

    public function updateStatus(Request $request)
    
{
    $values = explode('-', $request->approval); // split the id (format: status-id
    // check if the value is correct + print the value
    if (count($values) != 2) {
        return response()->json(['message' => 'Invalid format, values: '. $request->approval ], 400);
    }
    $role = auth()->user()->role;
    $id = $values[1];
    $status = $values[0];
    $pemesanan = new Pemesanan;
    $data = $pemesanan->find($id);
    if ($data) {
        if ($role == 'top-lvl') {
            $data->status_1 = ($status == 'approve') ? true : false;
        } else {
            $data->status_2 = ($status == 'approve') ? true : false;
        }
        $data->save();
        return redirect('/approval');
        return response()->json(['message' => 'Status updated successfully'], 200);
    } else {
        # print error message + id
        return response()->json(['message' => 'Data not found for id: ' ], 404);
    }
}

}    
