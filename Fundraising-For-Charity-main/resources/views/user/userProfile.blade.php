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

    <style>
        input[type=button], a{
            background-color: #532b0d;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 15%;
            opacity: 0.5;
        }
    </style>
    <title>Document</title>
</head>
<body>
@include('user.admin.index') <br>

<div class="container">
    <br><br><br>
    <table class="table">
        <tbody>
        <tr>
            <td>Name</td>
            <td>{{$user['userName']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user['email']}}</td>
        </tr>
        <tr>
            <td>type</td>
            <td>{{$user['type']}}</td>
        </tr>
        @if($user['status'] == 1)
            <tr class="success">
                <td>Status</td>
                <td>Active &nbsp;&nbsp;
                    <a href="/user/changeStatus/{{$user['userId']}}/{{$user['status']}}">Change Status</a>
                </td>
            </tr>
        @else
            <tr class="success">
                <td>Status</td>
                <td>Inactive &nbsp;&nbsp;
                    <a href="/user/changeStatus/{{$user['userId']}}/{{$user['status']}}">Change Status</a>
                </td>
            </tr>
        @endif

        </tbody>
    </table>
</div>
</body>
</html>
