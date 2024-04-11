<!-- user-reservations.blade.php -->
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
</html>
