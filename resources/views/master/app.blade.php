<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   @livewireStyles()
</head>
<body>
   <div class="flex flex-col">
 <div class=" fixed w-full">
    <nav class=" border-gray-200 px-2 sm:px-4 py-2 rounded dark:bg-gray-900 bg-slate-800 ">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <div class="flex">
            @if(Auth::user())
             <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-white">Bienvenue {{ Auth::user()->name }}</span>
           @else
           <a href="{{ route('login') }}" class="flex items-center mx-6">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-white">Se connecter</span>
          </a>
          <a href="{{ route('register') }}" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-white">S'inscrire</span>
         </a>
          @endif
          
          </div>
          
          <div class="w-full md:block md:w-auto flex flex-col" id="navbar-default" >
            <div>
                <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  ">
                    <li>
                      <a href="/" class="text-xl block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                      <a href="{{-- route('formations.index') --}}" class="text-xl block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Mes cours</a>
                    </li>
                    <li>
                       @if (Auth::user())
                       <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="bg-red-700 px-6 py-2 text-xl text-white rounded-lg">Se déconnecter</button>
                    </form>
                       @endif
                    </li>
                  </ul>
            </div>
           
          </div>
        </div>
      </nav>
 </div>
    <div>
        @yield('content')
    </div>
   </div>

   @livewireScripts()
</body>
</html>