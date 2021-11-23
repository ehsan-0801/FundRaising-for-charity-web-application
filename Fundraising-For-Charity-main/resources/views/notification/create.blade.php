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
    <title>Create Notice</title>
</head>
<body>
@include('user.admin.index') <br>
<div class="container">
    <form action="" method="post">
        <table class="table">
            <tr>
                <td><strong>TO</strong>
                    <select name="managerUserId">
                        @foreach($managers as $manager)
                            <option value="{{$manager['userId']}}" name="{{$manager['userId']}}">{{$manager['userName']}}</option>
                        @endforeach
                    </select>
                </td>
                {{--<td></td>--}}
            </tr>
            <tr>
                <td>
                    <input type="text" name="title" placeholder="Title..." size="100" value="{{old('title')}}"> <br>
                    <div style="color: #d20c3b">{{$errors->first('title')}}</div>
                </td>
                {{--<td>
                    <div style="color: #d20c3b; background-color: wheat">{{$errors->first('title')}}</div>
                </td>--}}
            </tr>
            <tr>
                <td>
                    <textarea name="message" placeholder="Details..." rows="10" cols="100">
                        {{old('message')}}
                    </textarea>
                    <div style="color: #d20c3b">{{$errors->first('message')}}</div>
                    <input type="submit" name="createNotice" value="Send Notice" class="btn btn-success">
                </td>
                {{--<td>
                    <div style="color: #d20c3b; background-color: wheat">{{$errors->first('message')}}</div>
                </td>--}}
            </tr>
        </table>
    </form>
</div>
</body>
</html>
