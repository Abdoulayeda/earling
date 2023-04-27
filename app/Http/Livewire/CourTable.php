<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Cour;
use Livewire\Component;

class CourTable extends Component
{
    public $search = '';
    public function render()
    {
        $categories = Categorie::all();
        $cours = Cour::where('titre', 'like', ''.$this->search.'%')->latest()->paginate(5);
        return view('livewire.cour-table', compact('cours', 'categories'));
    }
}
