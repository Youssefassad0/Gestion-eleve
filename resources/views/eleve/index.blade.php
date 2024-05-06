<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Liste des éléves</title>
  <style>
    .alert{
        position: absolute;
        top: 2rem;
        right: 2rem
    }
    #show{
        text-decoration: none;
        color: black
    }
    #show:hover{
        text-decoration: underline
    }
  </style>
</head>

<body>
  @if (session()->has('success'))
    <div id="alert" class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
      <h1 class="text-center">Liste des éléves</h1>
      <a href="{{ route('eleves.create') }}" class="btn btn-primary">Ajouter un éléve</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>Id éléve</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Id club</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($eleves as $eleve)
          <tr>
            <td>{{ $eleve->id }}</td>
            <td>{{ $eleve->nom }}</td>
            <td>{{ $eleve->prenom }}</td>
            <td>{{ $eleve->id_club }}</td>
            <td class="d-flex justify-content-between">
              <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-success">Modifier</a>
              <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Supprimer" class="btn btn-danger">
              </form>
              <a href="{{ route('eleves.show', ["id"=>$eleve->id]) }}" id="show">>>></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script>
    setTimeout(() => {
        document.getElementById('alert').style.display = "none"
    }, 2000);
  </script>
</body>

</html>
