     
				<div class="row col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-1">
					   <div class="panel panel-default">
						<div class="panel-body">
                             <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addservice">Add new service</button>

							<form class = "collapse" id = 'addservice' action="insert-service.php" method="post">
								<div class="top-margin">
									<label>Year<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name = "year">
								</div>
								<div class="top-margin">
									<label>Month<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name= "month">
								</div>
								<div class="top-margin">
									<label>Day <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="day">
								</div>


								<div class="top-margin">
								    
										<label>Amount<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name = "amt">
									
									
								</div>
    

								<div class="row">
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" name = "submit">Add</button>
									</div>
								</div>
                                <div>
									<input type = "text" name = "employeeid" value="<?php echo htmlspecialchars($employeeid); ?>" hidden = "true">
								</div>
							</form>
                            </div>
						</div>
                    <div class="panel panel-default">
						<div class="panel-body">
                             <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addhour">Add new hours</button>

							<form class = "collapse" id = 'addhour' action="insert-hours.php" method="post">
								<div class="top-margin">
									<label>Year<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name = "year">
								</div>
								<div class="top-margin">
									<label>Month<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name= "month">
								</div>
								<div class="top-margin">
									<label>Day <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="day">
								</div>


								<div class="top-margin">
								    <div class="col-sm-6">
										<label>Hours <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name = "hours">
									</div>
									
								</div>
    

								<div class="row">
									<div class="col-lg-8">
										
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" name = "submit">Add</button>
									</div>
								</div>
                                <div>
									<input type = "text" name = "employeeid" value="<?php echo htmlspecialchars($employeeid); ?>" hidden = "true">
								</div>
							</form>
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
     
?>

