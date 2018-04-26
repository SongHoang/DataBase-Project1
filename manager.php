
<?php
include "common.php";
session_start();
$session = $_SESSION["sess_user"];
$employer = $_SESSION["sess_id"];
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

	<title>Sign in - Progressus Bootstrap template</title>

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
				<a class="navbar-brand" href="index.html"><h1 class="tagline" style = "position:absolute; left: 20px; top: 0px;">EZ Records</h1></a>
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
                
                
                
                <div class="container">
                    <h4>Select data to display:</h4>
                    <ul class = "nav nav-tabs">
                        <li class = "active"><a data-toggle = "tab" href="#day">Day</a></li>
                        <li><a data-toggle = "tab" href = "#month">Month</a></li>
                        <li><a data-toggle = "tab" href = "#year">Year</a></li>
                    </ul>
                    
                    <div class = "tab-content">
                        <div id="day" class = "tab-pane fade in active">
                             <form class="form-inline" role="form" method="get" action="managercode.php">
                                <div class="form-group">
                                  <label for="day">Day</label>
                                  <input type="text" class="form-control" name="day" placeholder="Enter day">
                                </div>
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
                         <div id="month" class = "tab-pane fade">
                            <form class="form-inline" role="form" method="get" action="managercode.php">
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
                            <form class="form-inline" role="form" method="get" action="managercode.php">


                                 <div class="form-group">
                                  
                                </div>
                                
                                <button type="submit" class="btn btn-default">Submit</button>
                              </form>
                        </div>
                    </div>
     
                
                
                <!-- /employee table goes here -->
            <div class="container">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#add">Add employee</button>
				<div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-1 collapse" id = "add">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="insert-employee.php" method="post">
								<div class="top-margin">
									<label>First Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name = "firstname">
								</div>
								<div class="top-margin">
									<label>Last Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name = "lastname">
								</div>
								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name = "address">
								</div>

                                <div class="top-margin">
                                <label for = "gender">Gender <span class="text-danger">*</span></label>
                                    <select class="form-control" id="gender" name = "gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>I don't want tell you</option>
                                    </select>
                                </div>
                                <div class="top-margin">
									<label>Username <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name = "username">
								</div>

								<div class="top-margin">
								<div class="top-margin">										
									<label>Password <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name = "password">
									</div>
									
								</div>
                                 <div>
									<input type = "text" name = "employer" value="<?php echo htmlspecialchars($employer); ?>" hidden = "true">
								</div>
                                
                                <hr>

								<div class="row">
									<div class="col-lg-8">
										
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" name = "submit">Add</button>
									</div>
								</div>
							</form>
                            
						</div>
					</div>

				</div>
            </div>

			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->


<footer id="footer" class="top-space">

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016, Hongji Wang. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>





	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>

<?php
     }
?>

