<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{'css/org_signup.css'}}">
    <title>Signup</title>
</head>
<body>
    <div class="container">

        <h2>Sign Up</h2>

         <form action="" method="post">
            <input type="text" name="name" id="" placeholder="Name" value="{{old('name')}}"> <br>
            <div class="error-msg">@error('name'){{$message}}@enderror</div>

            <input type="email" name="mail" id="" placeholder="Mail" value="{{old('mail')}}"> <br>
            <div class="error-msg">@error('mail'){{$message}}@enderror</div>

            <div class="gender">
                <div class="text">
                    Gender : 
                </div>
                <div class="radio">
                    <span><input class="form-check-input" type="radio" name="flexRadioDefault" value="Male" id="flexRadioDefault1"> Male </span>
                    <span><input class="form-check-input" type="radio" name="flexRadioDefault" value="Female" id="flexRadioDefault1"> Female</span>
                    <span><input class="form-check-input" type="radio" name="flexRadioDefault" value="Others" id="flexRadioDefault1"> Others</span>    
                </div>    
            </div><br><br>
            <div class="error-msg">@error('flexRadioDefault'){{$message}}@enderror</div>

            <input type="text" name="address" id="" placeholder="Address" value="{{old('address')}}"> <br>
            <div class="error-msg">@error('address'){{$message}}@enderror</div>

            <input type="text" name="phone" id="" placeholder="Phone" value="{{old('phone')}}"> <br>
            <div class="error-msg">@error('phone'){{$message}}@enderror</div>

            <input type="password" name="password" id="" placeholder="Password" value="{{old('pass')}}"><br>
            <div class="error-msg">@error('password'){{$message}}@enderror</div>

            <input type="password" name="password_confirmation" id="" placeholder="Confirm Password" value="{{old('cpass')}}"> <br>
            <div class="error-msg">@error('password_confirmation'){{$message}}@enderror</div>

            <input type="submit" name="submit" value="Signup">
         </form>

         {{-- <div class="error-msg">
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        </div> --}}

        <div class="error-msg error">
            {{session('msgSign')}}
        </div>

         <div class="footer">
             Already have an account ? <a href="/login"> Sign In</a>
         </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>