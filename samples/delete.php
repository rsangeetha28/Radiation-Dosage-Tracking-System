<!DOCTYPE html>
<html>
<body>
<center><h></h></center><br><br>
<?php
session_start();
$user = $_SESSION['user'];

  if($_SESSION['loggedin'] != TRUE){
header("Location:index.html");
}

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

//$sql="DELETE FROM usertable where UserName='".$_POST['uname']."'";
//if (!mysqli_query($con,$sql))
  //{
  //echo('Error in connecting  ' . mysql_error());
  //}
  //else
//echo "1 record deleted";


$count=0; 
if($_POST['uname'] == FALSE )
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
		$sql="DELETE FROM usertable where UserName='$patdata[0]'";
		$count++;
		if (!mysqli_query($con,$sql))
		{
		echo('Error in connecting  ' . mysql_error());
		}
	}
}
else
{
	$sql="DELETE FROM usertable where UserName='".$_POST['uname']."'";
	$count++;
	if (!mysqli_query($con,$sql))
	{
	echo('Error in connecting  ' . mysql_error());
	}
}
echo $count;
echo " record deleted";   

$con->close();
?>
</body>
</html>
