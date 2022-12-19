<?php
$sname = "localhost";

$unmae = "root";

$password = "";

$db_name = "login";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

$userName = $_POST[''];
$email = $_POST[''];
$password = $_POST[''];
?>