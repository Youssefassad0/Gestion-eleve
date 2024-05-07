<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Edit élève</title>
</head>

<body>
  <div class="container mt-5">
    <button class="btn btn-primary" ><a href="{{ route('eleves.index') }}" style="color: aliceblue;text-decoration:none;" >Back Home</a></button>

    <h1 class="text-center">Modifier un élève</h1>

    <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
      @csrf
      @method('PUT')
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id élève</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Id club</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="id" value="{{ $eleve->id }}" readonly></td>
            <td><input type="text" name="nom" value="{{ $eleve->nom }}"></td>
            <td><input type="text" name="prenom" value="{{ $eleve->prenom }}"></td>
            <td>
              <select name="id_club" class="form-select">
                @foreach ($clubs as $club)
                  <option value="{{ $club->id }}" {{ $club->id === $eleve->id_club ? 'selected' : '' }}>
                    {{ $club->nom }}
                  </option>
                @endforeach
              </select>
            </td>
            <td><button type="submit" class="btn btn-success">Modifier</button></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</body>

</html>
