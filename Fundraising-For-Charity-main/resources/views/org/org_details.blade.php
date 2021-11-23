<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/org_dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/org_details.css')}}">
    <title>Details</title>
</head>
<body>
    @include('org.navbar')

    <center>
        <img src="{{asset($org->image)}}" alt="profile">
        <br>
        <table>
            <tr>
                <td>
                    Name
                </td>
                <td class="box">
                    {{$org->name}}
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td class="box">
                    {{$org->email}}
                </td>
            </tr>
            
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td class="box">
                    {{$org->gender}}
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td class="box">
                    {{$org->address}}
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>
                    Phone
                </td>
                <td class="box">
                    {{$org->phone}}
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="/editProfile">Edit Profile</a>
                </td>
            </tr>
        </table>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>