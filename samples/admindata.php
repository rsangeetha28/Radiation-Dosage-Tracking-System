
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
<center><h1>ADMIN PAGE</h1></center><br><br>
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
$query= "SELECT * FROM usertable"; //You don't need a ; like you do in SQL
$result = mysqli_query($con,$query);
echo "<center>";
echo "<table border='1'>"; // start a table tag in the HTML
//<button onClick="window.print()">Print this page</button>
echo "<tr><th>FIRSTNAME</th><th>LASTNAME</th><th>USERNAME</th><th>PASSWORD</th><th>EMAIL</th><tr>";
while($row = mysqli_fetch_array($result))
{   //Creates a loop to loop through results
     // output data of each row
echo "<tr><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] ."</td><td>" .$row['UserName']
."</td><td>" .$row['Password']."</td><td>" .$row['Email']. "</td></tr>";

/*echo "<tr><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] ."</td><td>" .$row['UserName']
."</td><td>" .$row['Password']."</td><td>" .$row['Email']."</td><td>"
.'<form name="update" action="admin_edit.php" method="post"> <input type="submit" value="To Edit"> </form>' . "</td></tr>";*/

}
echo "</table>"; //Close the table in HTML
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
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><span class="sr-only">(current)</span></a></li>

           <li><a href="admin_insert.php">INSERT</a></li>

            <li><a href="admin_edit.php">EDIT</a></li>
			<li><a href="admin_delete.php">DELETE</a></li>



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




