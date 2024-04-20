@extends('parking.base')

@section('content')
<!-- user-reservations.blade.php -->
<html>
<head>
    <title>Anciennes Réservations</title>
<body>
    <h1>Anciennes Réservations</h1>
    <ul>
 Id de l'utiliateur : {{$Iduser = Auth::user()->id}}
        @foreach($userReservations as $user)
            @if ( $Iduser == $user->id)
            <li>
                Les reservations de {{ $user->name }} sont:
                <ul>
                    @foreach($user->reservations as $reservation)

                            <li>{{ $reservation->id }} - début : {{ $reservation->DateAttribution }} - fin :{{ $reservation->DateFin }} </li>

                    @endforeach
                </ul>
            </li>
            @endif
        @endforeach
    </ul>
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
