<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <!-- ! Side image -->
    <div class="side_img">
        <img src="{{asset('asset/banner/1.jpg')}}" alt="side_img">
    </div>

    <div class="container">
        <div class="logo">
            <img src="asset/logo/logo2.png" alt="">
        </div>
        <div class="login">
            Log In
        </div>
        
        <!-- !login form -->
        <div class="form">
            <form method="POST">
                <input type="text" name="mail" id="" placeholder="Email" value="{{old('mail')}}"> <br>
                <div class="error-msg">@error('mail'){{$message}}@enderror</div>
                <input type="password" name="pass" id="" placeholder="Password" value="{{old('pass')}}"> <br>
                <div class="error-msg">@error('pass'){{$message}}@enderror</div>
                <input type="submit" value="Log In">
            </form>
        </div>

        <div class="error-msg bottom">
            {{session('msg')}}
        </div>

        <div class="footer">
            <div class="forgot-pass">
                Forget your password ? <a href="/org/forgotPass">Click here</a>
            </div>
            <div class="signup">
                Don't have account ? <a href="/signup">Click here</a>
            </div>
            
        </div>
    </div>
</body>
</html>