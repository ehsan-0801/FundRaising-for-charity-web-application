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
    <div class="card">
        <img src="{{asset(session('eImg'))}}" alt="">
        <p class="title">
           {{session('title')}}
        </p>
        <p>
            Campaign Start : {{session('sDate')}} <br>
            Campaign End : {{session('eDate')}}
        </p>
        <hr>
        <p class="status">
            <span>Donor : 0</span>  | <span> Raised : ${{session('raised')}}</span>  |  <span>Goal : ${{session('rg')}}</span>
        </p>
        <hr>
        <div class="card-text">
            {{session('desc')}}
        </div>
        <br>
            <span>{{session('status')}}</span>
            <a href="/org/edit/{{session('eId')}}">Edit</a>
            <a href="/org/delete/{{session('eId')}}">Delete</a>
    </div>


    <div class="card">
        <img src="{{asset(session('eImg2'))}}" alt="">
        <p class="title">
           {{session('title2')}}
        </p>
        <p>
            Campaign Start : {{session('sDate2')}} <br>
            Campaign End : {{session('eDate2')}}
        </p>
        <hr>
        <p class="status">
            <span>Donor : 0</span>  | <span> Raised : ${{session('raised2')}}</span>  |  <span>Goal : ${{session('rg2')}}</span>
        </p>
        <hr>
        <div class="card-text">
            {{session('desc2')}}
        </div>
        <br>
            <span>{{session('status2')}}</span>
            <a href="/org/edit/{{session('eId2')}}">Edit</a>
            <a href="/org/delete/{{session('eId2')}}">Delete</a>
    </div>


    <div class="card">
        <img src="{{asset(session('eImg3'))}}" alt="">
        <p class="title">
           {{session('title3')}}
        </p>
        <p>
            Campaign Start : {{session('sDate3')}} <br>
            Campaign End : {{session('eDate3')}}
        </p>
        <hr>
        <p class="status">
            <span>Donor : 0</span>  | <span> Raised : ${{session('raised3')}}</span>  |  <span>Goal : ${{session('rg3')}}</span>
        </p>
        <hr>
        <div class="card-text">
            {{session('desc3')}}
        </div>
            <span>{{session('status3')}}</span>
            <a href="/org/edit/{{session('eId3')}}">Edit</a>
            <a href="/org/delete/{{session('eId3')}}">Delete</a>
    </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>