<?php
include "common.php";

$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$amt = $_POST['amt'];

$employeeid = $_POST['employeeid'];

$result = log_service($employeeid, $year, $month, $day, $amt);


?>