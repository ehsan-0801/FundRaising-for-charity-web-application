<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User List</title>
</head>
<body>
@include('user.admin.index') <br>

{{--Following line, If a manager account is create then in the user list
this messange will be show. Howerver if only this page is request by not createing
a manager account then the message will not be show--}}
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <td align="center">User Name</td>
                <td align="center">Email</td>
                <td align="center">Type</td>
                <td align="center"></td>
            </tr>
            </thead>

            <tbody>
            @foreach($result as $user)
                <tr style="background-color: #a0aec0">
                    <td align="center">{{$user['userName']}}</td>
                    <td align="center">{{$user['email']}}</td>
                    <td align="center">{{$user['type']}}</td>
                    <td align="center"><a href="/user/profile/{{$user['userId']}}" class="btn btn-success">Check Profile</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
