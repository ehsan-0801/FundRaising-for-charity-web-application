<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/man_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/man_createCampaign.css') }}">
    <title>Create Campaign</title>
</head>

<body>
    @include('manager.man_navbar')

    <div class="create">
        <center>
            <form action="" method="post">
                <table>
                    <tr>
                        <td class="td">
                            Campaign Title
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            Start Date
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="date" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            End Date
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="date" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            Raise Goal
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="tel" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            Description
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            Add Image:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="file" name="" id="">
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
