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
    <title>Notices</title>
</head>
<body>
@include('user.admin.index') <br>

@if(session()->has('noticeSentMsg'))
    <div class="alert alert-success">
        {{ session()->get('noticeSentMsg') }}
    </div>
@endif

<div align="right">
    <a href="/notices/checkSentNotices" class="btn btn-danger">Sent Notices</a> &nbsp;
    <a href="/admin/createNotice" class="btn btn-success">+Create New Notice</a>
</div>
<div align="center">
    @foreach($notices as $notice)
        <table align="center">
            <tr>
                <td>
                    <h3>{{$notice['title']}}</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color: #5cab23">Email: </label><strong>{{$notice['email']}}</strong>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color: #5cab23">Date: </label><strong>{{$notice['date']}}</strong>
                </td>
            </tr>
            @if($notice['status'] == 0)
                <tr>
                    <td>
                        <strong style="color: red">Unread</strong>
                    </td>
                </tr>
            @endif
            <tr>
                <td>
                    <a href="/admin/readNotice/{{$notice['notificationId']}}" class="btn btn-primary">Check</a>
                </td>
            </tr>
        </table>
        <hr>
        <br>
    @endforeach
</div>
</body>
</html>
