<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\Cour;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    //

    public function images($id)
    {
        $cour = Cour::find($id);
        return view('vendeurs.images.index', compact('cour'));
    }



    public function store(Request $request)
    {
       /*  $request->validate([
            'image' =>'required|mimes:jpeg,png,jpg,gif',
        ]);
 */
        if ($request->hasFile('images')) {
            $photos = $request->file('images');
            foreach ($photos as $photo) {
            $image = new Image();
            $photoname ='cour'.uniqid().'.'.$photo->getClientOriginalExtension();
            $photo->storeAs('cours/'.Auth::user()->name, $photoname);
            $path = "cours/".Auth::user()->name;
            $image->cour_id = $request->cour_id;
            $image->path = $path;
            $image->image = $photoname;
            $image->save();
              //  return $path;
            }
           // return $path;
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->back();
    }
}
