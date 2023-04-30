<div> 
    @include('master.navbar')
    @include('master.header')
    <div class="grid grid-cols-2 md:grid-cols-5 gap-2 md:mx-[10%] py-12">        
        @foreach ($cours as $cour)
            <div class="bg-white h-auto border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg w-full h-[50%]" src="{{ asset('/storage/'.$cour->premiereImage()?->path.'/'.$cour->premiereImage()->image) }}" alt="product image" />
                 <div class="px-5 pb-2">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $cour->titre}}</h5>
                    </a>
                    <span>{{ $cour->user->name }}</span>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-gray-900 dark:text-white">{{ number_format($cour->prix, 2,'.', ' ')}} CFA</span>
                        <a href="#" class="text-white bg-red-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                        </a>
                    </div>
                </div> 
            </div>  
        @endforeach
      </div>
    </div>
</div>
