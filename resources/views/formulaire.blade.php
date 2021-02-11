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
        <form method="POST" action="/addstudent">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input type="text" name="nom" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Genre</label>
                <input type="text" name="genre" class="form-control">
            </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="number" name="age" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>