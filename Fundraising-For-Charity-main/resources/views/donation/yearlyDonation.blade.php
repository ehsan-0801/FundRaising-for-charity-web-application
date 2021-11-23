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
    <title>Yearly Donation Report</title>
</head>
<body>
@include('user.admin.index') <br>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <td align="center"><strong>Year</strong></td>
            <td align="center"><strong>Total Amount</strong></td>
            {{--<td align="left"></td>--}}
        </tr>
        </thead>

        <tbody>
        @foreach($row as $data)
            <tr style="background-color: #d3d8e2">
                <td align="center"><a href="/donationReport/monthly/{{$data['date']}}">{{$data['date']}}</a></td>
                <td align="center">{{$data['totalAmount']}}</td>
                {{--<td align="left">
                    <a href="/donationReport/monthly/{{$data['date']}}" class="btn btn-danger">Monthly Report</a>
                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
