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
    <title>Top Donor</title>
</head>
<body>
@include('user.admin.index') <br>
<div class="container">
    <br><br><br>
    <table class="table">
        <tbody>
        {{--Without this foreach loop there was a runtime erro
        Exactly Dont know why this happened. However, this loop will only interate one time
        --}}
        @foreach($users as $user)
        <tr>
            <td><strong>User Id</strong></td>
            <td>{{$user['userId']}}</td>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td>{{$user['userName']}}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{$user['email']}}</td>
        </tr>
        <tr>
            <td><strong>Raised Amount</strong></td>
            <td>{{$user['raisedAmount']}}</td>
        </tr>
        <tr>
            <td><strong>Type</strong></td>
            <td>{{$user['type']}}</td>
        </tr>
        @if($user['status'] == 1)
        <tr class="success">
            <td><strong>Status</strong></td>
            <td>Active &nbsp;&nbsp;
            </td>
        </tr>
        @else
        <tr class="success">
            <td>Status</td>
            <td>Inactive &nbsp;&nbsp;
            </td>
        </tr>
        @endif
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
