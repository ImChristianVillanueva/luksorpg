<?php
include('../constant/connect.php');
//page_protect();
    
    
   $id=$_POST['id'];
   $i = "../img/images/".$_FILES['img']['name'];
   move_uploaded_file($_FILES['img']['tmp_name'], $i);
   $desc=$_POST['description'];   
    
    $query1="update gameplay set image='".$i."',description='".$desc."' where id='".$id."'";

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=viewgameplay.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>