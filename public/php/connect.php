<?php
/*
if (isset($_POST['submit1'])) {

    //db credentials
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'edu_test';

    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $eventName = isset($_POST['eventName']) ? $_POST['eventName'] : '';
    $eventDesc = isset($_POST['eventDesc']) ? $_POST['eventDesc'] : '';
    $eventDate = isset($_POST['eventDate']) ? $_POST['eventDate'] : '';
    $eventTime = isset($_POST['eventTime']) ? $_POST['eventTime'] : '';




    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()) {

        echo "Failed to connect Mysql Db: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO utenti (nome, cognome, email) VALUES ('$firstName', '$lastName', '$email')";
    mysqli_query($conn, $sql);
}
*/
if (isset($_POST['submit2'])) {

    //db credentials
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'edu_test';


    $eventName = isset($_POST['eventName']) ? $_POST['eventName'] : '';
    $eventDesc = isset($_POST['eventDesc']) ? $_POST['eventDesc'] : '';
    $eventDate = isset($_POST['eventDate']) ? $_POST['eventDate'] : '';
    $eventTime = isset($_POST['eventTime']) ? $_POST['eventTime'] : '';




    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()) {

        echo "Failed to connect Mysql Db: " . mysqli_connect_error();
    }

    $sql2 = "INSERT INTO eventi (nome_evento, descrizione_evento, date_time, ora) VALUES ('$eventName', '$eventDesc', '$eventDate', '$eventTime')";
    mysqli_query($conn, $sql2);
}















$conn->close();
