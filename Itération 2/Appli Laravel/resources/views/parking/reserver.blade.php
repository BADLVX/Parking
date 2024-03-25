@extends('parking.base')
@section('content', 'Reserver une place')
<nav class = "FullNavigationBar">

    <a href="accueil" id = "accueil">Accueil</a>
    <a href="reserver" id = "reserver">Reserver</a>
    <a href="etatreservation" id = "etatreservation">Etat Reservation</a>
    <a href="anciennereservation" id = "anciennereservation">Ancienne Reservation</a>
</nav>

<form method="get" action="{{ route('reservations.store') }}">
    @csrf
    <button type="submit">Effectuer une réservation</button>
</form>

@endsection
