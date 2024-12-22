<?php
include('database.php');
// print_r($_POST);
// exit();
if (isset($_POST['submit_btn'])) {

    $name = $_POST['uname'];

    $phone_number = $_POST['phone'];

    $gender = $_POST['gender'];

    $email = $_POST['email'];

    $address = $_POST['address'];

    $city = $_POST['city'];

    $blood_group = $_POST['blood_groups'];

    $specialist =  $_POST['specialists'];

    $doctor_name = $_POST['doctor_names'];

    $date = $_POST['date'];
    $date = strtotime($date);
    $insert_date = date('Y-m-d', $date);

    $time = $_POST['time'];

    $appointment_id = 'DOCTORSHUB' . rand(1, 1000);

    //print_r($_POST);
    // $con ='DOCTORSHUB'.'-'.'.'$time'.';

    $query = "INSERT INTO `appointment` (`appointment_id`,`name`, `phone_number`, `gender`, `email`, `address`, `city`, `blood_group`, `specialist`, `doctor`, `date`, `time`)  VALUES ('$appointment_id','$name', '$phone_number', '$gender', '$email', '$address', '$city', '$blood_group', '$specialist', '$doctor_name','$insert_date','$time')";
    // mysqli_query($conn, $query);
    // print_r($query);
    $inser_id = mysqli_query($conn , $query);
    // print_r($inser_id);
    if ($inser_id == true){
        header('location:dashboard.php');
    }
    else {
        echo 'Not Insert';
    }
 }
