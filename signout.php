<?php
session_start();
unset($_SESSION['sess_user']);
session_destroy();
echo '<script type="text/javascript"> alert("Logout successfully."); </script>';
		//header("location: signin.html");
		?>
		<script>
		window.location = 'signin.html';
		</script>
?>