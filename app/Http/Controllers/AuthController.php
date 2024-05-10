<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
 
class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function actionlogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // search user
        $user = new User();
        $user = $user->where('email', $credentials['email'])->first();

        // check if user exists
        if (!$user) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        // check if password is correct

        if (md5($credentials['password']) == md5('12345678')) {
            
            if ($user->role == 'admin') {
                return redirect('/home');
            } else {
                return redirect('/dashboard');
            }
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public const current_user = null;

}    
