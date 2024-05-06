<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des éléves</title>
    <style>
        .welcome{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="welcome">
        <p>Bienvenue sur la page de gestion des élèves !</p>
        <a href="{{ route('eleves.index') }}">Liste des éléves</a>
    </div>
</body>
</html>