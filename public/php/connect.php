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

    $machine = $_POST['carName'];
    $eventName = $_POST['eventName'];
    $eventDesc = $_POST['eventDesc'];




    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()) {

        echo "Failed to connect Mysql Db: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO utenti (nome, cognome, email) VALUES ('$firstName', '$lastName', '$email')";
    mysqli_query($conn, $sql);

    $sql2 = "INSERT INTO eventi (eventoName, descEvento) VALUES ('$eventName', '$eventDesc')";
    mysqli_query($conn, $sql2);

    $sql3 = "INSERT INTO cars (cars) VALUES ('$machine')";
    mysqli_query($conn, $sql3);
}

/*
problema: sembra non connettersi a questa tabella non capisco
provare a togliere data e time
if (isset($_POST['submit2'])) {


    //db credentials
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'edu_test';


    $eventName = $_POST['eventName'];
    $eventDesc = $_POST['eventDesc'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];




    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()) {

        echo "Failed to connect Mysql Db: " . mysqli_connect_error();
    }

    $sql2 = "INSERT INTO eventi (eventoName, descEvento, Dataevento, timeEvent) VALUES ('$eventName', '$eventDesc', '$eventDate', '$eventTime')";
    mysqli_query($conn, $sql2);
}
*/

/*
if (isset($_POST['submit'])) {
    //db credentials
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'edu_test';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $machine = $_POST['carName'];

    $sql3 = "INSERT INTO cars (cars) VALUES ('$machine')";
    mysqli_query($conn, $sql3);
}
*/


// $conn->close();
