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

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // find user role
            $user = User::where('email', $request->email)->first();
            if ($user->role == 'admin') {
                return redirect()->intended('home');
            } else {
                return redirect()->intended('dashboard');
            }
        }

    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect('/');
    }

}    
