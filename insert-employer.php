<?php
include "common.php";

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$email = $_POST['address'];
$userName = $_POST['username'];
$pass = $_POST['password'];
$gender = $_POST['gender'];

$result = insert_employer($userName, $pass, $first, $last, $email, $gender);
?>
