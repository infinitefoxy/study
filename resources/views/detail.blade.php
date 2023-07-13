<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simple.css') }}" >
    <title>Detailansicht</title>
</head>
<body>
    
<!-- Detailansicht alle verfügbaren Informationen zu einem bestimmten Eintrag -->
<h1> Detailansicht</h1>

<form action="{{ route('daten.update', $daten->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $daten->title }}">
    <textarea name="description">{{ $daten->description }}</textarea>
    <button type="submit">Speichern</button>
</form>


<a href="/">Back</a>
</body>
</html>