<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from weapon where id='$id'");
header("location:viewweapons.php");


?>