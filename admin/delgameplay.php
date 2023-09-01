<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from gamepaly where id='$id'");
header("location:viewgameplay.php");


?>