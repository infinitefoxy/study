<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simple.css') }}" >
    <title>Erstellungsansicht</title>
</head>
<body>

    <h1>Create Job</h1>

    <form action="{{ route('store') }}" method="POST">
    @csrf

        <label for="description">Titel:</label>
        <input type="text" name="title"><br><br>

        <label for="description">Stellenbeschreibung:</label>
    <textarea id="description" name="description" required></textarea><br><br>

    <label for="anstellungsart">Anstellungsart:</label>
    <select id="anstellungsart" name="anstellungsart" required>
        <option value="Befristet">Befristet</option>
        <option value="Festanstellung">Festanstellung</option>
    </select><br><br>

    <label for="standort">Standort:</label>
    <select id="standort" name="standort" required>
        <option value="Berlin">Berlin</option>
        <option value="Hamburg">Hamburg</option>
    </select><br><br>

    <label for="erfahrung">Erfahrung:</label>
    <select id="erfahrung" name="erfahrung" required>
        <option value="Trainee">Trainee</option>
        <option value="Senior">Senior</option>
    </select><br><br>

    <label for="sprache">Sprache:</label>
    <select id="sprache" name="sprache" required>
        <option value="Deutsch">Deutsch</option>
        <option value="Englisch">Englisch</option>
    </select><br><br>

    <button type="submit">Speichern</button>
</form>


<a href="/">Back</a>
</body>
</html>