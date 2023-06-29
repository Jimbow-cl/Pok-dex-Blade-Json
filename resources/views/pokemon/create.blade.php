@extends('layout.app')

@section( 'title', 'Pokédex')
@section('header')
   Index de Pokémon.
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
                                
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                    <div style="color:red">{{$error}}</div>
                                    @endforeach
                                @endif
                                <div class="flex justify-center">
                                <form  method="post" action="{{route('pokedex.store')}}" style="display: flex;flex-direction: column;">
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Name: </h3>
                                    <input type="text" name="name" class=""/>
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Type: </h3>
                                    <input type="text" name="type1" class=""/>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Spec: </h3>
                                    <input type="text" name="type2" class=""/>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Taille: </h3>
                                    <input type="text" name="height" class=""/>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Poids: </h3>
                                    <input type="text" name="weight" class=""/>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Description: </h3>
                                    <textarea  name="description" class=""></textarea>
                                    <input type="submit" name="submit" class="mt-6 w-full h-10 px-4 font-semibold text-gray-900 dark:text-white bg-indigo-500"/>
                                </form>
                                </div>
                                
                            </div>
                        </div>
@endsection
@section('footer')
    Footer
@endsection

        