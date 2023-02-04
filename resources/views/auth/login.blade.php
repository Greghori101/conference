

<!DOCTYPE html>
<link rel="stylesheet" href="pro.css">
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <p class="ti">sign in</P>
                    </div>
                    <div class="ww">
                        <input type="email" placeholder="enter your email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" name="email" required >
                        <i class="uil uil-envelope icon" ></i>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="ww">
                        <input type="password" class="password form-control @error('password') is-invalid @enderror" name="password"" placeholder="enter your password" required >
                        <i class="uil uil-lock icon" ></i>
                        <i class="uil uil-eye hide" ></i>
                    </div>
                    <div class="aze">
                        <div class="qwe">
                            <input type="checkbox" id="check">
                            <label for="check" class="tt">remembre me</label>
                        </div>
                        <div class="div">
                            <a href="#" class="text">forgot password?</a>
                        </div>
                    </div>
                    <div class="btn">
                        <button >sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="pro.js"></script>
    </body>
</html>
