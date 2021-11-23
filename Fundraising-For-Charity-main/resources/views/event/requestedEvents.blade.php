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
@if(session()->has('eventAcceptMessage'))
    <div class="alert alert-success">
        {{ session()->get('eventAcceptMessage') }}
    </div>
@endif

@if(session()->has('removePendingEventMsg'))
    <div class="alert alert-success">
        {{ session()->get('removePendingEventMsg') }}
    </div>
@endif

<div align="center">
    @foreach($events as $event)
        <table align="center">
            <tr>
                <td>
                    {{--<img src="https://image.shutterstock.com/image-photo/creative-ideas-bring-money-white-260nw-1610211523.jpg" alt="" height="200" width="300">--}}
                    <img src="{{asset($event['image'])}}" alt="" height="200" width="300">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>{{$event['title']}}</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color: #237fab">Target Amount: </label><strong>{{$event['targetAmount']}}</strong>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/campaignDetails/{{$event['eventId']}}" class="btn btn-info">Check Details</a>
                    <a href="/eventRequest/approveForm/{{$event['eventId']}}" style="color: #2d3439" class="btn btn-success">Approve</a>
                    <a href="/events/removePendingEvent/{{$event['eventId']}}" style="color: lightskyblue" class="btn btn-danger">Remove Event</a>
                    <a href="/event/smallReport/{{$event['eventId']}}" class="w3-button w3-blue">Check Report</a>
                </td>
            </tr>
        </table>
        <hr>
        <br>
    @endforeach
</div>
</body>
</html>
