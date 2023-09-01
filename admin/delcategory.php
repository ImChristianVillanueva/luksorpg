<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from categories where id='$id'");
header("location:viewcategory.php");


?>