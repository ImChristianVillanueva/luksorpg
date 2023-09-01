<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from stagesettings where id='$id'");
header("location:viewstagesettings.php");


?>