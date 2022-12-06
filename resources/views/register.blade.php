@extends ('layout')

@section('content')
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Register</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST"  action="{{route('register.post')}}" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="fa fa-user"></i></label>
                        <input type="text"  name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user"></i></label>
                        <input type="text" name="username" id="username" placeholder="Your username"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope"></i></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="fa fa-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" style="margin-left: 264px"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="/assets/img/signup-image.jpg" alt="sing up image"></figure>
                <a href="/login" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@endsection


