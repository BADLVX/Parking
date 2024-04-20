

<style>
    div{
        display:flex;
            justify-content: center;
            align-items: center;
            justify-content:center;
        flex-direction:column;
    }
    </style>
  
<div>
    <p>Merci d'avoir reservé ! </p>
    <p>Votre numero de reservation est : {{ $reservations->id }}</p>
    <p>Date de début : {{ $reservations->DateAttribution->toDateString() }} </p>
    <p>Date de fin : {{ $reservations->DateFin->toDateString() }} </p>

<a id = "retour" href="{{ url()->previous() }}">Retour</a>

</div>

