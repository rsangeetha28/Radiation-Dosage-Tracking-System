<?php

	$ini_array      = parse_ini_file('config.ini');
    $host           = $ini_array['database.params.host'];
    $username       = $ini_array['database.params.username'];
    $password       = $ini_array['database.params.password'];
    $db_name        = $ini_array['database.params.dbname'];
    $con=mysqli_connect($host,$username,$password,$db_name) or die('Could not connect to MySQL');
	
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = $_POST['user'];
$password = $_POST['password'];
//$password = md5($password);
//echo $username;
//echo $password;

$result = mysqli_query($con,"select UserName,privilege from usertable where UserName='" . $_POST['user'] . "' and Password='" . $password. "'");
$row = mysqli_fetch_array($result);
echo $row;
if($row[0] != FALSE)
{
echo "Inside loop";
if ($row['UserName'] == 'admin')
			{

			session_start();
			$username = $row['UserName'];
			$_SESSION['user'] = $username;
			$_SESSION['loggedin'] = TRUE;
			header("Location:admindata.php");
			}
else
{

 if($row[1]=='Y')
  {
			session_start();
			$username = $row['UserName'];
			$_SESSION['user'] = $username;
			$_SESSION['loggedin'] = TRUE;
			header("Location:links.html");
 }
 if($row[1]=='N')
          {
		   echo $row['UserName'];
			echo "<br>";
			echo "User page";

			session_start();
			$username = $row['UserName'];
			$_SESSION['user'] = $username;
			$_SESSION['loggedin'] = TRUE;
			header("Location:nonprivileged.html");

}			}
}


?>
<br>
<br>
<a href="index.html">go back to login page</a> <br><br>
