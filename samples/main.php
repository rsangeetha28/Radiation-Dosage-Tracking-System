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

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>


  </head>

  <body>

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

<?php
session_start();

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
//***********************************************************************************************************************************************
//both physician name and operation name selected from web page
//***********************************************************************************************************************************************
if(isset($_POST['ope_name']) && isset($_POST['phy_name']))
{
  echo "inside loop";
  $i=0;
  $arrlength=0;$arrlength1=0;
  $name=$_POST['ope_name'];
  $ope_name=array();
  for($x=0;$x<$arrlength;$x++)
  {
	$ope_name[$x]=null;
  }
  foreach($name as $selected)
  {
	$ope_name[$i++]=$selected;
  }
  $arrlength=count($ope_name);
   
  
  $name=$_POST['phy_name']; 
  $phy_name=array();
  
  for($y=0;$y<$arrlength1;$y++)
  {
	$phy_name[$y]=null;
  }
  $i=0;
  foreach($name as $selected)
  {
	$phy_name[$i++]=$selected;
  }
  $arrlength1=count($phy_name);
  
  echo "phy length";
  echo $arrlength1;
  
  
  $i=0;
  
  for($i=0;$i<$arrlength;$i++)
  {
	  //echo "inside loop";
  $query = "select firstname,operationname,referencedose,DAP,florencetime from operationstable g,physiciantable p where operationname  in
  ('".$ope_name[$i]."') and  p.firstname in (";
  for($x=0;$x<$arrlength1-1;$x++)
      $query .= "'".$phy_name[$x]."',";
  $query .="'".$phy_name[$arrlength1-1]."')
 and g.physicianID=p.physicianID and g.operationdate between '".$_POST['date3']."'  and '".$_POST['date4']."'";
 
  $result = mysqli_query($con,$query);
  
  echo "<center>";
  echo "<table border='1'>"; // start a table tag in the HTML
  echo "<tr><th>Doctor Name</th><th>Operation Name</th><th>Reference Dose</th><th>DAP</th><th>Fluoroscopy Time</th></tr>";
  
  while($row = mysqli_fetch_array($result))
  {   //Creates a loop to loop through results
     // output data of each row
	echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['operationname'] . "</td><td>" . $row['referencedose'] . "</td><td>" . $row['DAP'] ."</td><td>" .$row['florencetime']
	."</td></tr>";
  }
  echo "<br>";
 }
echo "</table>";


$_SESSION["php_count"]=$arrlength1;

 $php_jan_doc=array();
 $php_feb_doc=array();
 $php_mar_doc=array();
 $php_apr_doc=array();
 $php_may_doc=array();
 $php_jun_doc=array();
 $php_jul_doc=array();
 $php_aug_doc=array();
 $php_sep_doc=array();
 $php_oct_doc=array();
 $php_nov_doc=array();
 $php_dec_doc=array();
 
 for($a=0;$a<10;$a++)
 {
  $_SESSION["php_jan_doc[$a]"]=0;
  $_SESSION["php_feb_doc[$a]"]=0;
  $_SESSION["php_mar_doc[$a]"]=0;
  $_SESSION["php_apr_doc[$a]"]=0;
  $_SESSION["php_may_doc[$a]"]=0;
  $_SESSION["php_jun_doc[$a]"]=0;
  $_SESSION["php_jul_doc[$a]"]=0;
  $_SESSION["php_aug_doc[$a]"]=0;
  $_SESSION["php_sep_doc[$a]"]=0;
  $_SESSION["php_oct_doc[$a]"]=0;
  $_SESSION["php_nov_doc[$a]"]=0;
  $_SESSION["php_dec_doc[$a]"]=0;
 }

 $phy_name_all=array();
 
for($a=0;$a<10;$a++)
{
	$_SESSION["phy_name_all"][$a]=" ";
}
//************************************************************************************************************************
for($i=0;$i<$arrlength1;$i++)
{

 $sum1=0;$sum2=0;$sum3=0;$sum4=0;$sum5=0;$sum6=0;$sum7=0;$sum8=0;$sum9=0;$sum10=0;$sum11=0;$sum12=0;
 $cnt1=0;$cnt2=0;$cnt3=0;$cnt4=0;$cnt5=0;$cnt6=0;$cnt7=0;$cnt8=0;$cnt9=0;$cnt10=0;$cnt11=0;$cnt12=0;
 $avg1=0;$avg2=0;$avg3=0;$avg4=0;$avg5=0;$avg6=0;$avg7=0;$avg8=0;$avg9=0;$avg10=0;$avg11=0;$avg12=0;
 
 
 $_SESSION["phy_name_all"][$i]=$phy_name[$i];
 
  

 for($j=0;$j<$arrlength;$j++)
 {
 $query = "select g.operationdate,referencedose,p.firstname,p.lastname from operationstable g,physiciantable p where
 operationname in ('".$ope_name[$j]."') and
 p.firstname in ('".$phy_name[$i]."') and
 g.physicianID=p.physicianID and
 g.operationdate between '".$_POST['date3']."'  and '".$_POST['date4']."'";
 
 $result = mysqli_query($con,$query);
 
while($row = mysqli_fetch_array($result)) 
{

   $slash="-";
   $time =strtotime($row['operationdate']);
   $day   = date('d',$time);
   $month = date('m',$time);
   $year_temp  = date('Y',$time);
   $year=$year_temp;
   if($year % 4 == 0)
     $feb_day="29";
   else
     $feb_day="28";


   $jan_start=$year.$slash."01".$slash."01";
   $jan_end=$year.$slash."01".$slash."31";
   
   $feb_start=$year.$slash."02".$slash."01";
   $feb_end=$year.$slash."02".$slash.$feb_day;   
   
   $mar_start=$year.$slash."03".$slash."01";
   $mar_end=$year.$slash."03".$slash."31";
   
   $apr_start=$year.$slash."04".$slash."01";
   $apr_end=$year.$slash."04".$slash."30";
   
   $may_start=$year.$slash."05".$slash."01";
   $may_end=$year.$slash."05".$slash."31";
   
   $jun_start=$year.$slash."06".$slash."01";
   $jun_end=$year.$slash."06".$slash."30";
   
   $jul_start=$year.$slash."07".$slash."01";
   $jul_end=$year.$slash."07".$slash."31";
   
   $aug_start=$year.$slash."08".$slash."01";
   $aug_end=$year.$slash."08".$slash."31";
   
   $sep_start=$year.$slash."09".$slash."01";
   $sep_end=$year.$slash."09".$slash."30";
   
   $oct_start=$year.$slash."10".$slash."01";
   $oct_end=$year.$slash."10".$slash."31";
   
   $nov_start=$year.$slash."11".$slash."01";
   $nov_end=$year.$slash."11".$slash."30";
   
   $dec_start=$year.$slash."12".$slash."01";
   $dec_end=$year.$slash."12".$slash."31";
     
  if (($row['operationdate'] >= $jan_start) && ($row['operationdate'] <= $jan_end))
  {
    $sum1=$sum1+$row['referencedose'];
    $cnt1++;
    $avg1=$sum1/$cnt1;
	$_SESSION["php_jan_doc[$i]"]=$avg1;
  }
  elseif (($row['operationdate'] >= $feb_start) && ($row['operationdate'] <= $feb_end))
  {
    $sum2=$sum2+$row['referencedose'];
    $cnt2++;
    $avg2=$sum2/$cnt2;
	$_SESSION["php_feb_doc[$i]"]=$avg2;
  }
  elseif (($row['operationdate'] >= $mar_start) && ($row['operationdate'] <= $mar_end))
  {
    $sum3=$sum3+$row['referencedose'];
    $cnt3++;
    $avg3=$sum3/$cnt3;
	$_SESSION["php_mar_doc[$i]"]=$avg3;
  }
  elseif (($row['operationdate'] >= $apr_start) && ($row['operationdate'] <= $apr_end))
  {
   $sum4=$sum4+$row['referencedose'];
   $cnt4++;
   $avg4=$sum4/$cnt4;
   $_SESSION["php_apr_doc[$i]"]=$avg4;
  }
  elseif (($row['operationdate'] >= $may_start) && ($row['operationdate'] <= $may_end))
  {
   $sum5=$sum5+$row['referencedose'];
   $cnt5++;
   $avg5=$sum5/$cnt5;
   $_SESSION["php_may_doc[$i]"]=$avg5;
  }
  elseif (($row['operationdate'] >= $jun_start) && ($row['operationdate'] <= $jun_end))
  {
   $sum6=$sum6+$row['referencedose'];
   $cnt6++;
   $avg6=$sum6/$cnt6;
   $_SESSION["php_jun_doc[$i]"]=$avg6;
  }
  elseif (($row['operationdate'] >= $jul_start) && ($row['operationdate'] <= $jul_end))
  {
   $sum7=$sum7+$row['referencedose'];
   $cnt7++;
   $avg7=$sum7/$cnt7;
   $_SESSION["php_jul_doc[$i]"]=$avg7;
  }
  elseif (($row['operationdate'] >= $aug_start) && ($row['operationdate'] <= $aug_end))
  {
   $sum8=$sum8+$row['referencedose'];
   $cnt8++;
   $avg8=$sum8/$cnt8;
   $_SESSION["php_aug_doc[$i]"]=$avg8;   
  }
  elseif (($row['operationdate'] >= $sep_start) && ($row['operationdate'] <= $sep_end))
  {
   $sum9=$sum9+$row['referencedose'];
   $cnt9++;
   $avg9=$sum9/$cnt9;
   $_SESSION["php_sep_doc[$i]"]=$avg9;
  }
  elseif (($row['operationdate'] >= $oct_start) && ($row['operationdate'] <= $oct_end))
  {
   $sum10=$sum10+$row['referencedose'];
   $cnt10++;
   $avg10=$sum10/$cnt10;
   $_SESSION["php_oct_doc[$i]"]=$avg10;
  }
  elseif (($row['operationdate'] >= $nov_start) && ($row['operationdate'] <= $nov_end))
  {
   $sum11=$sum11+$row['referencedose'];
   $cnt11++;
   $avg11=$sum11/$cnt11;
   $_SESSION["php_nov_doc[$i]"]=$avg11;
  }
  elseif (($row['operationdate'] >= $dec_start) && ($row['operationdate'] <= $dec_end))
  {
   $sum12=$sum12+$row['referencedose'];
   $cnt12++;
   $avg12=$sum12/$cnt12;
   $_SESSION["php_dec_doc[$i]"]=$avg12;
  }
 }
}
}
}
//***********************************************************************************************************************************************
//only if operation name is selected and physician name is not selected from web page
//***********************************************************************************************************************************************
else if(isset($_POST['ope_name']) && !isset($_POST['phy_name']))
{
   $name=$_POST['ope_name'];
   $ope_name=array();
   $arrlength=count($ope_name);
   for($x=0;$x<$arrlength;$x++)
   {
	   $ope_name[$x]=null;
   }
   
   $i=0;
foreach($name as $selected)
 {
 $ope_name[$i]=$selected;
 
 echo "<br>";
    $query = "select operationname,operationdate,referencedose,DAP,florencetime from operationstable where operationname
  in ('".$ope_name[$i]."') and
  operationdate between '".$_POST['date3']."'  and '".$_POST['date4']."'";
  $result = mysqli_query($con,$query);
      echo "<center>";

   echo "<table border='1'>"; // start a table tag in the HTML
echo "<tr><th> Operation Name</th><th>Operation Date</th><th>Reference Dose</th><th>DAP</th><th>Fluoroscopy Time</th></tr>";
   while($row = mysqli_fetch_array($result))
{   //Creates a loop to loop through results
     // output data of each row
echo "<tr><td>" . $row['operationname'] . "</td><td>" . $row['operationdate'] . "</td><td>" . $row['referencedose'] . "</td><td>"
	. $row['DAP'] ."</td><td>" .$row['florencetime']
."</td></tr>";
}
$i++;
 }
 echo "<br>";
echo "</table>";
}
//***********************************************************************************************************************************************
//only if physician name is selected and operation name is not selected from web page
//***********************************************************************************************************************************************
else if(!isset($_POST['ope_name']) && isset($_POST['phy_name']))
{
   $name=$_POST['phy_name'];
   $phy_name=array();
   $arrlength=count($phy_name);
   
   for($x=0;$x<$arrlength;$x++)
   {
	   $phy_name[$x]=null;
   }
   
$i=0;
foreach($name as $selected)
 {
 $phy_name[$i]=$selected;
 
  //removed ID check in query g.physicianID=p.physicianID. May be have to add later 
  $query = "select firstname,lastname,experience from operationstable g,physiciantable p where p.firstname in
  ('".$phy_name[$i]."')and
  g.operationdate between '".$_POST['date3']."'  and '".$_POST['date4']."'";


  $result = mysqli_query($con,$query);
   echo "<center>";

   echo "<table border='1'>"; // start a table tag in the HTML

   echo "<tr><th>First Name</th><th>Last Name</th><th>Experience</th></tr>";

   if($row = mysqli_fetch_array($result))
	{ 
		echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['experience'] . "</td></tr>";
	}
	
	echo "</table>";
	$i++;
	echo "<br>";
 }
 
}
echo "</center>";
$con->close();
?>

<form action="line_new.php" method="post">
   <p><center>
<input type="submit" value="Graphical Representation"/></center></p>
</form>

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



