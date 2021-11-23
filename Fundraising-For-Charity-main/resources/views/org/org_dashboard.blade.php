<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/org_dashboard.css')}}">
    <title>Welcome</title>
</head>
<body>

    @include('org.navbar')
        
    <!--! campaign card -->
    @foreach ($eventList as $event)
    @if ($event->status!=-1)
    <div class="card">
        <img src="{{$event->image}}" alt="">
        <p class="title">
            {{$event->title}}
        </p>
        <p>
            Campaign Start :  {{$event->startDate}} <br>
            Campaign End :  {{$event->endDate}}
        </p>
        <br>
        <span>Manager Id : {{$event->managerId}}</span>
        <hr>
        <p class="status">
            <span> Raised :  {{$event->raisedAmount}}</span>  |  <span>Goal : {{$event->targetAmount}}</span>
        </p>
        <hr>
        <div class="card-text">
            {{$event->description}}
        </div>
        
            <a href="/campaignDetails/{{$event->eventId}}">Donate Now</a>
    </div>
    @endif
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>