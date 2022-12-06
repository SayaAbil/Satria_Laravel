<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/edit.css" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="shortcut icon" href="/assets/img/atta.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    @if (Auth::check())
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/dashboard">Todoapp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

            </div>
          </div>
          <div class="navbar-nav">
            <a class="nav-link" href="/data">Data</a>
                <a class="nav-link" href="/create">Create</a>
            <a class="nav-link" href="/logout">Logout</a>
        </div>
      </nav>
      @endif
      <form action="/store" method="post" style="max-width: 500px; margin:auto;">
        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        @csrf
        <div class="d-flex flex-column">
          <div style="margin-top: 40px">
          </div>
        <h6>Title</h6>

        <input type="text" name="title" placeholder="Title">
        <div style="margin-top: 10px"></div>
        </div>
      </div>
      
        <h6>Batas Waktu</h6>
        <div style="margin-top: 10px"></div>
        <div class="d-flex flex-column">
        <input type="date" name="date">
        </div>
        <div style="margin-top: 10px"></div>
        <h6>Deskripsi</h6>
        <div style="margin-top: 20px"></div>
        <div class="d-flex flex-column">
        <textarea name="description" cols="30" rows="10" placeholder="Keterangan"></textarea>
        </div>
        <div style="margin-top: 20px"></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
</body>
</html>


