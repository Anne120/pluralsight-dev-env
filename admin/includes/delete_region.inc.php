<?php 
require '../config/connection.php';

$delete= $_GET['delete_id'];

if(empty($delete)){
	echo "you did not select any record";
}
else{
	
	$query="DELETE FROM regions WHERE region_id =".$delete."";
	$result=mysqli_query($connect, $query);
	echo "<script>
		alert('Region Deleted Successfully!');
		location = '../regions.php?region=deleted';
		</script>";      
	exit();	
	}			

mysqli_close($connect);
?>