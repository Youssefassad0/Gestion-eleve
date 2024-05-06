<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Ajouter élève</title>
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center">Créer un élève</h1>

    <form action="{{ route('eleves.store') }}" method="POST">
      @csrf
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Id club</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="nom"></td>
            <td><input type="text" name="prenom"></td>
            <td>
              <select name="id_club" class="form-select">
                @foreach ($clubs as $club)
                  <option value="{{ $club->id }}">
                    {{ $club->nom }}
                  </option>
                @endforeach
              </select>
            </td>
            <td><button type="submit" class="btn btn-success">Ajouter</button></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</body>

</html>
