<?php
//db credentials
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'edu_test';

$firstName = $_POST['firstName'];
$laststName = $_POST['lastName'];
$email = $_POST['email'];
$eventName = $_POST['eventName'];
$eventDesc = $_POST['eventDesc'];
$eventDate = $_POST['eventDate'];
$eventTime = $_POST['eventTime'];


if (isset($_POST['submit'])) {
    $conn = mysqli_connect($servername, $username, $password, $dbname);





    $sql = "INSERT INTO utenti (nome, cognome, email) VALUES
    ('$firstName', '$laststName', '$email')";

    $sql2 = "INSERT INTO eventi (nome_evento, descrizione_evento, date_time, ora) 
    VALUES ('$eventName', '$eventDesc', '$eventDate', '$eventTime')";

    mysqli_query($conn, $sql);

    mysqli_query($conn, $sql2);
}

//$conn->close();
