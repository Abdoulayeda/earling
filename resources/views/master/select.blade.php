<select wire:model="categorieId" name="" id="" class="rounded-lg text-sm border-solid border-x-1 border-y-1 border-blue-800">
    <option value=""> <span class="text-sm text-slate-800">Rechercher par catégorie</span>   </option>
    @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}" class="rounded-lg text-sm"> {{ $categorie->nom }}</option>
    @endforeach
</select>