

<?php

session_start();
$session = $_SESSION["sess_user"];
$employeeid = $_SESSION["sess_id"];
if(!isset($session)){
    echo '<script type="text/javascript"> alert("You cannot access this page without signing in."); </script>';
		?>
		<script>
		window.location = 'signin.html';
		</script>
<?php
}else{

?>

*/

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>EZ Records</title>

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

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><h1 class="tagline" style = "position:absolute; left: 20px; top: 0px;">E-Z Records</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					
					<li class="active"><a class="btn" href="signout.php">Sign out</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Welcome, <?=$_SESSION['sess_user'];?>! </h1>
				</header>
                
                
                <!-- employee table goes here -->
                
                <div class = "row"></div>
                
                    <div class="container">
                    <h3>Tables</h3>
                    <ul class = "nav nav-tabs">
                        <li class = "active"><a data-toggle = "tab" href="#day">Day</a></li>
                        <li><a data-toggle = "tab" href = "#month">Month</a></li>
                        <li><a data-toggle = "tab" href = "#year">Year</a></li>
                    </ul>
                    
                    <div class = "tab-content">
                        <div id="day" class = "tab-pane fade in active">
                             <form class="form-inline" role="form" method="get" action="employeecode.php">
                                <div class="form-group">
                                  <label for="day">Day</label>
                                  <input type="text" class="form-control" name="day" placeholder="Enter day">
                                </div>
                                <div class="form-group">
                                  <label for="month">Month</label>
                                  <input type="text" class="form-control" name="month" placeholder="Enter month">
                                </div>
                                 <div class="form-group">
                                  <label for="year">Year</label>
                                  <input type="text" class="form-control" name="year" placeholder="Enter year">
                                </div>
                                
                                <button type="submit" class="btn btn-default">Submit</button>
                              </form>
                                
                        </div>
                         <div id="month" class = "tab-pane fade">
                            <form class="form-inline" role="form" method="get" action="employeecode.php">
                                <div class="form-group">
                                  <label for="month">Month</label>
                                  <input type="text" class="form-control" name="month" placeholder="Enter month">
                                </div>
                                 <div class="form-group">
                                  <label for="month">Year</label>
                                  <input type="text" class="form-control" name="year" placeholder="Enter year">
                                </div>
                                
                                <button type="submit" class="btn btn-default">Submit</button>
                              </form>
                        </div>
                         <div id="year" class = "tab-pane fade">
                            <form class="form-inline" role="form" method="get" action="employeecode.php">

              
                                
                                <button type="submit" class="btn btn-default">Submit</button>
                              </form>
                        </div>
                    </div>
                
  
                
                
<?php
     }
?>





