<?php

namespace App\Http\Livewire;

use App\Models\Cour;
use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;

class HomeTable extends Component
{
    use WithPagination;
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
        return view('livewire.home-table',compact('cours', 'categories'));
    }
}
