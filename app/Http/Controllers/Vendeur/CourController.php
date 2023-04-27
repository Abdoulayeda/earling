<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\Cour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourController extends Controller
{
    //

    public function index()
    {
        return view('vendeurs.cours.index');
    }

    public function store(Request $request, Cour $cour)
    {
         $request->validate([
             'titre' => 'required',
             'prix' => 'required',
         ]);
         
         $cour->titre = $request->titre;
         $cour->prix = $request->prix;
         $cour->user_id = auth()->user()->id;
         $cour->categorie_id = $request->categorie_id;
         $cour->save();
         
         return redirect()->back();
    }
}
