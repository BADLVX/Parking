@extends('parking.base')
@section('content')
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
<p>Reservation</p>


<form method="POST" action="{{ route('reservations.store') }}"> 
    @csrf
<div class = "buttonposition">
    <button type="submit">Effectuer une réservation</button>
</div>
</form>

@endsection
