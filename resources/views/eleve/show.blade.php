<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Show éléve</title>
</head>

<body>
  <div class="container mt-5">
    <button class="btn btn-primary" ><a href="{{ route('eleves.index') }}" style="color: aliceblue;text-decoration:none;" >Back Home</a></button>

    <h1 class="text-center">Eleve: {{ $eleve->nom }} {{ $eleve->prenom }}</h1>

    <table class="table">
      <tr>
        <th>Id éléve</th>
        <td>{{ $eleve->id }}</td>
      </tr>
      <tr>
        <th>Nom</th>
        <td>{{ $eleve->nom }}</td>
      </tr>
      <tr>
        <th>Prenom</th>
        <td>{{ $eleve->prenom }}</td>
      </tr>
      <tr>
        <th>Id club</th>
        <td>{{ $eleve->id_club }}</td>
      </tr>
    </table>
    <h2 class="text-center mt-4">Liste d'activités auxquelles l'éléve a participé</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Id activité</th>
          <th>Description</th>
          <th>Date début</th>
          <th>Nombre de jours</th>
        </tr>
      </thead>
      <tbody>
        @php
          $totalDays = 0;
        @endphp
        @foreach ($activites as $activite)
          <tr>
            <td>{{ $activite->id }}</td>
            <td>{{ $activite->description }}</td>
            <td>{{ $activite->dateDebut }}</td>
            <td>{{ $activite->nombreJours }}</td>
          </tr>
          @php
            $totalDays += $activite->nombreJours;
          @endphp
        @endforeach
      </tbody>
    </table>
    <p class="mt-5">Nombre total des jours {{ $totalDays }}</p>
  </div>
</body>

</html>
