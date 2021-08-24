<?php 
require '../config/connection.php';

$delete= $_GET['delete_id'];

if(empty($delete)){
	echo "you did not select any record";
}
else{
	
	$query="DELETE FROM agronomists WHERE agronomist_id =".$delete."";
	$result=mysqli_query($connect, $query);
	echo "<script>
		alert('Agronomist Deleted Successfully!');
		location = '../agronomists.php?agronomist=deleted';
		</script>";      
	exit();	
	}			

mysqli_close($connect);
?>