<?php

if (isset($_POST['submit'])) {

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
    var_dump(mysqli_query($conn, $sql2));
}
