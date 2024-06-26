<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoha";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $order_details = $_POST["order_details"];

    $stmt = $conn->prepare("INSERT INTO contact (name, email, order_details) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $order_details);

    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
