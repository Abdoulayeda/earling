<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\Contenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContenuController extends Controller
{
    //

    public function store(Request  $request, Contenu $contenu)
    {
        $request->validate([
            'titre' => 'required|min:5',
        ]);
        $video = $request->file('video');
       $namevideo = 'video'.uniqid().'_'.$request->cour_id.'.'.$video->getClientOriginalExtension();
       if($video){
        $video->storeAs('videos/'.Auth::user()->name, $namevideo);
        $path = 'videos/'.Auth::user()->name.'/'.$namevideo;
      } 
        $contenu->titre = $request->titre;
        $contenu->text = $request->texte;
        $contenu->video = $path;
        $contenu->cour_id = $request->cour_id;
        $contenu->save();
      
        return redirect()->back();
    }
}
