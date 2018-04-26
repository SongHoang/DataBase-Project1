<?php
define('DB_Name', 'termproject');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
/*
This function takes in userName, pass, first, last, email, and gender for employer and adds it
to the Employer table.
*/
function insert_employer($userName, $pass, $first, $last, $email, $gender){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $encrypted = md5($pass);
  $sql = "INSERT INTO Employer(userName, pass, first, last, email, gender) VALUES ('$userName', '$encrypted', '$first', '$last', '$email', '$gender')";
  if(!mysql_query($sql))
  {
    echo '<script type="text/javascript">alert("Failed to create a account");</script>';
    die('' . mysql_error());
  }
   echo '<script type="text/javascript">alert("Account has successfully been created");</script>';
    ?>
  <script>
      window.location = 'signin.html';
  </script>;
<?php
  mysql_close();
}
/*
This function takes in userName, pass, first, last, email, gender, and the employer id for each employee and adds it
to the Employee table.
*/
function insert_employee($userName, $pass, $first, $last, $email, $gender, $employer){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $encrypted = md5($pass);
  $sql = "INSERT INTO Employee(userName, pass, first, last, email, gender, employer) VALUES ('$userName', '$encrypted', '$first', '$last', '$email', '$gender', '$employer')";
  if(!mysql_query($sql))
  {
    die('' . mysql_error());
  }
    
  echo '<script type="text/javascript">alert("Employee has been added successfully");</script>';
    ?>
  <script>
      window.location = 'manager.php';
  </script>;
<?php
  mysql_close();
}
/*
This function takes in the userName and pass for the employer and return true or false if it is correct.
*/
function sign_in_employer($userName, $pass){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $encrypted = md5($pass);
  $sql = "SELECT id FROM Employer WHERE userName = '$userName' AND pass = '$encrypted'";
  $rows = mysql_query($sql);
  if(mysql_num_rows($rows) == 1){
    return true;
  }else{
    return false;
  }
  mysql_close();
}
/*
This function takes in the userName and pass for the employee and return true or false if it is correct.
*/
function sign_in_employee($userName, $pass){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $encrypted = md5($pass);
  $sql = "SELECT id FROM Employee WHERE userName = '$userName' AND pass = '$encrypted'";
  $rows = mysql_query($sql);
  if(mysql_num_rows($rows) == 1){
    return true;
  }else{
    return false;
  }
  mysql_close();
}
/*
This function takes in the employee id, the year, month, and day.
It will return a set of rows containing the month, day, year, and amt that specific employee makes.
*/
function viewDay_employee($id, $year, $month, $day){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT month, day, year, amt FROM Service WHERE id = '$id' AND year = '$year' AND month = '$month' AND day = '$day' ORDER BY Sid DESC";
  
  $rows = mysql_query($sql);
  return $rows;
  mysql_close();
}
/*
This function takes in the employer id, the year, month, and day.
It will return a set of rows containing the first and last name and the sum of each employees and how much they made during the day.
*/
function viewDay_employer($id, $year, $month, $day){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT first, last, day ,SUM(amt) AS amt FROM Employee, Service WHERE Employee.employer = '$id' AND Service.id = Employee.id AND Service.year = '$year' AND Service.month = '$month' AND Service.day = '$day' GROUP BY first, last";
  
  $rows = mysql_query($sql);
  return $rows;
  mysql_close();
}
/*
This function takes in the employee id, the year and month.
It will return a set of rows containing the month, year and sum of amt in that month of how much the specific employee made.
*/
function viewMonth_employee($id, $year, $month){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT day, SUM(amt) AS amt FROM Service WHERE id = '$id' AND year = '$year' AND month = '$month' GROUP BY day";
  
  $rows = mysql_query($sql);
  return $rows;
  mysql_close();
}
/*
This function takes in the employer id, the year, and month.
It will return a set of rows containing the month and sum of amt in that month of how much all his employees made together.
*/
function viewMonth_employer($id, $year, $month){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT day, SUM(amt) AS amt FROM Employee, Service WHERE Employee.employer = '$id' AND Service.id = Employee.id AND year = '$year' AND month = '$month' GROUP BY day";
  
  $rows = mysql_query($sql);
  return $rows;
  mysql_close();
}
/*
This function takes in the employee id.
It will return a set of rows containing the years and sum of amt for each year he/she makes.
*/
function viewYear_employee($id){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT year, SUM(amt) AS amt FROM Service WHERE id = '$id' GROUP BY year";
  
  $rows = mysql_query($sql);
  return $rows;
  mysql_close();
}
/*
This function takes in the employer id.
It will return a set of rows containing the years and sum of amt that his employees made during each year.
*/
function viewYear_employer($id){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT year, SUM(amt) AS amt FROM Employee, Service WHERE Employee.employer = '$id' AND Service.id = Employee.id GROUP BY year";
  
  $rows = mysql_query($sql);
  return $rows;
  mysql_close();
}
/*
This function takes in the id, year, month, day and the hrs.
It logs the hrs each employee works.
It inserts into the Hours table.
*/
function log_hours($id, $year, $month, $day, $hrs){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "INSERT INTO hours(id, year, month, day, hrs) VALUES('$id', '$year', '$month', '$day', '$hrs')";
  if(!mysql_query($sql))
  {
    echo '<script type="text/javascript">alert("Failed to create a hour");</script>';
    die('' . mysql_error());
  }
  echo '<script type="text/javascript">alert("Hours has successfully been added");</script>';
    ?>
  <script>
      window.location = 'employee.php';
  </script>;
<?php
  mysql_close();
}
/*
This function takes in the id, year, month, day, and amt.
It logs how much each employee makes.
It inserts into the Service table.
*/
function log_service($id, $year, $month, $day, $amt){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "INSERT INTO Service(id, year, month, day, amt) VALUES('$id', '$year', '$month', '$day', '$amt')";
    
    if(!mysql_query($sql))
  {
    echo '<script type="text/javascript">alert("Failed to create a service!");</script>';
    die('' . mysql_error());
  }
     echo '<script type="text/javascript">alert("Service has successfully been added");</script>';
    ?>
  <script>
      window.location = 'employee.php';
  </script>;
<?php
  mysql_close();
}
function get_employer_id($userName){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT id FROM Employer WHERE userName = '$userName'";
  $rows = mysql_query($sql);
  $row = mysql_fetch_row($rows);
  return $row[0];
  mysql_close();
}
function get_employee_id($userName){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT id FROM Employee WHERE userName = '$userName'";
  $rows = mysql_query($sql);
  $row = mysql_fetch_row($rows);
  return $row[0];
  mysql_close();
}
function getAllEmployers(){
  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if(!$link)
  {
    die('Could not connect' . mysql_error());
  }
  $db_selected = mysql_select_db(DB_Name, $link);
  if(!$db_selected)
  {
    die('Cannot use this database' . mysql_error());
  }
  $sql = "SELECT * FROM Employer ";
  $rows = mysql_query( $sql);
  return $rows;
  mysql_close();
}
?>
