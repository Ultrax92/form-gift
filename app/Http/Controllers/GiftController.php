<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use App\Http\Requests\GiftRequest;

class GiftController extends Controller
{
    // 1. Lister les cadeaux (Page d'accueil)
    public function index()
    {
        $gifts = Gift::all();
        return view('gifts.index', compact('gifts'));
    }

    // 2. Afficher le formulaire de création
    public function create()
    {
        return view('gifts.create');
    }

    // 3. Enregistrer le cadeau
    public function store(GiftRequest $request)
    {
        Gift::create($request->validated());
        return redirect()->route('gifts.index');
    }

    // 4. Afficher un cadeau unique
    public function show(Gift $gift)
    {
        return view('gifts.show', compact('gift'));
    }

    // 5. Afficher le formulaire d'édition
    public function edit(Gift $gift)
    {
        return view('gifts.edit', compact('gift'));
    }

    // 6. Mettre à jour le cadeau
    public function update(Request $request, Gift $gift)
    {
        $gift->update($request->validated());
        return redirect()->route('gifts.index');
    }

    // 7. Supprimer le cadeau
    public function destroy(Gift $gift)
    {
        $gift->delete();
        return redirect()->route('gifts.index');
    }
}
