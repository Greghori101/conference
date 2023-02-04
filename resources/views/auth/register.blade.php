

<!DOCTYPE html>
<link rel="stylesheet" href="register.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<html>
    <head>
        <title></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="ss" >
                <div class="img" >
                    <img src="Untitled-1.png" alt="">
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <p class="ti">sign up</P>
                    </div>
                    <div class="ww">
                        <input type="text" placeholder="full name"  class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <i class="uil uil-user"></i>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="ww">
                        <input type="email" placeholder="enter your email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                        <i class="uil uil-envelope icon" ></i>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="ww">
                        <input type="password" class="password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="enter your password"  >
                        <i class="uil uil-lock icon" ></i>
                        <i class="uil uil-eye hide" ></i>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="ww">
                        <input type="password" class="password" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password" >
                        <i class="uil uil-lock icon" ></i>
                        <i class="uil uil-eye hide" ></i>
                    </div>
                    <div class="btn">
                        <button type="submit">sign up</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="pro.js"></script>
    </body>
</html>


