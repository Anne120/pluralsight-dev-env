<?php 
require '../config/connection.php';

$delete= $_GET['delete_id'];

if(empty($delete)){
	echo "you did not select any record";
}
else{
	
	$query="DELETE FROM administrators WHERE admin_id =".$delete."";
	$result=mysqli_query($connect, $query);
	echo "<script>
		alert('Administrator Deleted Successfully!');
		location = '../administrators.php?admin=deleted';
		</script>";      
	exit();	
	}			

mysqli_close($connect);
?>