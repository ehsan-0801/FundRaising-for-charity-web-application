{{--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>--}}
{{--@extends('user.admin.userHome')--}}
{{--@extends('../user/admin/userHome')

@section('index')
<div align="center">
    <a href="/topDonor"><strong>Top Donor Details</strong></a>
    <a href="/nonDonorList">Non Donor List</a>
    <h2>Donor List</h2>
</div>
@endsection--}}

<div>
    @yield('body')
    <div align="center">
        <form action="" method="post">
            <input type="text" class="w3-input w3-border w3-round-xlarge" name="eventText" placeholder="Search..." style="width: 50%">
            <input type="submit" class="btn btn-danger" name="eventSearch" value="Search">
        </form>
    </div>
</div>

{{--</body>
</html>--}}
