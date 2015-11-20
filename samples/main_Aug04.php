


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
	            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
	            <li><a href="physicians.php">PHYSICIANS INFO</a></li>
	            <li><a href="patients.php">PATIENTS INFO</a></li>
	            <li><a href="pno.php">PHYSICIAN AND OPERATIONS INFO</a></li>
	            <li><a href="ope.php">OPERATIONS INFO</a></li>
	            <li><a href="avgop.html">OPERATIONS PAGE</a></li>
	            <li><a href="avgph.php">PHYSICIANS PAGE</a></li>
	            <li><a href="time.php">PHYSICIANS AND OPERATIONS PAGE</a></li>
                    <li><a href="patientinsert.php">PATIENT INFO INSERTION PAGE</a></li>
                    <li><a href="physicianinsert.php">PHYSICIANS INFO INSERTION PAGE</a></li>
                    <li><a href="generalinsert.php">OPERATIONS TABLE INSERTION PAGE</a></li>

	          </ul>

	        </div>

<?php
session_start();
//$user = $_SESSION['user'];
//$con=mysqli_connect("localhost","root","","zhangdb");
$con=mysqli_connect("localhost","sra258","Ggsb91djqJs=","sra258");
//if($_SESSION['loggedin'] != TRUE){
//header("Location:http://localhost:12/sanny/Chart/samples/zang_login_page.html");
//}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['ope_name']) && isset($_POST['phy_name']))
{
  $name=$_POST['ope_name'];
  $ope_name=array();
  $ope_name[0]=null;
  $ope_name[1]=null;
  $ope_name[2]=null;
  $ope_name[3]=null;
  $ope_name[4]=null;
  $i=0;
 foreach($name as $selected)
 {
 $ope_name[$i++]=$selected;
 }
 $arrlength=count($ope_name);

  echo "<br>";
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
$query = "select firstname,operationname,referencedose,DAP,florencetime from operationstable g,physiciantable p where operationname  in
  ('".$ope_name[0]."','".$ope_name[1]."','".$ope_name[2]."','".$ope_name[3]."','".$ope_name[4]."') and  p.firstname in (";
  for($x=0;$x<$arrlength-1;$x++)
      $query .= "'".$phy_name[$x]."',";
  $query .="'".$phy_name[$arrlength-1]."')
 and g.physicianID=p.physicianID and g.operationdate between '".$_POST['start_date']."'  and '".$_POST['end_date']."'";
  $result = mysqli_query($con,$query);
    echo "<center>";
  echo "<table border='1'>"; // start a table tag in the HTML
	echo "<tr><th>Doctor Name</th><th>Operation Name</th><th>Reference Dose</th><th>DAP</th><th>Florence Time</th></tr>";
   while($row = mysqli_fetch_array($result))
{   //Creates a loop to loop through results
     // output data of each row

  echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['operationname'] . "</td><td>" . $row['referencedose'] . "</td><td>" . $row['DAP'] ."</td><td>" .$row['florencetime']
."</td></tr>";
}
echo "</table>";
$name=$_POST['phy_name'];
$phy_name=array();
$phy_name[0]=0;
$phy_name[1]=0;
$phy_name[2]=0;
$phy_name[3]=0;
$phy_name[4]=0;
$phy_name[5]=0;
$phy_name[6]=0;
$phy_name[7]=0;
$phy_name[8]=0;
$phy_name[9]=0;
$j=0;
$php_cnt=0;
foreach($name as $selected)
{
 $phy_name[$j]=$selected;
 $j++;
}
$_SESSION["php_count"]=$j;
$_SESSION["php_doc1_jan"]=0;
$_SESSION["php_doc1_feb"]=0;
$_SESSION["php_doc1_mar"]=0;
$_SESSION["php_doc1_apr"]=0;
$_SESSION["php_doc1_may"]=0;
$_SESSION["php_doc1_jun"]=0;
$_SESSION["php_doc1_jul"]=0;
$_SESSION["php_doc1_aug"]=0;
$_SESSION["php_doc1_sep"]=0;
$_SESSION["php_doc1_oct"]=0;
$_SESSION["php_doc1_nov"]=0;
$_SESSION["php_doc1_dec"]=0;
$_SESSION["php_doc2_jan"]=0;
$_SESSION["php_doc2_feb"]=0;
$_SESSION["php_doc2_mar"]=0;
$_SESSION["php_doc2_apr"]=0;
$_SESSION["php_doc2_may"]=0;
$_SESSION["php_doc2_jun"]=0;
$_SESSION["php_doc2_jul"]=0;
$_SESSION["php_doc2_aug"]=0;
$_SESSION["php_doc2_sep"]=0;
$_SESSION["php_doc2_oct"]=0;
$_SESSION["php_doc2_nov"]=0;
$_SESSION["php_doc2_dec"]=0;
$_SESSION["php_doc3_jan"]=0;
$_SESSION["php_doc3_feb"]=0;
$_SESSION["php_doc3_mar"]=0;
$_SESSION["php_doc3_apr"]=0;
$_SESSION["php_doc3_may"]=0;
$_SESSION["php_doc3_jun"]=0;
$_SESSION["php_doc3_jul"]=0;
$_SESSION["php_doc3_aug"]=0;
$_SESSION["php_doc3_sep"]=0;
$_SESSION["php_doc3_oct"]=0;
$_SESSION["php_doc3_nov"]=0;
$_SESSION["php_doc3_dec"]=0;
$_SESSION["php_doc4_jan"]=0;
$_SESSION["php_doc4_feb"]=0;
$_SESSION["php_doc4_mar"]=0;
$_SESSION["php_doc4_apr"]=0;
$_SESSION["php_doc4_may"]=0;
$_SESSION["php_doc4_jun"]=0;
$_SESSION["php_doc4_jul"]=0;
$_SESSION["php_doc4_aug"]=0;
$_SESSION["php_doc4_sep"]=0;
$_SESSION["php_doc4_oct"]=0;
$_SESSION["php_doc4_nov"]=0;
$_SESSION["php_doc4_dec"]=0;
$_SESSION["php_doc5_jan"]=0;
$_SESSION["php_doc5_feb"]=0;
$_SESSION["php_doc5_mar"]=0;
$_SESSION["php_doc5_apr"]=0;
$_SESSION["php_doc5_may"]=0;
$_SESSION["php_doc5_jun"]=0;
$_SESSION["php_doc5_jul"]=0;
$_SESSION["php_doc5_aug"]=0;
$_SESSION["php_doc5_sep"]=0;
$_SESSION["php_doc5_oct"]=0;
$_SESSION["php_doc5_nov"]=0;
$_SESSION["php_doc5_dec"]=0;
$_SESSION["php_doc6_jan"]=0;
$_SESSION["php_doc6_feb"]=0;
$_SESSION["php_doc6_mar"]=0;
$_SESSION["php_doc6_apr"]=0;
$_SESSION["php_doc6_may"]=0;
$_SESSION["php_doc6_jun"]=0;
$_SESSION["php_doc6_jul"]=0;
$_SESSION["php_doc6_aug"]=0;
$_SESSION["php_doc6_sep"]=0;
$_SESSION["php_doc6_oct"]=0;
$_SESSION["php_doc6_nov"]=0;
$_SESSION["php_doc6_dec"]=0;
$_SESSION["php_doc7_jan"]=0;
$_SESSION["php_doc7_feb"]=0;
$_SESSION["php_doc7_mar"]=0;
$_SESSION["php_doc7_apr"]=0;
$_SESSION["php_doc7_may"]=0;
$_SESSION["php_doc7_jun"]=0;
$_SESSION["php_doc7_jul"]=0;
$_SESSION["php_doc7_aug"]=0;
$_SESSION["php_doc7_sep"]=0;
$_SESSION["php_doc7_oct"]=0;
$_SESSION["php_doc7_nov"]=0;
$_SESSION["php_doc7_dec"]=0;
$_SESSION["php_doc8_jan"]=0;
$_SESSION["php_doc8_feb"]=0;
$_SESSION["php_doc8_mar"]=0;
$_SESSION["php_doc8_apr"]=0;
$_SESSION["php_doc8_may"]=0;
$_SESSION["php_doc8_jun"]=0;
$_SESSION["php_doc8_jul"]=0;
$_SESSION["php_doc8_aug"]=0;
$_SESSION["php_doc8_sep"]=0;
$_SESSION["php_doc8_oct"]=0;
$_SESSION["php_doc8_nov"]=0;
$_SESSION["php_doc8_dec"]=0;
$_SESSION["php_doc9_jan"]=0;
$_SESSION["php_doc9_feb"]=0;
$_SESSION["php_doc9_mar"]=0;
$_SESSION["php_doc9_apr"]=0;
$_SESSION["php_doc9_may"]=0;
$_SESSION["php_doc9_jun"]=0;
$_SESSION["php_doc9_jul"]=0;
$_SESSION["php_doc9_aug"]=0;
$_SESSION["php_doc9_sep"]=0;
$_SESSION["php_doc9_oct"]=0;
$_SESSION["php_doc9_nov"]=0;
$_SESSION["php_doc9_dec"]=0;
$_SESSION["php_doc10_jan"]=0;
$_SESSION["php_doc10_feb"]=0;
$_SESSION["php_doc10_mar"]=0;
$_SESSION["php_doc10_apr"]=0;
$_SESSION["php_doc10_may"]=0;
$_SESSION["php_doc10_jun"]=0;
$_SESSION["php_doc10_jul"]=0;
$_SESSION["php_doc10_aug"]=0;
$_SESSION["php_doc10_sep"]=0;
$_SESSION["php_doc10_oct"]=0;
$_SESSION["php_doc10_nov"]=0;
$_SESSION["php_doc10_dec"]=0;
$_SESSION["phy_name1"]="";
$_SESSION["phy_name2"]="";
$_SESSION["phy_name3"]="";
$_SESSION["phy_name4"]="";
$_SESSION["phy_name5"]="";
$_SESSION["phy_name6"]="";
$_SESSION["phy_name7"]="";
$_SESSION["phy_name8"]="";
$_SESSION["phy_name9"]="";
$_SESSION["phy_name10"]="";
for($i=0;$i<$j;$i++)
{
$sum1=0;
$sum2=0;
$sum3=0;
$sum4=0;
$sum5=0;
$sum6=0;
$sum7=0;
$sum8=0;
$sum9=0;
$sum10=0;
$sum11=0;
$sum12=0;
$cnt1=0;
$cnt2=0;
$cnt3=0;
$cnt4=0;
$cnt5=0;
$cnt6=0;
$cnt7=0;
$cnt8=0;
$cnt9=0;
$cnt10=0;
$cnt11=0;
$cnt12=0;
$avg1=0;
$avg2=0;
$avg3=0;
$avg4=0;
$avg5=0;
$avg6=0;
$avg7=0;
$avg8=0;
$avg9=0;
$avg10=0;
$avg11=0;
$avg12=0;
$doc_name1="doctor A";
$doc_name2="doctor B";
$doc_name3="doctor C";
$doc_name4="doctor D";
$doc_name5="doctor E";
$doc_name6="doctor F";
$doc_name7="doctor G";
$doc_name8="doctor H";
$doc_name9="doctor I";
$doc_name10="doctor J";
 $query = "select g.operationdate,referencedose,p.firstname,p.lastname from operationstable g,physiciantable p where
 operationname in ('".$ope_name[0]."','".$ope_name[1]."','".$ope_name[2]."','".$ope_name[3]."','".$ope_name[4]."') and
 p.firstname in ('".$phy_name[$i]."') and
 g.physicianID=p.physicianID and
 g.operationdate between '".$_POST['start_date']."'  and '".$_POST['end_date']."'";
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

   //$result1=$day.$slash.$month.$slash.$year;

   $jan_start=$year.$slash."01".$slash."01";
   $jan_end=$year.$slash."01".$slash."31";
$feb_start=$year.$slash."02".$slash."01";
   $feb_end=$year.$slash."02".$slash.$feb_day;   $mar_start=$year.$slash."03".$slash."01";
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
  }
  elseif (($row['operationdate'] >= $feb_start) && ($row['operationdate'] <= $feb_end))
  {
    $sum2=$sum2+$row['referencedose'];
    $cnt2++;
    $avg2=$sum2/$cnt2;
  }
  elseif (($row['operationdate'] >= $mar_start) && ($row['operationdate'] <= $mar_end))
  {
    $sum3=$sum3+$row['referencedose'];
    $cnt3++;
    $avg3=$sum3/$cnt3;
  }
  elseif (($row['operationdate'] >= $apr_start) && ($row['operationdate'] <= $apr_end))
  {
   $sum4=$sum4+$row['referencedose'];
   $cnt4++;
   $avg4=$sum4/$cnt4;
  }
  elseif (($row['operationdate'] >= $may_start) && ($row['operationdate'] <= $may_end))
  {
   $sum5=$sum5+$row['referencedose'];
   $cnt5++;
   $avg5=$sum5/$cnt5;
  }
  elseif (($row['operationdate'] >= $jun_start) && ($row['operationdate'] <= $jun_end))
  {
   $sum6=$sum6+$row['referencedose'];
   $cnt6++;
   $avg6=$sum6/$cnt6;
  }
  elseif (($row['operationdate'] >= $jul_start) && ($row['operationdate'] <= $jul_end))
  {
   $sum7=$sum7+$row['referencedose'];
   $cnt7++;
   $avg7=$sum7/$cnt7;
  }
  elseif (($row['operationdate'] >= $aug_start) && ($row['operationdate'] <= $aug_end))
  {
   $sum8=$sum8+$row['referencedose'];
   $cnt8++;
   $avg8=$sum8/$cnt8;
  }
  elseif (($row['operationdate'] >= $sep_start) && ($row['operationdate'] <= $sep_end))
  {
   $sum9=$sum9+$row['referencedose'];
   $cnt9++;
   $avg9=$sum9/$cnt9;
  }
  elseif (($row['operationdate'] >= $oct_start) && ($row['operationdate'] <= $oct_end))
  {
   $sum10=$sum10+$row['referencedose'];
   $cnt10++;
   $avg10=$sum10/$cnt10;
  }
  elseif (($row['operationdate'] >= $nov_start) && ($row['operationdate'] <= $nov_end))
  {
   $sum11=$sum11+$row['referencedose'];
   $cnt11++;
   $avg11=$sum11/$cnt11;
  }
 /* elseif (($row['operationdate'] >= $dec_start) && ($row['operationdate'] <= $dec_end))
  {
   $sum12=$sum12+$row['referencedose'];
   $cnt12++;
   $avg12=$sum12/$cnt12;
  }*/
}

/*$_SESSION["phy_name"]=$phy_name[$i];
echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for January month : ";
echo $avg1;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_jan"]=$avg1;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_jan"]=$avg1;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_jan"]=$avg1;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_jan"]=$avg1;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_jan"]=$avg1;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_jan"]=$avg1;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_jan"]=$avg1;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_jan"]=$avg1;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_jan"]=$avg1;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_jan"]=$avg1;
  $_SESSION["phy_name10"]=$phy_name[$i];
}


/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for February month : ";
echo $avg2;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_feb"]=$avg2;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_feb"]=$avg2;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_feb"]=$avg2;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_feb"]=$avg2;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_feb"]=$avg2;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_feb"]=$avg2;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_feb"]=$avg2;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_feb"]=$avg2;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_feb"]=$avg2;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_feb"]=$avg2;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for March month : ";
echo $avg3;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_mar"]=$avg3;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_mar"]=$avg3;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_mar"]=$avg3;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_mar"]=$avg3;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_mar"]=$avg3;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_mar"]=$avg3;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_mar"]=$avg3;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_mar"]=$avg3;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_mar"]=$avg3;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_mar"]=$avg3;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for April month : ";
echo $avg4;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_apr"]=$avg4;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_apr"]=$avg4;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_apr"]=$avg4;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_apr"]=$avg4;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_apr"]=$avg4;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_apr"]=$avg4;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_apr"]=$avg4;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_apr"]=$avg4;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_apr"]=$avg4;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_apr"]=$avg4;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for May month : ";
echo $avg5;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_may"]=$avg5;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_may"]=$avg5;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_may"]=$avg5;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_may"]=$avg5;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_may"]=$avg5;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_may"]=$avg5;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_may"]=$avg5;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_may"]=$avg5;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_may"]=$avg5;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_may"]=$avg5;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for June month : ";
echo $avg6;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_jun"]=$avg6;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_jun"]=$avg6;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_jun"]=$avg6;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_jun"]=$avg6;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_jun"]=$avg6;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_jun"]=$avg6;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_jun"]=$avg6;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_jun"]=$avg6;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_jun"]=$avg6;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_jun"]=$avg6;
  $_SESSION["phy_name10"]=$phy_name[$i];
}
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_jul"]=$avg7;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_jul"]=$avg7;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_jul"]=$avg7;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_jul"]=$avg7;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_jul"]=$avg7;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_jul"]=$avg7;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_jul"]=$avg7;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_jul"]=$avg7;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_jul"]=$avg7;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_jul"]=$avg7;
  $_SESSION["phy_name10"]=$phy_name[$i];
}
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_aug"]=$avg8;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_aug"]=$avg8;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_aug"]=$avg8;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_aug"]=$avg8;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_aug"]=$avg8;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_aug"]=$avg8;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_aug"]=$avg8;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_aug"]=$avg8;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_aug"]=$avg8;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_aug"]=$avg8;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for September month : ";
echo $avg9;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_sep"]=$avg9;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_sep"]=$avg9;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_sep"]=$avg9;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_sep"]=$avg9;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_sep"]=$avg9;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_sep"]=$avg9;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_sep"]=$avg9;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_sep"]=$avg9;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_sep"]=$avg9;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_sep"]=$avg9;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for October month : ";
echo $avg10;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_oct"]=$avg10;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_oct"]=$avg10;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_oct"]=$avg10;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_oct"]=$avg10;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_oct"]=$avg10;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_oct"]=$avg10;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_oct"]=$avg10;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_oct"]=$avg10;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_oct"]=$avg10;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_oct"]=$avg10;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

/*echo "<br>";
echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for November month : ";
echo $avg11;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_nov"]=$avg11;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_nov"]=$avg11;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_nov"]=$avg11;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_nov"]=$avg11;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_nov"]=$avg11;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_nov"]=$avg11;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_nov"]=$avg11;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_nov"]=$avg11;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_nov"]=$avg11;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_nov"]=$avg11;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

echo "<br>";
/*echo "Average dosage given by physician ";
echo $phy_name[$i];
echo " for December month : ";
echo $avg12;*/
if (strcmp($doc_name1,$phy_name[$i])==0)
{
  $_SESSION["php_doc1_dec"]=$avg12;
  $_SESSION["phy_name1"]=$phy_name[$i];
}
elseif (strcmp($doc_name2,$phy_name[$i])==0)
{
  $_SESSION["php_doc2_dec"]=$avg12;
  $_SESSION["phy_name2"]=$phy_name[$i];
}
elseif (strcmp($doc_name3,$phy_name[$i])==0)
{
  $_SESSION["php_doc3_dec"]=$avg12;
  $_SESSION["phy_name3"]=$phy_name[$i];
}
elseif (strcmp($doc_name4,$phy_name[$i])==0)
{
  $_SESSION["php_doc4_dec"]=$avg12;
  $_SESSION["phy_name4"]=$phy_name[$i];
}
elseif (strcmp($doc_name5,$phy_name[$i])==0)
{
  $_SESSION["php_doc5_dec"]=$avg12;
  $_SESSION["phy_name5"]=$phy_name[$i];
}
elseif (strcmp($doc_name6,$phy_name[$i])==0)
{
  $_SESSION["php_doc6_dec"]=$avg12;
  $_SESSION["phy_name6"]=$phy_name[$i];
}
elseif (strcmp($doc_name7,$phy_name[$i])==0)
{
  $_SESSION["php_doc7_dec"]=$avg12;
  $_SESSION["phy_name7"]=$phy_name[$i];
}
elseif (strcmp($doc_name8,$phy_name[$i])==0)
{
  $_SESSION["php_doc8_dec"]=$avg12;
  $_SESSION["phy_name8"]=$phy_name[$i];
}
elseif (strcmp($doc_name9,$phy_name[$i])==0)
{
  $_SESSION["php_doc9_dec"]=$avg12;
  $_SESSION["phy_name9"]=$phy_name[$i];
}
elseif (strcmp($doc_name10,$phy_name[$i])==0)
{
  $_SESSION["php_doc10_dec"]=$avg12;
  $_SESSION["phy_name10"]=$phy_name[$i];
}

//echo "<br>";
}

}
else if(isset($_POST['ope_name']) && !isset($_POST['phy_name']))
{
   $name=$_POST['ope_name'];
   $ope_name=array();
   $ope_name[0]=0;
   $ope_name[1]=0;
   $ope_name[2]=0;
   $i=0;
foreach($name as $selected)
 {
 $ope_name[$i++]=$selected;
 }
 echo "<br>";
    $query = "select operationname,operationdate,referencedose,DAP,florencetime from operationstable where operationname
  in ('".$ope_name[0]."','".$ope_name[1]."','".$ope_name[2]."') and
  operationdate between '".$_POST['start_date']."'  and '".$_POST['end_date']."'";
  $result = mysqli_query($con,$query);
      echo "<center>";

   echo "<table border='1'>"; // start a table tag in the HTML
echo "<tr><th> Operation Name</th><th>Operation Date</th><th>Reference Dose</th><th>DAP</th><th>Florence Time</th></tr>";
   while($row = mysqli_fetch_array($result))
{   //Creates a loop to loop through results
     // output data of each row
echo "<tr><td>" . $row['operationname'] . "</td><td>" . $row['operationdate'] . "</td><td>" . $row['referencedose'] . "</td><td>"
	. $row['DAP'] ."</td><td>" .$row['florencetime']
."</td></tr>";
}
echo "</table>";
}
else if(!isset($_POST['ope_name']) && isset($_POST['phy_name']))
{
   $name=$_POST['phy_name'];
   $phy_name=array();
   $phy_name[0]=0;
   $phy_name[1]=0;
   $phy_name[2]=0;
   $i=0;
foreach($name as $selected)
 {
 $phy_name[$i++]=$selected;
 }
 $arrlength=count($phy_name);




  $query = "select firstname,lastname,experience from generaltable g,physiciantable p where p.firstname in
  ('".$phy_name[0]."','".$phy_name[1]."','".$phy_name[2]."') and g.physicianID=p.physicianID and
  g.operationdate between '".$_POST['start_date']."'  and '".$_POST['end_date']."'";


  $result = mysqli_query($con,$query);
      echo "<center>";

   echo "<table border='1'>"; // start a table tag in the HTML

	echo "<tr><th>Doctor FIRST Name</th><th>Last Name</th><th>Experience</th></tr>";

   while($row = mysqli_fetch_array($result))
{   //Creates a loop to loop through results
     // output data of each row

   echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['experience'] . "</td></tr>";
}
echo "</table>";

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



