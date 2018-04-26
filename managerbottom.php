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
     
?>