<?php
require('config.php');
$fname = $lname = $mail = $msg = $usrtel = "";

var_dump($_POST["fname"]);
var_dump($lname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST['lname']);
    $mail = test_input($_POST["mail"]);
    $msg = test_input($_POST["msg"]);
    $usrtel = test_input($_POST["usrtel"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$result = mysqli_query($dbC,"INSERT INTO clientinfo (id, firstname, lastname, email, phone, message)

VALUES (NULL, '$fname', '$lname', '$mail', '$usrtel', '$msg');");

if (!$result) {
    die('Invalid query: ' . mysqli_error($dbC));
}

else {
    echo "Data Received";
    header("Location: submit.html");
}


mysql_close($dbC);
?>