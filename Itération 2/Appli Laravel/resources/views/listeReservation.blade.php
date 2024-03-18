<!DOCTYPE html>
<html>
<head>
    <title>Liste des réservations</title>
</head>
<body>
    <h1>Liste des réservations</h1>
    <table>
        <thead>
            <tr>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Numéro de place</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->date_debut }}</td>
                <td>{{ $reservation->date_fin }}</td>
                <td>{{ $reservation->num_place }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
