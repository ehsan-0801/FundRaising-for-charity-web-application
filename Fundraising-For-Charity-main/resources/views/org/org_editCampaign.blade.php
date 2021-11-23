<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/org_dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/org_createCampaign.css')}}">
    <title>Edit Campaign</title>
</head>
<body>
    @include('org.navbar')
    
    <div class="create">
        <center>
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td class="td">
                            Campaign Title
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="title" value="{{$event->title}}" id="">
                            <div class="error-msg">@error('title'){{$message}}@enderror</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            Start Date
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="date" name="sDate" value="{{$event->startDate}}" id="">
                            <div class="error-msg">@error('sDate'){{$message}}@enderror</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            End Date
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="date"  name="eDate" value="{{$event->endDate}}" id="">
                            <div class="error-msg">@error('eDate'){{$message}}@enderror</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            Raise Goal
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="tel" name="rg" value="{{$event->targetAmount}}" id="">
                            <div class="error-msg">@error('rg'){{$message}}@enderror</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            Description
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="desc" value="{{$event->description}}" id="">
                            <div class="error-msg">@error('desc'){{$message}}@enderror</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>