<?php

$user = 'root';
$pass = '';
$db = 'login';

$conn = mysqli_connect('localhost', $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}


mysqli_select_db($conn, 'login');

$userName = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into users (username, email, password) values('$userName', '$email', '$password);";

if (mysqli_query($conn, $sql)) {
    include 'index.html';
} else {
    include 'Registration.html';
}

mysqli_close($conn);

?>