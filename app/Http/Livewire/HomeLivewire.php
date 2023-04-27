<?php

namespace App\Http\Livewire;

use App\Models\Cour;
use Livewire\Component;
use App\Models\Categorie;

class HomeLivewire extends Component
{
    public $search = '';
    public $categorieId;
    public function render()
    {

        $categories = Categorie::all();
        $cours = Cour::where('titre', 'like', '%'.$this->search.'%');
        if($this->categorieId){
         $cours->where('categorie_id', $this->categorieId);
        }
        $cours = $cours->get();

        return view('livewire.home-livewire', compact('cours', 'categories'));
    }
}
