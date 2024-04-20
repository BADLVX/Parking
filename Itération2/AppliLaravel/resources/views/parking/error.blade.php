
@extends('parking.base')

<!DOCTYPE html>

<html>
<head>
    <title>Erreur</title>
</head>
<style>
    form, div{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        margin-bottom:10px;
       
    }
  
</style>
<body>

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
                    <a class = "logout" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                        Déconnexion
                    </a>
                </form>
       </nav>
    </div>
  
    
   
    <h1>Erreur</h1>
    <p>{{ $errorMessage }}</p>
</div>

</body>
</html>
