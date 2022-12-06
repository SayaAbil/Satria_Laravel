@extends('layout')
@section('content')
<body>
    @if (session('islogin'))
    <div class="alert alert-success">
        {{ session('islogin') }}
    </div>
@endif
@if (session('notAllowed'))
                    <div class="alert alert-danger">
                        {{ session('notAllowed') }}
                    </div>
 @endif
                @if (session('addTodo'))
                    <div class="alert alert-success">
                        {{ session('addTodo') }}
                    </div>
                @endif
<h2 align=center style="margin-top: 50px">Ayo membuat apa yang harus kamu <br> lakukan, di Todoapp!!</h2>
<br>
<div class="d-flex justify-content-center justify-content-lg-start">
  <a class="btn-get-started" href="/create" role="button" style="text-decoration: none">Get Started</a>
</div>
<br>
<center>
  <div class="card border-light" style="width: 33rem;">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/signin-image.jpg" class="d-block w-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/signup-image.jpg" class="d-block w-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/signin-image.jpg" class="d-block w-50" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button></center>
  </div>
</div>
<br>

<div class="my-5 container col-8">
<div class="accordion " id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        About
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Website ini buat membuat Todo
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Kenapa Harus Disini?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
Karena disini ga ribet      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Gratis
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Disini Gratis 100%</strong>
      </div>
    </div>
  </div>
</div>
</div>
</body>
@endsection