@extends('layout.app')

@section( 'title', 'Pokédex')
@section('header')
   Index de Pokémon.
@endsection
@section('sustitle')
    Pokédex  
                    <a href="{{ route('pokedex.create') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="color: #00a6ff;">Creer un Pokémon!</h3> 
                    </a>
@endsection
@section('content')
                <div class="grid  md:grid-cols-2 gap-6 lg:gap-8" style="grid-template-columns: repeat(5, minmax(0, 1fr));">
                    @foreach($pokemons as $pokemon)
                    
                    <a href="{{ route('pokedex.show', [$pokemon->name]) }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$pokemon->name}}</h2>
                                <p class="mt-4 text-sm leading-relaxed {{$pokemon->type1}} ">Type:  {{$pokemon->type1}}</p>
                                <p class="mt-4  text-sm leading-relaxed" style="color: #ffdd00;">Voir Plus</p>
                            </div>
                        </a>
                    @endforeach
                </div>
@endsection
@section('footer')
    Footer
@endsection
