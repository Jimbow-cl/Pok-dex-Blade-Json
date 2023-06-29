@extends('layout.app')

@section( 'title', 'Pokédex')
@section('header')
    Test d'un Header sur la page Show
@endsection
@section('sustitle')
    Hop, Pokédex!
@endsection
@section('content')

                    <div class="flex justify-center">
                        <a href="{{ route('pokedex.index') }}"  class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="flex justify-center" style="flex-direction:column;">
                            <img src="/pokedex.png">
                            <h1 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="margin-top: -777px;margin-left: 522px;margin-bottom: -22px;">{{$pokemon->name}}</h1>
                                <p class="mt-6 text-xl font-semibold {{$pokemon->type1}}" style="margin-bottom: -21px;margin-left: 502px;">Type : {{$pokemon->type1}} </p>
                                <p class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="margin-bottom: -21px;margin-left: 502px;">Spec : {{$pokemon->type2}} </p>
                                <p class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="margin-bottom: -21px;margin-left: 502px;">Taille : {{$pokemon->height}} </p>
                                <p class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="margin-bottom: -21px;margin-left: 502px;">Poids : {{$pokemon->weight}} </p>
                                <p class="mt-4 text-gray-500  text-l leading-relaxed" style="margin-top: 230px;margin-left: 400px;margin-right: 390px;margin-bottom: 426px;">
                                    Description : {{$pokemon->description}}
                                </p>
                                
                                
                            </div>
                        </a>
                    </div>
@endsection
@section('footer')
    Test de Footer sur la page Show
@endsection