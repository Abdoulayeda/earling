
    <td class="px-4 py-3">
        <form  wire:submit.prevent="save">
            <div class="flex flex-col ">
                @error('categorie.nom')
                   <span class="text-red-800 text-sm"> {{ $message }}</span>
                @enderror
                <input type="text" wire:model.defer='categorie.nom' class="md:w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 block  p-2.5   focus:ring-blue-500 focus:border-blue-500">
                <button wire:loading.attr="disabled" class="bg-blue-600 px-2 w-[50%] text-center mx-12 py-2 mt-2 rounded-lg text-white ">Modifier</button>
            </div>
        </form>
        </td>

