<style>

form, div{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        margin-bottom:10px;
    }
    button{
        height: 50px;
        width: 50px;
    }
   span{
    color:red;
   }
</style>

@extends('parking.base')

@section('content')

<div class = "Container FadeInEffect">
    <div class = "NavigationBarWrapper">
        <nav class = "FullNavigationBar">
            <a href="accueil" id = "accueil">Accueil</a>
            <a href="reservero" id = "reserver">Reserver</a>
            <a href="etatreservation" id = "etatreservation">Etat Reservation</a>
            <a href="anciennereservation" id = "anciennereservation">Ancienne Reservation</a>
              <!-- Lien de déconnexion -->
            <form  method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a  href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                         Déconnexion 
                    </a>
            </form>
       </nav>
    </div>
    <div>
        <h1 id = "bienvenue">Bienvenue sur Parking</h1>


<div class = "center">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 
</div>
@endsection