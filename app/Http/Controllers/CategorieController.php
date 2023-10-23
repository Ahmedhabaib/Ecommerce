<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return response()->json($categories, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie([
            'nomcategorie' => $request->input('nomcategorie'),
            'imagecategorie' => $request->input('imagecategorie')
        ]);
        $categorie->save();
        return response()->json($categorie, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        return response()->json($categorie, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $categorie->update($request->all());
        return response()->json($categorie, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return response()->json('Catégorie supprimée !', 200);
    }
}
