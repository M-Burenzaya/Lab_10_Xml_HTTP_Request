<?php

$user = 'root';
$pass = '';
$dbName = 'lab_10';
$host = 'localhost';

$conn = new mysqli($host, $user, $pass, $dbName);

if ($conn->connect_error) {
    die("Холболт амжилтгүй: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $enteredValue = $_POST["target"] ?? null;

    if ($enteredValue !== '') {
        echo "Хайсан утга: " . $enteredValue;
    } else {
        echo "Хайх утга оруулна уу.";
    }
    
} else {
    echo "Зөвхөн POST хүсэлт ашиглана уу.";
}

$conn->close();
?>
