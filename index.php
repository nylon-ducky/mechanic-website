<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" media="screen and (min-width: 675px)" href="wideScreen.css">

    <link rel="stylesheet" media="screen and (max-width: 674px)" href="smallScreen.css">

    <title>Rad Rides Studio</title>
</head>

<body>


    <h1 id="head-img" class="jumbotron text-center animate__slideInDown">Manic Mechanic<br /><small>At The Rad Rides
            Studio</small></h1>
    <div id="navBar" class="animate__fadeInDownBig" onclick="openNav()">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
        <a href="index.html" class="nav">Home</a>

        <a href="savings.html" class="nav">Savings</a>

        <a href="appointment.html" class="nav">Book An Appointment</a>

        <a href="contact.html" class="nav">Contact</a>
    </div>
    <!-- end burger && header -->



    <!-- Hours -->
    <div id="hoursList">
        <ul id="hours" class="animate__fadeInLeft">
            <div>Our Hours Are As Follows</div>
            <br />
            <li>Monday: 9:00 AM - 5:00 PM</li>
            <li>Tuesday: 9:00 AM - 5:00 PM</li>
            <li>Wednesday: 9:00 AM - 5:00 PM</li>
            <li>Thursday: 9:00 AM - 5:00 PM</li>
            <li>Friday: 9:00 AM - 5:00 PM</li>
            <li>Saturday: 9:00 AM - 5:00 PM</li>
            <li>Sunday: Closed</li>
        </ul>
        <!-- What We Do -->
        <div id="WWD" class="animate__fadeInRight">
            <div class="text-center">What We Do</div>
            <br />
            <div id="WWDexp" class="text-center">
                Here at The Rad Rides Studio we have an affinity for antique and classic cars. We are also very well
                known for our exceptional body work. Yet still, we do everything a normal mechanic would do, and then
                some. Think of us as a one stop shop for all your automotive needs.
            </div>
        </div>
    </div>
    <!-- Call To Action * delayed to call attention * -->
    <div class="animate__slideInRight text-center" id="container">
        <a href="appointment.html">
            <img id="tire" src="assets\car-159720_640.png">
            <div id="wheel">Car Troubles?<br />Book Your Appointment Today!</div>
            </img>
        </a>
    </div>

    <script src="app.js"></script>
</body>

</html>
