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
    <title>Donor List</title>
</head>
<body>
@include('user.admin.index') <br>
    <div align="center">
        <a href="/topDonor"><strong>Top Donor Details</strong></a>
        <a href="/nonDonorList">Non Donor List</a>
        <h2>Donor List</h2>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <td align="center"><strong>User Id</strong></td>
                <td align="center"><strong>User Name</strong></td>
                <td align="center"><strong>Total Amount</strong></td>
            </tr>
            </thead>

            <tbody>
            @foreach($data as $user)
                <tr style="background-color: #c6cddd">
                    <td align="center">{{$user['userId']}}</td>
                    <td align="center">{{$user['userName']}}</td>
                    <td align="center">{{$user['totalAmount']}}</td>
                    {{--<td align="center"><a href="/user/profile/{{$user['userId']}}" class="btn btn-success">Check Profile</a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
