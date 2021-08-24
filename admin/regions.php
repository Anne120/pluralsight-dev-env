<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header("Location: index.php?login=invalid");
  }   
  require 'config/connection.php';
  $username = $_SESSION['username'];

  /*if (isset($_POST['add'])) {
  $disease = mysqli_real_escape_string($connect, $_POST['disease']);
  $symptoms = mysqli_real_escape_string($connect, $_POST['symptoms']);
  $cause = mysqli_real_escape_string($connect, $_POST['cause']);
  $solution = mysqli_real_escape_string($connect, $_POST['solution']);

  $diseaseQuery = mysqli_query($connect, "SELECT * FROM diseases WHERE disease_name = '$disease'");
  $rowCheck = mysqli_num_rows($diseaseQuery);
  if ($rowCheck >= 0) {      
        echo "<script>
          alert('Disease already exists.');
          location = 'diseases.php?diseases=already_exists';
          </script>";
      }
      else{                     
            $diseaseQuery = mysqli_query($connect, "INSERT INTO diseases (`disease_name`, `symptoms`, `cause`, `solution`) VALUES ('$disease', '$symptoms', '$cause', '$solution')");     
            
            echo "<script>
              alert('Disease added successfully.');
              location = 'diseases_two.php?diseases=success';
              </script>";
        }     
      
}*/
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

#sel1 {
      border: 2px solid #649a41;            
  } 

#sel1:focus {
      border: 2px solid #345759;
  }

input[type="text"], input[type="password"], input[type="email"]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;       
    border: none;
    border: 2px solid #649a41;
}

input[type=text]:focus, input[type="password"]:focus, input[type="email"]:focus{
    border: 2px solid #345759;
}

.upper{
  height: 100px;
  background-color: #f4fe09;
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
  background-color: #065e97; 
  border: 1px solid #065e97;
}

.logo{
  font-size: 300px;
  color: #6b0697;
}

.glyphicon-chevron-down{
  font-weight: lighter;
}

.color{
  background-color: #065e97;
}

.carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #6b0697;
  }

.carousel-indicators li {
      border-color: #6b0697;
  }

.carousel-indicators li.active {
      background-color: #6b0697;
  } 

button[type="submit"]{  
    background-color: #649a41;
    color: #ffffff;
    padding: 10px 24px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
}

button[type="submit"]:hover {
    background-color: #466a2e;
    color: #ffffff;
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
    function ExcelReport() 
  {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';

    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';
    tab_text = tab_text + '<x:Name>Software Sheet</x:Name>';
    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#trackingDetails').html();
    tab_text = tab_text + "</table></body></html>";

    var data_type = 'data:application/vnd.ms-excel';

    $('#export').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
    $('#export').attr('download', 'Gladercom (Pvt) Ltd. Report file.xls');
  }
</script>

<body>
  
<div class="container-fluid">

<!--******************************************************** Start SideNav *******************************************************-->

   <!-- ***********************************************Sidenav********************************************************** -->

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
           <!--  <a href="land_price.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Land Price</a> -->
            <a href="diseases.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Diseases</a> 
            <a href="regions.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Regions</a>     
          </div>
        </div>     
      <div class="panel panel-default" style="background-color: #2d2d30; border: none;">
        <div class="panel-heading" style="background-color: #2d2d30; border: none; color: white;">
          <h4 class="panel-title" style="background-color: #2d2d30; border: none;">
            <!-- <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="background-color: #2d2d30; border: none;"><span class="glyphicon glyphicon-envelope"></span> Mail Services <span class="glyphicon glyphicon-collapse-down"></span></a>-->
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse" style="background-color: #2d2d30; border: none;">
          <div class="panel-body" style="background-color: #2d2d30; border: none;">
           <!--  <a href="email.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Email Attack</a>   -->
          </div>
        </div>      
      </div>      
      </div>    
  </div>
  </div>

  <!--******************************************************** End of SideNav ****************************************************-->

<!--******************************************************** End of SideNav ****************************************************-->

<!--******************************************************** Main Section ******************************************************-->

  <div class="col-md-9" id="main-content">
<div class="container">
  
</div>
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

  <div class="row" style="margin-bottom: 20px;">
     <div class="page-header text-center">
      <h3>Farming Regions in Kenya | Table</h3>      
    </div>
    <div class="table-responsive" style="padding-top: 25px;">             
  <table class="table table-striped" id="trackingDetails">
    <thead>
      <tr>
        <th>RegionName</th>
        <th>AverageTemperature</th>
        <th>SoilType</th>        
        <th>AnnualRainfall</th>
        <th>Soilph</th>
        <th>SuggestedCrops</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php                
        $result = mysqli_query($connect, "SELECT * FROM regions"); 
        while($row = mysqli_fetch_assoc($result))
      {
      ?>
      <tr>
        <td><?Php echo $row['region_name']; ?></td>
        <td><?Php echo $row['average_temperature']; ?></td>
        <td><?Php echo $row['soil_type']; ?></td>
        <td><?Php echo $row['annual_rainfall']; ?></td>        
         <td><?Php echo $row['soil_ph']; ?></td>  
         <td><?Php echo $row['suggested_crops']; ?></td>   
         <td>
          <div class="btn-group">         
          <a href="edit_region.php?edit_id=<?php echo $row['region_id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
          <a href="includes/delete_region.inc.php?delete_id=<?php echo $row['region_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
          </div>         
        </td>                 
      </tr>         
      <?php
        }
      ?>     
    </tbody>
  </table>
</div>
    </div>   
       
  

<div class="row">
<div class="page-header text-center">
    <h3>Farming Regions Reports </h3>      
</div>
  <div class="table-responsive">             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Query By</th>        
                 
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <form role="form" action="regionNameReports.php" method="post">
        <td>
         <div class="form-group" style="padding-top: 8px; padding-bottom: 8px;">
            
            <select class="form-control" id="sel1" name="region_names" required="required">
              <option>-- Region names --</option>
              <?php
                $farmers = mysqli_query($connect, "SELECT * FROM regions");
                while($agro_row=mysqli_fetch_assoc($farmers))
                    {
              ?>  
              <option value="<?php echo $agro_row['region_name']; ?>"><?php echo $agro_row['region_name']; ?></option> 
              <?php
                    }     
              ?>      
            </select>
        </div>
    </td>                
        <td>
          <button type="submit" name="regionNames" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Report</button>
        </td>  
        </form>    
      </tr>

      <tr>
        <form role="form" action="regionAreaReports.php" method="post">
        <td>
        <div class="form-group">         
          <select class="form-control" id="sel1" name="area" required="required">
              <option>-- Region Area Covered --</option>
              <?php
                $farmers = mysqli_query($connect, "SELECT * FROM regions");
                while($agro_row=mysqli_fetch_assoc($farmers))
                    {
              ?>  
              <option value="<?php echo $agro_row['area']; ?>"><?php echo $agro_row['area']; ?></option> 
              <?php
                    }     
              ?>      
            </select>
       </div>
      </td>                 
        <td>
          <button type="submit" name="regionArea" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Report</button>
        </td>  
        </form>    
      </tr>

      

    </tbody>
  </table>
</div>
</div>


         
    
 <!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; <?php echo date("Y");?> <a href="#" data-toggle="tooltip" title="Visit ZIMDEF.">Farming Advisory System.</a></p>
</footer>
</div>
</div>

<!--******************************************************** End of SideNav ********************************************************-->

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
