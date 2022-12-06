@extends('layout')

@section('content')
  <section class="sign-in">
    <div class="container mt-50">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="/assets/img/signin-image.jpg" alt="sing up image"></figure>
                <a href="/register" class="signup-image-link">Create an account</a>
            </div>
            <div class="signin-form">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('failed'))
                    <div class="alert alert-danger">
                        {{ session('failed') }}
                    </div>
                @endif
                @if (session('notAllowed'))
                    <div class="alert alert-danger">
                        {{ session('notAllowed') }}
                    </div>
                @endif
                <div style="margin-top: 55px">
                <h2 class="form-title">Login</h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form method="POST" class="register-form" id="login-form" action="{{route('login.post')}}">
                    @csrf
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user"></i></label>
                        <input type="text" name="username" id="username" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection