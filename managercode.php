
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
	include "managertop.php";
	//$first = $_GET["firstname"];
	//$last = $_GET["lastname"];

	$employerId = $employer; // id number, not name
	//$employerName = get_employer_name(employerId);
	$month = $_GET["month"];
	$day = $_GET["day"];
	$year = $_GET["year"];
	
	// Display main page of Manager view, which defaults to viewing the month
	if (!isset($month) && !isset($day)) {
		$finalRow = viewYear_employer($employerId, $year);
		show_table($employerId, $finalRow, "year");
	}
	else if (!isset($day) && isset($year) && isset($month)) {
		$finalRow = viewMonth_employer($employerId, $year, $month);
		show_table($employerId, $finalRow, "day");
	}
	else if (isset($month) && isset($day) && isset($year)){

		$finalRow = viewDay_employer($employerId, $year, $month, $day);
		show_table($employerId, $finalRow, "first");
	}
	

	//$monthTab = viewMonth_employer($employerId, $year, 1);
	//$dayTab = viewDay_employer($employerId, $year, $month, $day);
	/*
	if(mysql_num_rows($monthTab) > 0){

		show_table($employerId, $yearTab, "year");

	}
	*/
	//show_table($employerId, $month, "month");
	//show_table($employerId, $year, "year");
	//show_table($employerId, $day, "day");
	
	else{
	?>
	<p><?= $employerId ?> Employer not found.</p>
	<?php

	}
	
function get_table_year($year){

	$yearTab = viewYear_employer($employerId, $year);
	show_table($employerId, $yearTab, "year");
}


function show_table($id, $rows, $dateType) { 
	
	if (mysql_num_rows($rows)) {

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
			<td><?= $row[$dateType]?></td>
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



include "managerbottom.php";
?>

