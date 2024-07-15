<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$ph = $_POST['ph'];
$email = $_POST['email'];
$stadd = $_POST['stadd'];
$stadd2 = $_POST['stadd2'];
$city = $_POST['city'];
$state = $_POST['st'];
$pin = $_POST['pin'];
$message = $_POST['message'];


$conn = new mysqli('localhost', 'root', '', 'ans');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into students(fname ,lname,ph,email,stadd,stadd2,city,state,pin,message) value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisssssis", $fname, $lname, $ph, $email, $stadd, $stadd2, $city, $state, $pin, $message);
    $stmt->execute();
    echo'<script>alert("Sucessfully Submited Your Form")</script>';
    $stmt->close();
    $conn->close();
}


?>