
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

    <title>Prototype of radiation dosage tracking system</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
	<link href="time.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	<script language="javascript" src="calendar/calendar.js"></script>
	
  </head>

  <body>
<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('ope_name[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
<center><h4><b>OPERATIONS</b></h4></center>
<form action="main.php" method="post">
<div class="container">
<p><center>
<input type="checkbox" onClick="toggle(this)" />Select All</label><br><br>
<input type="checkbox" name= "ope_name[]" value="RIG" />RIG</label><br><br>
<input type="checkbox" name= "ope_name[]" value="TIPS" />TIPS</label><br><br>
<input type="checkbox" name= "ope_name[]" value="BIOSPY" />BIOSPY</label><br><br>
<input type="checkbox" name= "ope_name[]" value="RFA" />RFA</label><br><br>
<input type="checkbox" name= "ope_name[]" value="IVC" />IVC</label><br><br>
<br></center></p>
</div>
<center><h4><b>PHYSICIANS</b></h4></center>

<p><center>

<div class="container">
<?php

$ini_array      = parse_ini_file('config.ini');
$host           = $ini_array['database.params.host'];
$username       = $ini_array['database.params.username'];
$password       = $ini_array['database.params.password'];
$db_name        = $ini_array['database.params.dbname'];
$con=mysqli_connect($host,$username,$password,$db_name) or die('Could not connect to MySQL');

$result = mysqli_query($con,"select firstname from physiciantable");
  echo "<div class='container-fluid'>";
while($row = $result->fetch_row())
{
	echo "<input type='checkbox' name= 'phy_name[]' value='".$row[0]."'>".$row[0];
	
	echo "<br><br>";
}
echo "</div>";
?>
</div>
</center></p>


<p><center>
<?php
	  echo "<b>START DATE:</b>&nbsp;&nbsp;";
	  require_once('calendar/classes/tc_calendar.php');
	  
	  
	  
	  $date3_default = "";
      $date4_default = "";

	  $myCalendar = new tc_calendar("date3", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date3_default))
            , date('m', strtotime($date3_default))
            , date('Y', strtotime($date3_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1970, 2020);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->setAutoHide(true, 15000); //15 secs
	  $myCalendar->setDatePair('date3', 'date4', $date4_default);
	  $myCalendar->writeScript();	 
	  
	  
	  echo "&nbsp;&nbsp;";
	  echo "<b>END DATE:</b>&nbsp;&nbsp;"; 
	  
	  $myCalendar = new tc_calendar("date4", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date4_default))
           , date('m', strtotime($date4_default))
           , date('Y', strtotime($date4_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1970, 2020);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->setAutoHide(true, 15000); //15 secs
	  $myCalendar->setDatePair('date3', 'date4', $date3_default);
	  $myCalendar->writeScript();	  
	  
	  
	 
?>


<br>
<b> Please choose maximum of 10 physicians at a time </b>
<br>
<br>
<input type="submit" value="SUBMIT">
</center></p>

</form>
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




