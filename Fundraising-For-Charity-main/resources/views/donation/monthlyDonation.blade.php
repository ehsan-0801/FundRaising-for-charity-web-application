<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="../../js/jQuery/jquery-3.6.0.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
@include('user.admin.index') <br>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <td align="center"><strong>Month</strong></td>
            <td align="center"><strong>Total Donation Amount</strong></td>
            <td align="left"></td>
        </tr>
        </thead>

        <tbody>
        @foreach($row as $data)
            <tr style="background-color: #ece7e9">
                <td align="center">{{$data['date']}}</td>
                <td align="center">{{$data['totalAmount']}}</td>
                {{--<td align="left">
                    <a href="/donationReport/monthly/{{$data['date']}}" class="btn btn-danger">Monthly Report</a>
                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{--<script>
    $(document).ready(function () {
        //the following variable will be assigned the whole url string
        //var urlString = window.location;
        //creating a url type object. this object will help us get the data from the url string that we have passed in the url
        //var url = new URL(urlString);
        //var year = url.searchParams.get('year');
        var year = '2020';
        var dps = [];

        var chart = new CanvasJS.Chart("chartLineMonthSalesForYear", {
            animationEnabled: true,
            title: {
                text: "Monthly Sales"
            },
            data: [{
                type: "line",
                legendMarkerColor: "grey",
                yValueFormatString: "##0.00\" \"",
                indexLabel: "{label} {y}",
                dataPoints: dps
            }]
        });

        chart.render();

        $.getJSON("{{$data}}", function(data) {
            chart.data[0].set("dataPoints", data);
        });
    })
</script>--}}
{{--
</body>
</html>

    <!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Chart Js Example From Scratch - XpertPhp</title>
    <!-- Latest CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="chart-container">
    <div class="pie-chart-container">
        <canvas id="canvas" height="280" width="600"></canvas>
    </div>
</div>
<script>
    var year = <?php echo $y; ?>;
    var user = <?php echo $x; ?>;
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'User',
            backgroundColor: "pink",
            data: user
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#ffa0a0',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                }
            }
        });
    };
</script>
</body>
</html>
--}}
