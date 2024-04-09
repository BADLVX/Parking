@extends('parking.base')
@section('content')
<nav class = "FullNavigationBar">

    <a href="accueil" id = "accueil">Accueil</a>
    <a href="reservero" id = "reserver">Reserver</a>
    <a href="etatreservation" id = "etatreservation">Etat Reservation</a>
    <a href="anciennereservation" id = "anciennereservation">Ancienne Reservation</a>
</nav>
<p>Reservation</p>


<form method="get" action=""> 
<div class = "buttonposition">
    <button type="submit">Effectuer une réservation</button>
</form>
</div>

@endsection
