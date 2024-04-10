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

    <p>Merci d'avoir reservé ! </p>
    <p>Votre numero de reservation est : {{ $reservations->id }}</p>
    <p>Date de début : {{ $reservations->DateAttribution->toDateString() }} </p>
    <p>Date de fin : {{ $reservations->DateFin->toDateString() }} </p>



</div>
@endsection
