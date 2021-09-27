<?php

if (isset($_POST['submit'])) {

    //db credentials
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'edu_test';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email =  $_POST['email'];
    $eventName = $_POST['eventName'];
    $eventDesc =  $_POST['eventDesc'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];




    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()) {

        echo "Failed to connect Mysql Db: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO utenti (nome, cognome, email) VALUES ('$firstName', '$lastName', '$email')";
    mysqli_query($conn, $sql);
}



















// $conn->close();
