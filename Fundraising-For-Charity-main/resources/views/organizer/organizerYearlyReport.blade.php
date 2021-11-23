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
    <title>Organizer</title>
</head>
<body>
@include('user.admin.index') <br>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <td align="center"><strong>Year</strong></td>
            <td align="center"><strong>Total Raised Donation</strong></td>
            {{--<td align="left"></td>--}}
        </tr>
        </thead>

        <tbody>
        @foreach($report as $data)
            <tr style="background-color: #c6cddd">
                <td align="center">{{$data['date']}}</td>
                <td align="center">{{$data['totalAmount']}}</td>
                {{--<td align="center"><a href="/organizerReport/yearly/{{$data['userId']}}" class="btn btn-success">Yearly Report</a></td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
