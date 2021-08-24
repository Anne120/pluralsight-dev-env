<?php
session_start();
require '../config/connection.php';
if (isset($_POST['upload']))
{
	$target_dir = "../uploaded_images/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$FileType = pathinfo($target_file,PATHINFO_EXTENSION);	
	$image = basename($_FILES["image"]["name"]);

	if($image != "") 
	{	
		if(file_exists($target_file)) 
	    {	        
	      echo("<script type='text/javascript'>
	            alert('Sorry, file already exists!');
	            location='../agro_chats.php?chat=upload_failed';
	            </script>"); 
	          	$uploadOk = 0;
	    }
	    // Check file size
	    elseif($_FILES["image"]["size"] > 20000000) 
	    {
	          
	        echo("<script type='text/javascript'>
	            alert('Sorry, file is too large!');
	            location='../agro_chats.php?chat=upload_failed';
	            </script>"); 
	         $uploadOk = 0;
	    }
	    // Allow certain file formats
        elseif($FileType != "jpg" &&  $FileType != "png" && $FileType != "bmp" && $FileType != "gif" && $FileType != "jpeg") 
        {
          
	        echo("<script type='text/javascript'>
	            alert('Sorry, only .jpg, .jpeg, .png, .bmp, .gif, files are allowed!');
	            location='../agro_chats.php?chat=upload_failed';
	            </script>"); 
	        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
	    elseif($uploadOk == 0) 
	    {	          
	        echo("<script type='text/javascript'>
	            alert('Sorry, your file was not uploaded!');
	            location='../agro_chats.php?chat=upload_failed';
	            </script>");
	    // if everything is ok, try to upload file
	    }
	    else{
		    	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	          	{
	            $username = $_SESSION['username'];

	          	$sqlQuery = mysqli_query($connect, "UPDATE `agronomists` SET image_upload = '$image' WHERE username = '$username'");     
	                
	            echo("<script type='text/javascript'>
	                alert('Profile image uploaded successfully!');
	                location='../agro_chats.php?chat=upload_success';
	                </script>");
		    	}
		    	else{
		    		echo("<script type='text/javascript'>
		                alert('There has been an error in uploading your image');
		                location='../agro_chats.php?chat=upload_success';
		                </script>");
		    	}
			}	  
    	  
	}
	echo "<script>
	         alert('Upload The File First!');
	         location = '../agro_chats.php?chat = upload_failed';
	         </script>";
}
mysqli_close($connect);
?>