<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ParkingAccueil.css">
    <title>Parking</title>
</head>
<body>
<style>

form, div{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        margin-bottom:10px;
        
    }
    .anciennereservation{
margin-right{
    margin-right:20px;
}
.FullNavigationBar .logout a {
    color:red;
}

    }
    .FullNavigationBar {
        background-color: #333; /* Couleur de fond de la barre de navigation */
        overflow: hidden;
    }

    .FullNavigationBar a {
        float: left; /* Faire en sorte que les éléments de la barre de navigation se placent horizontalement */
        display: block;
        color: #f2f2f2; /* Couleur du texte */
        text-align: center;
        padding: 14px 16px; /* Espacement autour du texte */
        text-decoration: none;
       
    }

    .FullNavigationBar a:hover {
        background-color: #ddd; /* Couleur de fond au survol */
        color: black; /* Couleur du texte au survol */
    }
    .buttonposition{
                display:flex;
                justify-content: center;
                align-items: center;

        }
        button{
                    background-color: rgb(123, 123, 196);
                    width: 200px;
                    height: 50px;
        }
        button:hover{
                   cursor:pointer;
        }
        p, h1{
            text-align:center;
        }
     #retour{
        display:flex;
                justify-content: center;
                align-items: center;
                text-decoration:none;
                color:#007bff;
     }
     #retour:hover{
        color:black;
     }
</style>
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
                <a class = "logout" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    Déconnexion
                </a>
            </form>
        </nav>
    </div>
</div>
<div class = "container">
    @yield('content')
</div>
</body>
</html>
