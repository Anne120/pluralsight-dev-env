<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header("Location: index.php?login=invalid");
  }   
  require 'config/connection.php';
  $username = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/farmapp.png">
  <link rel="icon" type="image/png" href="assets/images/farmapp.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Farming Advisory System</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/new.css" rel="stylesheet" />    

    <!--   Core JS Files   -->
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- End of JS files -->
</head>
<body>

<div id="wrapper">

  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li><a href="#">Link1</a></li>
      <li><a href="#">Link2</a></li>
      <li><a href="#">Link3</a></li>     
    </ul>
  </div>

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <a href="#" class="btn btn-success" id="menu-toggle"> Toggle Menu</a>
          <h1>Sidebar Layout</h1>
          <p>This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice. This is nice.</p>
        </div>
      </div>
    </div>
  </div>
</div>  

<!-- Menu toggle script --> <script type="text/javascript">
$("menu-toggle").click(function (e) { 
  e.preventDefault();
  $("wrapper").toggleClass("toggled"); 
}); </script>

<!--   Core JS Files   -->
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- End of JS files -->
</body>
</html>
