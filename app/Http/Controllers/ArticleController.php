<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

// Affichage du formulaire de création
public function create()
{
    return view('create');
}

// Stockage des données soumises par l'utilisateur
public function store(Request $request)
    {
    // Validation des données du formulaire
    $request->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'content' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imagePath = null;

    // Gestion du téléchargement de l'image
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('articles', 'public');
    }

    // Création de l'article et enregistrement dans la base de données
    Article::create([
        'title' => $request->title,
        'excerpt' => $request->excerpt,
        'content' => $request->content,
        'image' => $imagePath,
    ]);

    // Redirection à la route d'acceuil
    return redirect()->route('welcome');
}

    public function show(Article $article)
    {
        return view('show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }
    
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imagePath = $article->image;
    
        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::delete('public/' . $article->image);
            }
            $imagePath = $request->file('image')->store('articles', 'public');
        }
    
        // Mise à jour de l'article dans la base de données
        $article->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('welcome');
    }

    public function destroy(Article $article)
    {
        // Suppression de l'image associée
        if ($article->image) {
            Storage::delete('public/' . $article->image);
        }

        // Suppression de l'article dans la base de données
        $article->delete();

        return redirect()->route('welcome');
    }
    
}




