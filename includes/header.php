<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>




<body>

    <div class="collapse navbar-collapse" id="myNavbar"> 
	    <ul class="nav navbar-nav">
          <li> <a class="navbar-brand" href="home.php">FarmingAdvisory</a>
	      <li><a href="home.php">Home</a></li>      
	      <li><a href="dashboard.php">Budget</a></li>
	      <li class="active1"><a href="regions.php">Regions</a></li>
	      <li><a href="diagnose.php">Diagnose</a></li>
		  <li><a href="appointments.php">Appointments</a></li>	

		  <li ><a href="blog.html">Blog</a></li>

          <li class="nav navbar-nav navbar-right">   
          <a href="#"><span class="glyphicon glyphicon-user"></span> 
		    		<?php echo $_SESSION['username']; ?>
	    		</a>	    		
	    	</li> 
	    </ul>
        </div>

</nav>
</body>