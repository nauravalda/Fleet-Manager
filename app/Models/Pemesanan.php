<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_admin',
        'id_kendaraan',
        'id_driver',
        'id_approver_1',
        'id_approver_2',
        'status_1',
        'status_2',
    ];

    public function getDataPemesananByAdmin($id_admin)
    {
        return $this->where('id_admin', $id_admin)->get();
    }

    public function getDataPemesananByApprover($id_approver)
    {
        return $this->where('id_approver_1', $id_approver)->orWhere('id_approver_2', $id_approver)->get();
    }
    
    public function getDataPemesananByApproverNeedApproval($id_approver)
    {
        return $this->where('id_approver_1', $id_approver)->where('status_1', 3)->orWhere('id_approver_2', $id_approver)->where('status_2', 3)->get();
    }

    public function getDataPemesanan()
    {
        return $this->all();
    }


    
    
}