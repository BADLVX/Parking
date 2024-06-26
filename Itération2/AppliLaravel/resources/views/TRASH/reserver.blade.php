<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ParkingAccueil.css">
    <script type="text/javascript" src="reserver.css"></script>
    <title>Parking</title>
    <style>
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
                height: 100vh;
        }
        button{
                    background-color: rgb(123, 123, 196);
                    width: 200px;
                    height: 50px;
        }
        button:hover{
                   cursor:pointer;
        }
    </style>
</head>
<body>

<div class = "Container FadeInEffect">

    <div class = "NavigationBarWrapper">


        <nav class = "FullNavigationBar">

            <a href="ParkingAccueil" id = "accueil">Accueil</a>
            <a href="reserver" id = "reserver">Reserver</a>
            <a href="etatreservation" id = "etatreservation">Etat Reservation</a>
            <a href="anciennereservation" id = "anciennereservation">Ancienne Reservation</a>
       </nav>

    </div>
<!-- <a href="{ { route('dashboard') }} " id = "accueil">Accueil</a>
            <a href="{{  route('reserver') } }" id = "reserver">Reserver</a>
            <a href="{{  route('etatreservation') } }" id = "etatreservation">Etat Reservation</a>
            <a href="{{  route('anciennereservation') } }" id = "anciennereservation">Ancienne Reservation</a>-->

   <div class = "buttonposition">
    <form action = "/reservations" method = "GET">
        <button type="submit">Réserver</button>
    </form>
    </div>


</div>

</body>
</html>
