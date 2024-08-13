<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Article; // Importation du modèle Article

class HomeController extends Controller
{
    /**
     * Show the application welcome page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Récupérer tous les articles de la base de données
        $articles = Article::all();

        // Passer les articles à la vue welcome
        return view('welcome', compact('articles'));
    }

    public function market(){
        return view('marketing');
    }

    public function prod(){
        return view ('production');
    }

    public function creat(){
        return view ('evenn');
    }

    /**
     * Send the contact form data.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        try {
            Mail::to('akram.el-hadhoudi@uha.fr')->send(new ContactMail($details));
            return back()->with('success', 'Votre message a été envoyé avec succès.');
        } catch (\Exception $e) {
            return back()->with('err');
        }
    }
}
