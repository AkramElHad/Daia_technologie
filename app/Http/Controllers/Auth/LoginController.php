<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Rediriger vers l'URL prévue (page précédente)
            return redirect()->intended('/'); // L'utilisateur sera redirigé vers la page initialement demandée
        }

        return back()->withErrors([
            'username' => 'Erreur, veuillez vérifier !',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
