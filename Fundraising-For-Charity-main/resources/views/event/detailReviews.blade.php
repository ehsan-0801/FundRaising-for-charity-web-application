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
    <title>Reviews</title>
</head>
<body>
@include('user.admin.index') <br>

@if(session()->has('removeEventCommentMsg'))
    <div class="alert alert-success">
        {{ session()->get('removeEventCommentMsg') }}
    </div>
@endif

<div align="center">
    @foreach($events as $event)
        <table align="center">
            <tr>
                <td>
                    {{$event['userName']}} <br>
                    {{$event['email']}} <br>
                    {{$event['date']}} <br>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea readonly rows="5" cols="100">{{$event['description']}}</textarea>
                    <a href="/event/removeComment/{{$event['commentId']}}/{{$event['eventId']}}" class="btn btn-danger">Remove Comment</a>
                </td>
            </tr>
        </table>
        <hr>
        <br>
    @endforeach
</div>
</body>
</html>
