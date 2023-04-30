<?php

namespace App\Http\Livewire;

use App\Models\Cour;
use Livewire\Component;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class CoursTable extends Component
{
    public $search = '';
    public function render()
    {
        $categories = Categorie::all();
        $cours = Cour::where('titre', 'like', ''.$this->search.'%')
                     ->where('user_id', Auth::user()->id)   
                     ->get();
        return view('livewire.cours-table', compact('cours', 'categories'));
    }
}
