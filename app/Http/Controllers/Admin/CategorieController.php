<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

     public function store(Request $request, Categorie $categorie)
    {
        $categorie->nom = $request->nom;
        $categorie->save();
       /*  return response()->json([
            'success' => true,
            'message' => 'Category updated successfully'
        ]); */
    return redirect()->back();
    } 

    public function update(Request $request,int $id)
    {
        $categorie = Categorie::find($id);
        $categorie->nom = $request->nom;
        $categorie->save();
        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully'
        ]);

       // return redirect()->route('categorie.index');
    }
}
