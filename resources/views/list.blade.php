<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simple.css') }}" >
    <title>Listenansicht</title>
</head>
<body>

<!-- Listenansicht eine Übersicht über eine Sammlung von Daten -->
<h1>Listenansicht</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Beschreibung</th>
        <th>Anstellungsart</th>
        <th>Standort</th>
        <th>Erfahrung</th>
        <th>Sprache</th>
        <th>Edit</th>
</tr>
<tr>
@foreach($daten as $datensatz)
        <td>{{ $datensatz->id }}</td>    
        <td>{{ $datensatz->title }}</td>
        <td>{{ $datensatz->description }}</td>
        <td>{{ $datensatz->anstellungsart }}</td>
        <td>{{ $datensatz->standort }}</td>
        <td>{{ $datensatz->erfahrung }}</td>
        <td>{{ $datensatz->sprache }}</td>
        <td><a href="./details/{{ $datensatz->id }}">Edit</a></td>  
    </tr>
    @endforeach
</table>


<a href="/">Back</a>
</body>
</html>
