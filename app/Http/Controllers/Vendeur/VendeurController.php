<?php

namespace App\Http\Controllers\Vendeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendeurController extends Controller
{
    //
    public function index()
    {
        return view('vendeurs.index');
    }
}
