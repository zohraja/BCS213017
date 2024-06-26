<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoha";

$conn =mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($password != $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $fname;

mysqli_query($conn,"INSERT INTO signup (fname, email, password, confirmPassword) VALUES ('$name', '$gmail', '$password', '$confirmPassword')");



    echo "Registration successful!";

}
$conn->close();
?>
