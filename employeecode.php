
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<?php
error_reporting( error_reporting() & ~E_NOTICE ); // Suppress undefined variable warnings from popping up
	include "common.php";
	include "employeetop.php";
	$employeeId = $employeeid; // id in number
	$month = $_GET["month"];
	$day = $_GET["day"];
	$year = $_GET["year"];


	// Display main page of Manager view, which defaults to viewing the month
	if (!isset($month) && !isset($day) && !isset($year)) {
		$finalRow = viewYear_employee($employeeId);
		show_table($employerId, $finalRow, "year");
	}
	else if (!isset($day) && isset($year) && isset($month)) {
		$finalRow = viewMonth_employee($employeeId, $year, $month);
		show_table($employerId, $finalRow, "day");
	}
	else if (isset($month) && isset($day) && isset($year)){

		$finalRow = viewDay_employee($employeeId, $year, $month, $day);
		show_table($employerId, $finalRow, "day");
	}
		
	else{
	?>
	<p>Employee not found.</p>
	<?php

	}
	



function show_table($id, $rows, $dateType) { 
	
	if ($rows AND mysql_num_rows($rows) > 0) {

	?>
	<div class = "container">
	
	<table class = "table table-striped">
		
		<tr>
			<th><?= ucfirst($dateType);?></th>
			<th>Amount</th>
		</tr>

		<?php
		$i = 1;
		while ($row = mysql_fetch_array($rows, MYSQL_ASSOC)) {
		?>

		<tr>
			<td><?= $row[$dateType] ?></td>
			<td><?= $row["amt"] ?></td>
		</tr>

		<?php 
			$i++;
		} ?>

	</table>
	<?php
	}

	  
	else {
    ?>
    <h1> 0 Results Found</h1>
    <br>
    <?php
  
	}


}


include "employeebottom.php";

?>

