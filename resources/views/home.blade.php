<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <h3>Elenco zappatori colture di casa</h3>
    @foreach ($studenti as $student)
    <h1> {{ $student}} </h1>
@endforeach
<a href="{{ url('/admin') }}">scheda anagrafica admin</a>
</body>
</html>