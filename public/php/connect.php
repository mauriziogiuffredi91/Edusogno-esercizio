<?php
//db credentials
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'edu_test';

if (isset($_POST['submit'])) {
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $firstName = $_POST['firstName'];
    $laststName = $_POST['lastName'];
    $email = $_POST['email'];
    $eventName = $_POST['eventName'];
    $eventDesc = $_POST['eventDesc'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];



    $sql = "INSERT INTO utenti (nome, cognome, email) VALUES
    ('$firstName', '$laststName', '$email')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $sql2 = "INSERT INTO eventi (nome_evento, descrizione_evento, data, ora) VALUES ('$eventName', '$eventDesc', '$eventDate', '$eventTime')";
        $result = mysqli_query($conn, $sql2);
        echo 'ok done :)';
    }
    var_dump('query:' . $query);
    var_dump('sql2:' . $sql2);

    echo 'Nope lom, riprova';
}
