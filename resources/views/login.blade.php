<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simple.css') }}" >
    <title>Login</title>
</head>
<body>
    
<h1>Login</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf

        <label for="name">Name</label>
        <input id="name" type="name" name="name" required autofocus><br>

        <label for="password">Passwort</label>
        <input id="password" type="password" name="password" required>

        <button type="submit">Anmelden</button>
   
</form>


</body>
</html>