@extends('master.vendeur')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4  rounded-lg ">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Numéro</th>
                        <th scope="col" class="px-4 py-3">Cour</th>
                        <th scope="col" class="px-4 py-3">Image</th>
                        <th scope="col" colspan="3" class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($cour->images as $key=>$image)
                   <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-3">{{ $key + 1 }}</td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cour->titre }}</th>
                        <td class="px-4 py-3"> <img class="object-cover w-12 h-12" src="{{ asset('/storage/'.$image->path.'/'.$image->image) }}" alt="{{ $image->path.'/'.$image->image }}"> </td>
                        
                        <td class="px-4 py-3">
                            <button >
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-200 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </button>    
                        </td>
                         <td class="px-4 py-3">
                            <form action="{{ route('cour.image.delete', $image->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-800 text-white px-2 py-1 rounded-lg">Supprimer</button>
                            </form>
                         </td>
                        {{-- <td class="px-4 py-3">Add contenu</td>          --}}
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>

@endsection