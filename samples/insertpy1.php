<!DOCTYPE html>
<html>
<body>
<center><h></h></center><br><br>
<?php

session_start();
$user = $_SESSION['user'];
$ini_array      = parse_ini_file('config.ini');
$host           = $ini_array['database.params.host'];
$username       = $ini_array['database.params.username'];
$password       = $ini_array['database.params.password'];
$db_name        = $ini_array['database.params.dbname'];
$con=mysqli_connect($host,$username,$password,$db_name) or die('Could not connect to MySQL');
if($_SESSION['loggedin'] != TRUE){
header("Location:index.html");
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO physiciantable(firstname,lastname,experience,physicianID)
VALUES
('".$_POST['fname']."','".$_POST['lname']."','".$_POST['exp']."',NULL)";

if (!mysqli_query($con,$sql))
  {
  echo('Error in connecting  ' . mysql_error());
  }
  else
echo "1 record added";

$con->close();
?>
</body>
</html>
