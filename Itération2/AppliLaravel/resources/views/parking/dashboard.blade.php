@extends('parking.base')


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


</x-app-layout>
</div>


