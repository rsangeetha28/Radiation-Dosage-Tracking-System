


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
  <?php
session_start();
$user = $_SESSION['user'];
  if($_SESSION['loggedin'] != TRUE){
header("Location:index.html");
}
?>
<center><h1>ADMIN INSERTING PAGE</h1></center>
<form action="insert.php" method="post" enctype="multipart/form-data">
<p><center>
Firstname  :<br><input type="text" name="fname"  /><br><br>
Lastname   :<br><input type="text" name="lname" /><br><br>
Username   :<br><input type="text" name="uname" /><br><br>
Password   :<br><input type="password" name="psw" /><br><br>
Email      :<br><input type="email" name="email" /><br><br>
Privilege  :<br><input type="text" name="pri" /><br><br>
<p><b>OR</b></p>
<p>upload file(only .csv file) to insert data into database</p>
<p><input type="file" name="file" id="file"></input></p>
<input type="submit" value="submit" name="submit" /></center></p>
<br>
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



