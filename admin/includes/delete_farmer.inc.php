<?php 
require '../config/connection.php';

$delete= $_GET['delete_id'];

if(empty($delete)){
	echo "you did not select any record";
}
else{
	
	$query="DELETE FROM farmers WHERE farmers_id =".$delete."";
	$result=mysqli_query($connect, $query);
	echo "<script>
		alert('Farmer Deleted Successfully!');
		location = '../farmers.php?farmer=deleted';
		</script>";      
	exit();	
	}			

mysqli_close($connect);
?>