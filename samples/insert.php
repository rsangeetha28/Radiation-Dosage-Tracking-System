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

$count=0; 
if($_POST['fname'] == FALSE AND $_POST['lname'] == FALSE AND $_POST['uname'] == FALSE AND $_POST['psw'] == FALSE 
	AND $_POST['email'] == FALSE AND $_POST['pri'] == FALSE)
{
		if(isset($_POST['submit'])){
		$name       = $_FILES['file']['name'];  
		$temp_name  = $_FILES['file']['tmp_name'];  
		if(isset($name)){
			if(!empty($name)){      
				$location = '../samples/';      
				if(move_uploaded_file($temp_name,$location.$name)){
					//echo 'uploaded';
				}
			}       
		}  
		else {
			echo 'please upload';
		}
	}

	$file_name=$name;
	$file=fopen("$file_name","r");
	
	while(($patdata=fgetcsv($file,1024))!== FALSE)
	{
		$sql="INSERT INTO usertable(FirstName,LastName,UserName,Password,Email,ID,privilege)
		VALUES('$patdata[0]','$patdata[1]','$patdata[2]','$patdata[3]','$patdata[4]','NULL','$patdata[5]')";
		$count++;
		if (!mysqli_query($con,$sql))
		{
		echo('Error in connecting  ' . mysql_error());
		}
	}
}
else
{
	$sql="INSERT INTO usertable(FirstName,LastName,UserName,Password,Email,ID,privilege)
	VALUES
	('".$_POST['fname']."','".$_POST['lname']."','".$_POST['uname']."','".$_POST['psw']."','".$_POST['email']."',NULL,'".$_POST['pri']."')";
	$count++;
	if (!mysqli_query($con,$sql))
	{
	echo('Error in connecting  ' . mysql_error());
	}
}
echo $count;
echo " record added";   

$con->close();
?>
</body>
</html>
