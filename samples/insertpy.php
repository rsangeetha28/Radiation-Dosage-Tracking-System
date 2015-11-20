<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Radiation Dosage Tracking System</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>


  </head>
  <style>
		p1 {
		    display: block;
 		    margin-left: 13cm;
   		}
		p2 {
		    display: block;
 		    margin-left: 7.1cm;
			margin-right: 2 cm;
			font-size:16px;
   		}
   </style>

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
if($_POST['fname'] == FALSE AND $_POST['lname'] == FALSE AND $_POST['exp'] == FALSE )
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
		$sql="INSERT INTO physiciantable(firstname,lastname,experience,physicianID)
		VALUES
		('$patdata[0]','$patdata[1]','$patdata[2]',NULL)";
		$count++;
		if (!mysqli_query($con,$sql))
		{
		echo('Error in connecting  ' . mysql_error());
		}
	}
}
else
{
	$sql="INSERT INTO physiciantable(firstname,lastname,experience,physicianID)
	VALUES
	('".$_POST['fname']."','".$_POST['lname']."','".$_POST['exp']."',NULL)";
	$count++;
	if (!mysqli_query($con,$sql))
	{
	echo('Error in connecting  ' . mysql_error());
	}
}

echo "<center>";
echo $count;
echo " record successfully added";   
echo "</center>";


$con->close();
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Radiation Dosage Tracking System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		  			<li><a href="logout.php">LOG OUT</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">OVERVIEW <span class="sr-only">RADIATION DOSAGE TRACKING SYSTEM</span></a></li>
            <li><a href="physicians.php">PHYSICIANS INFORMATION</a></li>
            <li><a href="patients.php">PATIENTS INFORMATION</a></li>
            <li><a href="pno.php">PHYSICIAN AND OPERATIONS INFORMATION</a></li>
            <li><a href="ope.php">OPERATIONS INFORMATION</a></li>
            <li><a href="avgop.html">AVERAGE DOSAGE FOR OPERATIONS</a></li>
            <li><a href="avgph.php">AVERAGE DOSAGE FOR PHYSICIANS</a></li>
            <li><a href="time.php">PHYSICIANS AND OPERATIONS STATISTICAL INFORMATION</a></li>
			<li><a href="patientinsert.php">INSERTION OF PATIENTS INFORMATION</a></li>
            <li><a href="physicianinsert.php">INSERTION OF PHYSICIANS INFORMATION</a></li>
            <li><a href="generalinsert.php">INSERTION OF OPERATIONS INFORMATION</a></li> 

          </ul> 

        </div>







    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	 
</body>
</html>
