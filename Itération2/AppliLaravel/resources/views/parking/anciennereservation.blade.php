@extends('parking.base')

@section('content')

<!-- user-reservations.blade.php -->
<html>
<head>
    <title>Anciennes Réservations</title>
<body>

  
<div>
    <h1>Anciennes Réservations</h1>
    
 <p>Id de l'utiliateur : {{$Iduser = Auth::user()->id}}</p>
        @foreach($userReservations as $user)
            @if ( $Iduser == $user->id)

            
               <p> Les reservations de {{ $user->name }} sont: </p>

          
                <ul>
                    @foreach($user->reservations as $reservation)

                            <li>{{ $reservation->id }} - début : {{ $reservation->DateAttribution }} - fin :{{ $reservation->DateFin }} </li>

                    @endforeach
                </ul>
           
            @endif
        @endforeach
   
</div>
</body>
</html>



<!-- user-reservations.blade.php

afficher les reservations de tous les utilisateurs
<html>
<head>
    <title>User Reservations</title>
</head>
<body>
    <h1>User Reservations</h1>
    <ul>
        @foreach($userReservations as $user)
            <li>
                {{ $user->name }}'s reservations:
                <ul>
                    @foreach($user->reservations as $reservation)
                        <li>{{ $reservation->id }} - {{ $reservation->date }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html> -->
@endsection
