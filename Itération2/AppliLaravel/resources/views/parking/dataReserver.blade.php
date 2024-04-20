@extends('parking.base')

@section('content')
<style>
    form, div{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        margin-bottom:10px;
    }
</style>
<div class = "Container FadeInEffect">

    <div class = "NavigationBarWrapper">


        <nav class = "FullNavigationBar">

            <a href="{{ url()->previous() }}" id = "accueil">Accueil</a>
            <a href="{{ url()->previous() }}" id = "reserver">Reserver</a>
            <a href="{{ url()->previous() }}" id = "etatreservation">Etat Reservation</a>
            <a href="{{ url()->previous() }}" id = "anciennereservation">Ancienne Reservation</a>
             <!-- Lien de déconnexion -->
             <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a  class = "logout" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                        Déconnexion
                    </a>
                </form>
       </nav>

    </div>

    <p>Merci d'avoir reservé ! </p>
    <p>Votre numero de reservation est : {{ $reservations->id }}</p>
    <p>Date de début : {{ $reservations->DateAttribution->toDateString() }} </p>
    <p>Date de fin : {{ $reservations->DateFin->toDateString() }} </p>

<a id = "retour" href="{{ url()->previous() }}">Retour</a>

</div>
@endsection
