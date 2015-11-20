
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

    <title>Prototype of Radiation Dosage Tracking System</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>


  </head>

  <body>
<center><h1><b>AVERAGE DOSAGE FOR PHYSICIANS</b></h1></center><br><br>
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
  $name=$_POST['phy_name'];
  $phy_name=array();
  for($i=0;$i<1000;$i++)
  {
   $phy_name[$i]=null;

   }
  $i=0;
foreach($name as $selected)
 {
 $phy_name[$i++]=$selected;
 }
 $arrlength=count($phy_name);
 echo "<center>";
  //echo "<b>";
// echo "Physician Name:";
  // echo "<br>";
  //echo "</b>";
for($x=0;$x<$arrlength;$x++)
  {
     if ($phy_name[$x] != null )
	 {
  //echo $phy_name[$x];
 // echo "<br>";
      }
  }
  echo "<br>";
    $query3= "select g.operationname,g.referencedose,p.firstname from operationstable g, physiciantable p

   where p.firstname in (";
  for($x=0;$x<$arrlength-1;$x++)
      $query3 .= "'".$phy_name[$x]."',";
  $query3 .="'".$phy_name[$arrlength-1]."')

  and p.physicianid = g.physicianid ";

 $result3 = mysqli_query($con,$query3);

  echo "<center>";
         echo "<table border='3'>"; // start a table tag in the HTML

    echo "<tr><th>OPERATION NAME</th><th>REFERENCE DOSE</th><th>DOCTOR NAME</th><tr>";
  while($row3 = $result3->fetch_row())
  {
  echo "<tr><td>" . $row3['0'] . "</td><td>" .$row3['1']."</td><td>" .$row3['2']. "</td></tr>";
  //echo $row2[0].$row2[1]."<br>";
  }
  // echo "<b>";
   echo "</table>"; //Close the table in HTML

		  echo "</center>";
		 echo "<br>";





   echo "<b>";
  echo "Average of reference dosage for selected physicians is :";
   echo "</b>";
  $query = "select avg(g.referencedose) from operationstable g,physiciantable p where p.firstname in (";
  for($x=0;$x<$arrlength-1;$x++)
      $query .= "'".$phy_name[$x]."',";
  $query .="'".$phy_name[$arrlength-1]."') and g.physicianID = p.physicianID ";
 // echo $query;
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);
  echo $row[0];
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
          <a class="navbar-brand" href="#">Prototype of Radiation Dosage Tracking System</a>
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
            <li class="active"><a href="links.html">OVERVIEW <span class="sr-only">(current)</span></a></li>
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




