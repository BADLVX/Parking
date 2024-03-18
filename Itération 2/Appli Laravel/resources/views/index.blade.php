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
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($places as $places)
                <tr>
                    <td>{{ $places->Id }}</td>
                    <td>{{ $places->StatutPlace }}</td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>
