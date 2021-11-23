<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/org_dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/org_campaignDetails.css')}}">
    <title>Campaign Details</title>
</head>
<body>
    @if(session('type') == 'admin')
        @include('user.admin.index') <br>
    @else
    @include('org.navbar')
    @endif

    <div class="container">
        <img src="/{{$data->image}}" alt="event_image">
        <div class="container2">
            <span>{{$data->title}}</span> <br>
            <span>Donor : <a href="/donorlist/{{$data->eventId}}">{{$donorNo->count()}}</a></span>  | <span> Raised : {{$data->raisedAmount}}</span>  |  <span>Goal : {{$data->targetAmount}}</span>
        </div>
        <br>
        <p>
            Campaign Start : {{$data->startDate}}  |
            Campaign End : {{$data->endDate}}
        </p>
        <div class="text">
            {{$data->description}}
        </div>
        @if(session('type') != 'admin')
        <div class="button">
            <a href="/donate/transaction/{{$data->eventId}}">Donate</a>
        </div>
        @endif
    </div>

    @if(session('type') != 'admin')
    <div class="comment">
        <form method="POST" action="/campaignComment/{{$data->eventId}}">
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="comment">
        </form>
    </div>
    @endif

    <br>
    <br>
    <div class="comment-section">

        @if(session('type') == 'admin')
            <a href="/event/detailReviews/{{$data->eventId}}">Check Reviews in Details</a>
        @endif

        <center><b>!--Comments--!</b></center>
        <br>
            @foreach ($cmt as $item)
            <div class="cmText">
                <ul>
                    <li><b>{{$item['description']}}</b>  ------>  Date : {{$item['date']}}</li>
                </ul>
            </div>
            @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
