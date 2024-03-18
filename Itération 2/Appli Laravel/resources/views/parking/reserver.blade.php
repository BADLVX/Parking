@extends('parking.base')

@section('content')
<div class = "Container FadeInEffect">

    <div class = "NavigationBarWrapper">


        <nav class = "FullNavigationBar">

            <a href="accueil" id = "accueil">Accueil</a>
            <a href="reserver" id = "reserver">Reserver</a>
            <a href="etatreservation" id = "etatreservation">Etat Reservation</a>
            <a href="anciennereservation" id = "anciennereservation">Ancienne Reservation</a>
       </nav>
       <div class = "buttonposition">
    <form action = "/reservations" method = "GET">
        <button type="submit">Réserver</button>
    </form>
    </div>

    </div>
@endsection
