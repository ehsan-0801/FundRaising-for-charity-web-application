<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/man_eventsdone.css') }}">
    <title>Welcome</title>
</head>

<body>

    @include('manager.man_navbar')
    <div>
        <h2>Active Events</h2>
        @foreach ($active as $event)


            <div class="card">

                <img src="asset/banner/campaign/2.jpg" alt="">
                <p class="title">
                    Events name: {{ $event['title'] }}
                </p>
                <p class="status">
                    <span>Involved : {{ $event['userId'] }}</span> | <span> Raised :
                        {{ $event['raisedAmount'] }}</span> | <span>Goal
                        :{{ $event['targetAmount'] }}</span>
                </p>
                <hr>
                <h4>info</h4>
                <div class="card-text">
                    {{ $event['description'] }}
                </div>
            </div>
        @endforeach

    </div>
    <a href="#" class="add-btn">add one</a>
    <hr>
    <div>
        <h2>Inactive</h2>
        @foreach ($inactive as $event)
            <div class="card-arc">

                <img src="asset/banner/campaign/3.jpg" alt="">
                <p class="title">
                    Events name: {{ $event['title'] }}
                </p>
                <p class="card-arc-status">
                    <span>Involved : {{ $event['userId'] }}</span> | <span> Raised :
                        {{ $event['raisedAmount'] }}</span> | <span>Goal
                        :{{ $event['targetAmount'] }}</span>
                </p>
                <hr>
                <h4>History</h4>
                <div class="card-arc-text">
                    {{ $event['description'] }}
                </div>

            </div>
        @endforeach

    </div>
    <a href="#" class="add-arc-btn">add one</a>
</body>
