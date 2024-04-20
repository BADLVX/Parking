@extends('parking.base')

<style>
    form, div{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        margin-bottom:10px;
    }
    li{
        margin-bottom:15px;
    }
    p{
        margin-bottom:20px;
    }
</style>


@section('content')

<!-- user-reservations.blade.php -->
<html>
<head>
    <title>Anciennes Réservations</title>
<body>
<div class = "Container FadeInEffect">
    <div class = "NavigationBarWrapper">
        <nav class = "FullNavigationBar">
            <a href="accueil" id = "accueil">Accueil</a>
            <a href="reservero" id = "reserver">Reserver</a>
            <a href="etatreservation" id = "etatreservation">Etat Reservation</a>
            <a href="anciennereservation" id = "anciennereservation">Ancienne Reservation</a>
             <!-- Lien de déconnexion -->
             <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class = "logout" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                        Déconnexion
                    </a>
                </form>
       </nav>
    </div>
    <div>
<div>
    <h1>Anciennes Réservations</h1>
    
 <p>Id de l'utiliateur : {{$Iduser = Auth::user()->id}}</p>
        @foreach($userReservations as $user)
            @if ( $Iduser == $user->id)

            
               <p> Les reservations de {{ $user->name }} sont: </p>

            <li>
                Les reservations de {{ $user->name }} sont:

                <ul>
                    @foreach($user->reservations as $reservation)

                            <li>{{ $reservation->id }} - début : {{ $reservation->DateAttribution }} - fin :{{ $reservation->DateFin }} </li>

                    @endforeach
                </ul>
           
            @endif
        @endforeach
   
</div>
</body>
</html>



<!-- user-reservations.blade.php

afficher les reservations de tous les utilisateurs
<html>
<head>
    <title>User Reservations</title>
</head>
<body>
    <h1>User Reservations</h1>
    <ul>
        @foreach($userReservations as $user)
            <li>
                {{ $user->name }}'s reservations:
                <ul>
                    @foreach($user->reservations as $reservation)
                        <li>{{ $reservation->id }} - {{ $reservation->date }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html> -->
@endsection
