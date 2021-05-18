<?php

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $makemodel = $_POST['makemodel'];
    $year = $_POST['year'];
    $notes = $_POST['notes'];
    $datepicker = $_POST['date-picker'];

    $mailto = "radridesstudio@yahoo.com";
    $header = $fname . " " . $lname . " Would like to book an appointment.\n\n See details below.";

    $content = " $fname $lname \n $phone $email \n $makemodel $year \n $notes \n preferred drop off date and time: $datepicker";

    mail($mailto, $header, $content);

}