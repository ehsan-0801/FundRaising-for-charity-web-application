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

    <style>
        body{
            background-repeat: no-repeat, repeat;
            background-color: #cccccc;
        }
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        a:hover {
            background-color: #04AA6D;
        }
    </style>
</head>
<body class="w3-container w3-center w3-animate-opacity">
@include('user.admin.index') <br>
@include('event.index')

{{--
@extends('../../event/index')

@section('body')
@endsection
--}}

@if(session()->has('activeEventRemoveMessage'))
    <div class="alert alert-success">
        {{ session()->get('activeEventRemoveMessage') }}
    </div>
@endif

@if(session()->has('managerChangeForEventMsg'))
    <div class="alert alert-success">
        {{ session()->get('managerChangeForEventMsg') }}
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
                    <a href="/event/smallReport/{{$event['eventId']}}" class="w3-button w3-blue">Check Report</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/event/removeActiveEvent/{{$event['eventId']}}" style="color: lightskyblue" class="btn btn-danger">Remove Event</a>
                    <a href="/event/information/{{$event['eventId']}}" style="color: lightskyblue" class="btn btn-primary">Information</a>
                </td>
            </tr>
        </table>
        <hr>
        <br>
    @endforeach
</div>

</body>
</html>
