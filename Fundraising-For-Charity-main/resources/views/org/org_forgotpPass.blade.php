<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/org_signup.css')}}">
    <title>password</title>
</head>
<body>
    <div class="container">

        <h2>Forgot Password</h2>

         <form action="" method="post">

            <input type="email" name="mail" id="" placeholder="Mail" value="{{old('mail')}}"> <br>
            <div class="error-msg">@error('mail'){{$message}}@enderror</div>

            <input type="password" name="pass" id="" placeholder="Password" value="{{old('pass')}}"><br>
            <div class="error-msg">@error('pass'){{$message}}@enderror</div>

            <input type="submit" name="submit" value="Change">
         </form>

         {{-- <div class="error-msg">
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        </div> --}}

         <div class="footer">
             Already have an account ? <a href="/login"> Sign In</a>
         </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>