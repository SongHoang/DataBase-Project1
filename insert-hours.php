<?php
include "common.php";

$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$hours = $_POST['hours'];

$employeeid = $_POST['employeeid'];

$employeeid = log_hours($employeeid, $year, $month, $day, $hours);


?>