<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Student List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/formulaire">Formulaire</a>
            </li>
          </ul>
        </div>
    </nav>

    <section class="container">
        <h1 class="text-center">Section tout le monde</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Genre</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
              </tr>
            </thead>
            @foreach ($DBstudent as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nom}}</td>
                        <td>{{$item->genre}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->age}}</td>
                    </tr>
                </tbody>
            @endforeach
          </table>
    </section>

    <section class="container">
        <h1 class="text-center">Femme puissante</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Genre</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
              </tr>
            </thead>
            @foreach ($DBstudent as $item)
                @if ($item->genre=="Femme")
                    <tbody>
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->genre}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->age}}</td>
                        </tr>
                    </tbody>
                @endif
            @endforeach
          </table>
    </section>

    <section class="container">
        <h1 class="text-center">Homme bah ils sont là quoi</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Genre</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
              </tr>
            </thead>
            @foreach ($DBstudent as $item)
                @if ($item->genre=="Homme")
                    @if ($item->age > 24)
                    <tbody class="bg-primary">
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->genre}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->age}}</td>
                        </tr>
                    </tbody>
                    @elseif($item->age==22 || $item->age==23)
                    <tbody class="bg-info">
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->genre}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->age}}</td>
                        </tr>
                    </tbody>
                    @else
                    <tbody>
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->genre}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->age}}</td>
                        </tr>
                    </tbody>
                    @endif
                @endif
            @endforeach
          </table>
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>