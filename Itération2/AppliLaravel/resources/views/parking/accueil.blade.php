@extends('parking.base')

@section('content')
<div class = "Container FadeInEffect">

    <div class = "NavigationBarWrapper">
        <nav class = "FullNavigationBar">
            <a href="accueil" id = "accueil">Accueil</a>
            <a href="reservero" id = "reserver">Reserver</a>
            <a href="etatreservation" id = "etatreservation">Etat Reservation</a>
            <a href="anciennereservation" id = "anciennereservation">Ancienne Reservation</a>

           
       </nav>
    </div>

    <div>
        <h1 id = "bienvenue">Bienvenue sur Parking</h1>
@endsection

