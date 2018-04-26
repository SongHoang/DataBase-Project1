
<?php
include "common.php";
$userName = $_POST['username'];
$pass = $_POST['pass'];
if(sign_in_employer($userName, $pass)){
    session_start();
    //$sql = "SELECT * FROM employer WHERE userName = '$userName' AND pass = '$pass'";
    $employer = get_employer_id($userName);
    $_SESSION['sess_id'] = $employer;
    $_SESSION['sess_user'] = $userName;
	header("location: manager.php");
}else if(sign_in_employee($userName, $pass)){
    session_start();
    //$sql = "SELECT * FROM employer WHERE userName = '$userName' AND pass = '$pass'";
    $employeeid = get_employee_id($userName);
    $_SESSION['sess_id'] = $employeeid;
    $_SESSION['sess_user'] = $userName;
	header("location: employee.php");
}else{
		echo '<script type="text/javascript"> alert("Incorrect Username or Password."); </script>';
		//header("location: signin.html");
		?>
		<script>
		window.location = 'signin.html';
		</script>
		<?php
}

?>
