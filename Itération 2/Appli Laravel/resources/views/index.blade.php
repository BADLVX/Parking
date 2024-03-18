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
            @foreach ($places as $place)
                <tr>
                    <td>{{ $place->id }}</td>
                    <td>{{ $place->statut_place }}</td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>
