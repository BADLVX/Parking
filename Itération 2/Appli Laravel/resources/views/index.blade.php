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
                <th>Id</th>
                <th>Statut Place</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservations)
                <tr>
                    <td>{{ $reservations->Id }}</td>
                    <td>{{ $reservations->StatutPlace }}</td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>
