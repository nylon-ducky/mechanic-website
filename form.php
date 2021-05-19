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
    $subject = $fname . " " . $lname . " Would like to book an appointment";

    $content = " $fname $lname \n $phone $email \n $makemodel $year \n $notes \n preferred drop off date and time: $datepicker";
    $headers = "sent with php from heroku";
    mail($mailto, $subject, $content,$headers);
    
}