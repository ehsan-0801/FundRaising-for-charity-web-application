<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0;
        }

        li:last-child {
            border-right: none;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>
<ul>
    @yield('navBar')
    <li><a href="/userHomePage/events">Home</a></li>
    <li><a href="/transactions">Transaction</a></li>
    <li><a href="/userList">User List</a></li>
    <li><a href="/addManager">Add Manager</a></li>
    <li><a href="/donationReport/yearly">Donation Report</a></li>
    <li><a href="/donorList">Donor List</a></li>
    <li><a href="/events/eventRequest">Event Request</a></li>
    <li><a href="/events/archivedEvents">Archived Events</a></li>
    <li><a href="/organizerList/report">Organizer Report</a></li>
    <li><a href="/nonOrganizerList" style="float: right">Non Organizer</a></li>
    <li><a href="/admin/notice">Notice</a></li>
    <li><a href="/admin/logout">Logout</a></li>
</ul>
</body>
</html>
