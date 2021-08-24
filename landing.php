<?php
	   
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
<style type="text/css">
	.address{
		float: right;
		display: inline;
	}

	.navbar-inverse, .navbar-toggle, .navbar-header, .navbar-brand{
		border: 1px solid #518e40;
		background-color: #518e40;
		color: #ffffff;		
	}	
	.active1 {
		background-color: #497d3a;
	}

   .sidenav {
    background-color: #f1f1f1;
    height: 500px;
   }

   #modules{
   	padding-top: 50px;
   	padding-bottom: 50px;
   }

  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #518e40;
  }
  .carousel-indicators li {
      border-color: #518e40;
  }
  .carousel-indicators li.active {
      background-color: #518e40;
  }   

  .active2:hover{
    	background-color: #dbe400;
    } 
  .para-padding{
    	padding-top: 30px;
    	padding-bottom: 30px;
    	color: #808080;
    } 
   .logo-small{
   	color: #518e40;
   	 font-size: 50px; 
   	 padding-top: 35px;  
   	 padding-bottom: 15px;	 
   } 

   footer {
      background-color: #2d2d30;
      color: #518e40;
      padding: 20px;
  }

   footer a {
      color: #518e40;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .body-background{
	background-color: #eaf6ea;
	background-repeat: no-repeat;
	background-size: cover;
	}

</style>
<body class="body-background">	
<nav class="navbar navbar-inverse" style="color: white">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">FarmingAdvisory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav">
	      <li class="active1"><a href="home.php">Home</a></li>      
	      <li><a href="blog.html">Blog</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    		    	<li>
	    		<a href="register.php">
		    		Register
	    		</a>
</li>
				<li>
				<a href="index.php">
		    		Log In
	    		</a>
</li>
	    	</li>
	    </ul>
	</div>
  </div>
</nav>
	
<div class="container">
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
	 	 <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active" style="color: #518e40; border-color:  #518e40;"></li>
	      <li data-target="#myCarousel" data-slide-to="1" style="border-color:  #518e40;"></li>
	      <li data-target="#myCarousel" data-slide-to="2" style="border-color:  #518e40;"></li>
	      <li data-target="#myCarousel" data-slide-to="3" style="border-color:  #518e40;"></li>
	    </ol>

		     <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">

	      <div class="item active">
	        <img src="assets/images/farm3.jpg" alt="Chania" width="1920" height="500">
	        <div class="carousel-caption">
	          <h3>Farming Advisory System</h3>
		        <p>Produce the best out the land you have chosen to practise your farming.</p>
	        </div>
	      </div>

	      <div class="item">
	        <img src="assets/images/farm22.jpg" alt="Chania" width="1920" height="500">
	        <div class="carousel-caption">
	          <h3>Farming Advisory System</h3>
		        <p>Produce the best produce from an informed Budget.</p>
	        </div>
	      </div>
	    
	      <div class="item">
	        <img src="assets/images/farm4.jpg" alt="Flower" width="1920" height="500">
	        <div class="carousel-caption">
	          <h3>Farming Advisory System</h3>
		        <p>Chat with several agronomists in real-time and get the best advises on how to be a successful farmer.</p>
	        </div>
	      </div>

	      <div class="item">
	        <img src="assets/images/farm11.jpg" alt="Flower" width="1920" height="500">
	        <div class="carousel-caption">
	           <h3>Farming Advisory System</h3>
		        <p>Get to know what the region is like and what to produce exactly in the region.</p>
	        </div>
	      </div>
	  
	    </div>
	     <!-- Left and right controls -->
		    <a class="left carousel-control carousel-back" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #518e40;"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #518e40;"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	 
<div id="modules" class="container text-center">
  <h3>KENYA'S FARMING ADVISORY SYSTEM </h3>
  <h4> Agricultural advisory (extension) services are a vital element of the array of market and non-market entities and agents that provide critical flows of information that can improve farmers' and other rural peoples' welfare. </h4>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
    	<h3 class="text-center">Budgets</h3>
		<span class="glyphicon glyphicon-briefcase logo-small"></span>
      <p class="text-center para-padding">Our App caters for all visitors who come to visit our website. A proper record of the time in and time out is kept for security purposes. Using the module is very easy, simply click on Budget on Security app's navigation bar</p>
    </div>
    <div class="col-sm-4">
     <h3 class="text-center">Diagnose Diseases</h3>	
	 <span class="glyphicon glyphicon-grain logo-small"></span> 		
	 <p class="text-center para-padding">Most plant diseases around 85 percent are caused by fungal or fungal-like organisms. This website takes care for all plant diseases and helps you diagnose them in regard to the signs and symptoms the plant is experiencing</p>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Live Chat</h3>	
	  <span class="glyphicon glyphicon-comment logo-small"></span>
	   		<p class="text-center para-padding">Our live chat is a tool used to offer real-time service. It allows your visitors to get immediate support or information, via a handy chat window. So, the website visitor types a message inside the live chat session, and an ogrovet types back.</p>
    </div>
</div>
<div id="modules" class="container text-center">
	<h4> The roles of agricultural extension service aiming to: </h4>
	<ul>
		<span class="glyphicon glyphicon-leaf"></span> Improve the wellbeing of individuals and communities<span class="glyphicon glyphicon-leaf"></span></br>
		<span class="glyphicon glyphicon-leaf"></span>Change production systems so that they improve rural livelihoods and sustain the resource base <span class="glyphicon glyphicon-leaf"></span></br>
		<span class="glyphicon glyphicon-leaf"></span> Improve agriculture and the social, economic and political status of rural communities<span class="glyphicon glyphicon-leaf"></span></br>
		<span class="glyphicon glyphicon-leaf"></span>Improve the wellbeing of farm families<span class="glyphicon glyphicon-leaf"></span></br>
		<span class="glyphicon glyphicon-leaf"></span>Improve productivity and livelihoods for farmers<span class="glyphicon glyphicon-leaf"></span></br>
		<span class="glyphicon glyphicon-leaf"></span>Increase and improve farmers’ incomes and productivity on a sustainable basis<span class="glyphicon glyphicon-leaf"></span></br>
</ul>
</div>
</div>  

<!-- Footer -->
<footer class="text-center">
  
   
  </a><br><br>
 
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<p>2021 © KENYAS FARMING ADVISORY SYSTEM.</br> All rights reserved | Design by Anne Nyambura
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".2s">
					
					<ul>
						<a href="about.html">About Us</a></br>
						<a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".2s">
					<p>Sign Up Now For More Information </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	</footer>	
</body>
</html>