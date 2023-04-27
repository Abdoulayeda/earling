<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class CategoriesTable extends Component
{

    public $categories;
   
    public $editCategoryId;
    public $isEditing = false;
    public $name;
    public $deleteCategoryId;
    public $confirmDelete = false;


    public function render()
    {
        $this->categories = Categorie::all();

        return view('livewire.categories-table');
    }

    public function edit($id)
    {
        $this->editCategoryId = $id;
        $this->isEditing = true;
        $category = Categorie::find($id);
        $this->name = $category->nom;
    }


    public function update()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $categorie = Categorie::find($this->editCategoryId);
        $categorie->nom = $this->name;
        $categorie->save();

        $this->isEditing = false;
    }

    public function deleteCategory($id)
    {
        Categorie::destroy($id);
        session()->flash('message', 'La catégorie a été supprimée avec succès.');
    }
}
