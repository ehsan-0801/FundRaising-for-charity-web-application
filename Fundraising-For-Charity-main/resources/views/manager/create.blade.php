<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            background-image: url('https://www.w3schools.com/css/img_tree.png');
            background-repeat: no-repeat, repeat;
            background-color: #cccccc;
        }
        /*.container {
            padding: 16px;
            background-color: white;
        }*/
        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 20%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        /* Set a style for the submit button */
        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            opacity: 0.9;
        }
        .registerbtn:hover {
            opacity: 1;
        }
        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }
    </style>

</head>
<body>
@include('user.admin.index') <br>

<form action="/addManager" method="post">
    <div align="center">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Name</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" placeholder="Enter Name" name="name" id="name" value="{{old('name')}}">
        <div>{{$errors->first('name')}}</div>
        <br>

        <label for="email"><b>Email</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" placeholder="Enter Email" name="email" id="email" value="{{old('email')}}">
        <div>{{$errors->first('email')}}</div>
        <br>

        <label for="psw"><b>Password</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" placeholder="Enter Password" name="password" id="password" value="{{old('password')}}">
        <div>{{$errors->first('password')}}</div>
        <br>

        <hr>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" class="registerbtn" value="Register">
        <br><br>
        @if(session()->has('emailExistsMsg'))
            <div class="alert alert-danger">
                {{ session()->get('emailExistsMsg') }}
            </div>
        @endif
    </div>
</form>
<div align="center">

</div>
</body>
</html>
