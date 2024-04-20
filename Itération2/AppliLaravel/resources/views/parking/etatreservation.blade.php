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

<p>teste etat reservation</p>



</div>
@endsection
