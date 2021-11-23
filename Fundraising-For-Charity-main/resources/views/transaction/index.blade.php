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
    <title>Document</title>
</head>
<body>
@include('user.admin.index') <br>
<div align="center">Transaction Report</div>
<div class="container">
    <h2>Yearly Report</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Organizer</th>
            <th>Event Title</th>
            <th>Commission</th>
            <th>Amount</th>
        </tr>
        </thead>

        <tbody>
            @foreach($result as $details)
                <tr>
                    <td class="info">{{$details['date']}}</td>
                    <td class="danger">{{$details['userName']}}</td>
                    <td class="success">{{$details['title']}}</td>
                    <td class="warning">{{$details['commissionAmount']}}</td>
                    <td class="active">{{$details['totalAmount']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
