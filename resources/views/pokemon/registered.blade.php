@extends('layout.app')

@section( 'title', 'Pokédex')
@section('header')
   Registered de Pokémon.
@endsection
@section('sustitle')
    Pokédex  
                    <a href="{{route('pokedex.index')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <h3 class="mt-1 text-xl font-semibold text-gray-900 dark:text-white">Retour</h3> 
                    </a>
@endsection
@section('content')
<div   class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                             <h1 class="mt-1 text-xl font-semibold text-gray-900 dark:text-white">Pokémon {{$name}} Ajouté!</h1>
                            </div>
                        </div>
@endsection
@section('footer')
    Footer
@endsection

        