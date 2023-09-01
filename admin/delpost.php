<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from posts where id='$id'");
header("location:viewpost.php");


?>