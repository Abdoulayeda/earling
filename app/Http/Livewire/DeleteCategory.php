<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class DeleteCategory extends Component
{
    public $categoryId;

    public function deleteCategory()
    {
        Categorie::destroy($this->categoryId);
        // Rediriger vers la page qui affiche la liste des catégories.
        return redirect()->route('categorie.index');
    }

    public function render()
    {
        return view('livewire.delete-category');
    }
}
