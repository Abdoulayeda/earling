<td>
    <div class="flex justify-start">
        <form action="" wire:submit.prevent="save"  class="">
            @csrf
            <div wire:loading>
                Chargement
            </div>
            <label for="" class="text-2xl">Nom</label> <br>
            <div>
                <input type="text" wire:model="categorie.nom" class="" placeholder="Entrez le nom de la catègorie"> <br>
                @error('categorie.nom')
                    <span>
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit" wire:loading.attr="disabled" class="bg-blue-600 text-white text-xl py-3 px-6 mt-4">Enregistrer</button>
        </form>
    </div>
</td>