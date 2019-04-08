<?php

if(isset($_POST['submit'])){
    $fullName = $_POST['fullName'];
    $mailTo = $_POST['email'];
    $tour = $_POST['tour'];
    $subject = "Hippo Campus Tour 2019";
    $mailFrom = "alvaro.serrano@wmich.edu";
    $message = "Congratulations! You have successfully booked your tour. For more information contact " . $mailFrom;
    $headers = "From" . $mailFrom;
    
    mail($mailTo, $subject, $message, $headers);
    header("Location: loginPage.php?mailSend");
}