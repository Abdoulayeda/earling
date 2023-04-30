@extends('master.admin')

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 "> 
          <div class="bg-gray-800 h-[100px] rounded-lg py-3 text-center flex flex-col ">
            <span class="text-white text-3xl mb-2 bg-gradient-to-r ">20</span>
             <span class="text-white text-2xl">vendeurs</span>
          </div>
          <div class="bg-gray-800 h-[100px] rounded-lg  py-3 text-center flex flex-col ">
            <span class="text-white text-3xl mb-2">20</span>
             <span class=" text-2xl text-white dark:text-gray-500">Clients</span>
          </div>
          <div class="bg-gray-800 h-[100px] rounded-lg  py-3 text-center flex flex-col ">
            <span class="text-white text-3xl mb-2">20</span>
             <span class="text-2xl text-white dark:text-gray-500">Cours</span>
          </div>
       
    </div>
 
@endsection