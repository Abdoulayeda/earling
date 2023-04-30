<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class CategorieEdit extends Component
{
    public Categorie $categorie;

    protected $rules = [
        'categorie.nom' => 'required|min:6|max:255',
    ];

    public function save()
    {
        $this->validate();
        $this->categorie->save();
        $this->emit('categorieUpdated');
    }
    public function render()
    {
        return view('livewire.categorie-edit');
    }
}
