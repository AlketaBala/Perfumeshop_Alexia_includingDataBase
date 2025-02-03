<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "All fields are required.";
    } else {
        $sql = "INSERT INTO kontaktii (name, email, phone, message)
        VALUES ('$name', '$email', '$phone', '$message')";
       
       if(mysqli_query($conn, $sql)){
        
    } else {
        echo "Error: " . mysqli_error($conn);
    }

       }
    }
    mysqli_close($conn);
    require 'contact.html';
?>