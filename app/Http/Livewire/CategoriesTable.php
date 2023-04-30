<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class CategoriesTable extends Component
{

    public $search = '';
   
  
    public function render()
    {
        $categories = Categorie::where('nom', 'like', '%' .$this->search .'%')->latest()->get();

        return view('livewire.categories-table', compact('categories'));
    }

   
   
    

    

   

   
}
