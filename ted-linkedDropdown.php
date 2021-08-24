<?php
	session_start();
	if (!isset($_SESSION['username'])) {
	    header("Location: index.php?login=invalid");
	}   
	require 'config/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Source: -->
    <select id="source" name="source">
        <option>MANUAL</option>
        <option>ONLINE</option>
    </select>
   
    <!-- Status: -->
    <select id="status" name="status">
       <option>OPEN</option>
       <option>DELIVERED</option>
    </select>

    <div class="col-sm-4">
        <div class="form-group" style="padding-top: 9px; padding-bottom: 8px;">
        <label for="sel1">Symptoms:</label>
        <select class="form-control" id="sel1" name="symptoms" required="required">
              <option>-- Disease Symptoms --</option>
              <?php
            $symptomsQuery = mysqli_query($connect, "SELECT symptoms FROM diseases");
            while($symptomsRow=mysqli_fetch_assoc($symptomsQuery))
            {
              ?>  
            <option value="<?php echo $symptomsRow['symptoms']; ?>"><?php echo $symptomsRow['symptoms']; ?></option> 
              <?php
            }     
              ?>                
        </select>
        <button type="submit" class="btn btn-success btn-block" style="margin-top: 28px; float: right;" name="diagnose">Diagnose</button>
    </div>
    </div>
</body>
</html>