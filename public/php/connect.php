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



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//data inside db
$sql = "INSERT INTO utenti (nome, cognome, email)
VALUES ('$firstName', '$laststName', '$email')";
$sql1 = "INSERT INTO eventi (nome_evento, descrizione_evento, date_time, ora)
VALUES ('$eventName', '$eventDesc', '$eventDate', '$eventTime')";



$conn->close();
