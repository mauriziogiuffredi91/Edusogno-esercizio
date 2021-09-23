<?php
$firstName = $_POST['firstName'];
$laststName = $_POST['lastName'];
$email = $_POST['email'];
$eventName = $_POST['eventName'];
$eventDesc = $_POST['eventDesc'];
$eventDate = $_POST['eventDate'];
$eventTime = $_POST['eventTime'];

//db credentials
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'edu_test';
//Db conection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connessione Fallita: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into utenti(firstName, lastName, email)");
    $stmt->bind_param("sssssi", $firstName, $laststName, $email, $eventName, $eventDesc, $eventDate, $eventTime);
    $stmt->execute();
    echo "registrazione completata :)";
    $stmt->close();
    $conn->close();
}
