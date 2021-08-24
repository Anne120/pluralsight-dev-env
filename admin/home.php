<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header("Location: index.php?login=invalid");
  }   
  require 'config/connection.php';
?>
<!doctype html>
<html lang="en" class="js">
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
<style type="text/css">
.js div#preloader {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 999;
  width: 100%;
  height: 100%;
  overflow: visible;
  background: #fff url('assets/images/loader.gif') no-repeat center center;
}

.navbar{
  background-color: #2d2d30;
}

.panel-heading{
  background-color: #2d2d30;
  color: #ffffff;
}

.sidenav {
  background-color: #2d2d30;  
  position: fixed;
  width: 300px;
  height: 100%;
}

#main-content{
  margin-left: 320px; 
  overflow: auto; 
} 

.well{
  padding-top: 10px;
  padding-bottom: 20px;
  margin-top: 10px;
  background-color: #518e40;
  border: 1px solid #518e40; 
  color: #fff; 
}

#well{
  font-weight: normal;
  text-align: center;
}

.sidepanel{
  background-color: #518e40; 
  border: 1px solid #518e40;
}

.logo{
  font-size: 300px;
  color: #8e4051;
}

.glyphicon-chevron-down{
  font-weight: lighter;
}

.color{
  background-color: #8e4051;
}

.carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #8e4051;
  }

.carousel-indicators li {
      border-color: #8e4051;
  }

.carousel-indicators li.active {
      background-color: #8e4051;
  }   

a:link{
  text-decoration: none;
}

a:visited{
  text-decoration: none;
}

a:hover{
  text-decoration: none;
}

a:active{
  text-decoration: none;
}

footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 20px;
      position: fixed;
      width: 975px;
  }

footer a {
      color: #518e40;
  }  

footer a:hover {
      color: #777;
      text-decoration: none;
  } 

</style>
<script type="text/javascript">
  jQuery(document).ready(function($) {  

$(window).load(function(){
  $('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});
</script>

<body>
  
  
<div class="container-fluid" id="container">
  <div class="col-md-3 sidenav">
    <div>    
      <div class="well" id="well"><a href="home.php"><h2>Farming App</h2></a></div>
    </div>
    <h3 style="padding-left: 30px; color: white;"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h3>
  <div class="panel-group" id="accordion" style="padding-left: 30px;">
    <div class="panel panel-default" style="background-color: #2d2d30; border: none;">
      <div class="panel-heading" style="background-color: #2d2d30; border: none; color: white;">
        <h4 class="panel-title" style="background-color: #2d2d30; border: none;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="background-color: #2d2d30; border: none;"><span class="glyphicon glyphicon-user"></span> System Users <span class="glyphicon glyphicon-collapse-down"></span></a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse in">
        <div class="panel-body" style="background-color: #2d2d30; border: none;">
          <a href="administrators.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;">Administrators</a>
          <a href="farmers.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;">Farmers</a>
          <a href="agronomists.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;">Agronomists</a>
          
        </div>
      </div>
    </div>
    <div class="panel panel-default" style="background-color: #2d2d30; border: none;">
      <div class="panel-heading" style="background-color: #2d2d30; border: none; color: white;">
        <h4 class="panel-title" style="background-color: #2d2d30; border: none;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="background-color: #2d2d30; border: none;"><span class="glyphicon glyphicon-home"></span> Land Input <span class="glyphicon glyphicon-collapse-down"></span></a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body" style="background-color: #2d2d30; border: none;">
          <!--<a href="land_price.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Land Price</a> -->
          <a href="diseases.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Diseases</a> 
          <a href="regions.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Regions</a>     
        </div>
      </div>     
    <div class="panel panel-default" style="background-color: #2d2d30; border: none;">
      <div class="panel-heading" style="background-color: #2d2d30; border: none; color: white;">
        <h4 class="panel-title" style="background-color: #2d2d30; border: none;">
         <!--  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="background-color: #2d2d30; border: none;"><span class="glyphicon glyphicon-envelope"></span> Mail Services <span class="glyphicon glyphicon-collapse-down"></span></a>-->
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse" style="background-color: #2d2d30; border: none;">
        <div class="panel-body" style="background-color: #2d2d30; border: none;">
          <!-- <a href="email.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Email Attack</a>   -->
        </div>
      </div>      
    </div>
    
    </div>
  </div>
  </div>

<div id="preloader"></div>
  <div class="col-md-9" id="main-content">

    <nav class="navbar navbar-inverse">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">          
          <ul class="nav navbar-nav navbar-right">                 
            <li>
            <a href="#"><span class="glyphicon glyphicon-user"></span> 
                <?php echo $_SESSION['username']; ?>
              </a>          
            </li>
          <li>
            <a href="includes/logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> 
              Logout
            </a>          
          </li>          
          </ul>
      </div>
      
    </nav>
    
    <div class="row">
      <div class="col-md-3">
        <div class="panel panel-default text-center">
              <div class="panel-heading" style="background-color: #518e40; color: #ffffff;">
                <h1>Farmers</h1>
              </div>
                           
            </div> 
      </div>
      <div class="col-md-3">
        <div class="panel panel-default text-center">
              <div class="panel-heading" style="background-color: #8e5e40; color: #2d2d30;">
                <h1>Agronomists</h1>
              </div>
                            
            </div> 
      </div>
      
      <div class="col-md-3">
        <div class="panel panel-default text-center">
              <div class="panel-heading" style="background-color: #40628e; color: #ffffff;">
                <h1>Regions</h1>
              </div>
                           
            </div> 
      </div>
    </div>  


    <div class="row" style="margin-bottom: 20px;">
      <div class="col-md-4">
        <span class="glyphicon glyphicon-signal logo text-center"></span>
      </div>
      <div class="col-md-8">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active" style="color: #8e4051; border-color: #8e4051;"></li>
          <li data-target="#myCarousel" data-slide-to="1" style="border-color:  #8e4051;"></li>
          <li data-target="#myCarousel" data-slide-to="2" style="border-color:  #8e4051;"></li>
          <li data-target="#myCarousel" data-slide-to="3" style="border-color:  #8e4051;"></li>
        </ol>

           <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="assets/images/dash1.jpg" alt="Chania" width="1920" height="500">
            <div class="carousel-caption">
             <h3>Farming Advisory System</h3>
            <p>Produce the best out the land you have chosen to practise your farming.</p>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/dash2.jpg" alt="Chania" width="1920" height="500">
            <div class="carousel-caption">
              <h3>Farming Advisory System</h3>
            <p>Get to know what the region is like and what to produce exactly in the region.</p>
            </div>
          </div>
        
          <div class="item">
            <img src="assets/images/dash3.jpg" alt="Flower" width="1920" height="500">
            <div class="carousel-caption">
              <h3>Farming Advisory System</h3>
            <p>Chat with several agronomists in real-time and get the best advises on how to be a successful farmer.</p>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/dash4.jpg" alt="Flower" width="1920" height="500">
            <div class="carousel-caption">
             <h3>Farming Advisory System</h3>
            <p>Produce the best produce from an informed Budget.</p>
            </div>
          </div>
      
        </div>
         <!-- Left and right controls -->
          <a class="left carousel-control carousel-back" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #8e4051;"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #8e4051;"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  
    </div>      
    
 

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
