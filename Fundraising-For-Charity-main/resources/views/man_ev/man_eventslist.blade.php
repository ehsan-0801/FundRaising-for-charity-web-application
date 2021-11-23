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

    <link rel="stylesheet" href="{{ asset('css/man_eventslist.css') }}">
    <title>Welcome</title>
</head>

<body>

    @include('manager.man_navbar')
    <nav class="sidebar">
        <div class="text">Options</div>
        <ul>
            <li><a href="#" class="events-btn">events
                    <span class="fas fa-caret-down first"></span>
                </a>

                <ul class="events-show">
                    <li><a href="/man_eventslist">events list</a></li>
                    <li><a href="/man_eventdone">Finished Events</a></li>
                    <li><a href="/man_eventreport">Event Report</a></li>
                </ul>
            </li>
            <li><a href="#" class="donors-btn">Donors
                    <span class="fas fa-caret-down second"></span>
                </a>

                <ul class="donors-show">
                    <li><a href="/man_donorlist">Donor's list</a></li>
                    <li><a href="/man_donorsearch">Donor Searching</a></li>
                </ul>
            </li>
            <li><a href="#" class="org-btn">Organizers
                    <span class="fas fa-caret-down third"></span>
                </a>

                <ul class="org-show">
                    <li><a href="/orglist">Organizers list</a></li>
                    <li><a href="/orgsearch">Organizers Searching</a></li>
                </ul>
            </li>
            <li><a href="#" class="cal-btn">Calculations
                    <span class="fas fa-caret-down fourth"></span>
                </a>

                <ul class="cal-show">
                    <li><a href="/monthly_calc">Monthly</a></li>
                    <li><a href="/yearly_calc">Annual</a></li>
                </ul>
            </li>
            <li><a href="/man_notices">Notices</a></li>
            <li><a href="/man_feedback">Feedback</a></li>
        </ul>
    </nav>

    <script>
        $('.events-btn').click(function() {
            $('nav ul.events-show').toggleClass("show");
            $('nav ul.first').toggleClass("rotate");
        });
        $('.donors-btn').click(function() {
            $('nav ul  .donors-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });

        $('.org-btn').click(function() {
            $('nav ul .org-show').toggleClass("show2");
            $('nav ul .third').toggleClass("rotate");
        });
        $('.cal-btn').click(function() {
            $('nav ul .cal-show').toggleClass("show3");
            $('nav ul .fourth').toggleClass("rotate");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    @foreach ($events as $event)


        <div class="card">

            <p class="title">
                Event ID :{{ $event['eventId'] }}
            </p>
            <p class="title">
                Event Title :{{ $event['title'] }}
            </p>
            <img src="{{ $event['image'] }}">
            <p Starting Date: {{ $event['startDate'] }} </p>
            <p>
                Ending Date: {{ $event['endDate'] }}
            </p>
            <p>Event's Information:</p>
            <div class="event-info">
                {{ $event['description'] }}
            </div>

            <a href="/event_details/{{ $event['eventId'] }}">Event details</a>
        </div>
    @endforeach



</body>

</html>
