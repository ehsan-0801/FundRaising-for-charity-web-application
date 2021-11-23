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
    <title>Brief Details</title>
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
        @foreach($events as $event)
        <tr>
            <td><strong>No. of Donors</strong></td>
            <td align="left">{{$event['totalDonors']}}</td>
        </tr>
        <tr>
            <td><strong>Total Raised Amount</strong></td>
            <td align="left">{{$event['totalRaisedAmount']}}</td>
        </tr>
        @endforeach

        @foreach($information as $info)
            <tr>
                <td><strong>User Id</strong></td>
                <td align="left">{{$info['userId']}}</td>
            </tr>
            <tr>
                <td><strong>User Name</strong></td>
                <td align="left">{{$info['userName']}}</td>
            </tr>
            <tr>
                <td><strong>User Email</strong></td>
                <td align="left">{{$info['email']}}</td>
            </tr>
            <tr>
                <td><strong>Title</strong></td>
                <td align="left">{{$info['title']}}</td>
            </tr>
            <tr>
                <td><strong>Start Date</strong></td>
                <td align="left">{{$info['startDate']}}</td>
            </tr>
            <tr>
                <td><strong>End Date</strong></td>
                <td align="left">{{$info['endDate']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
