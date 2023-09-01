
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">
  <!--  Project Developed by: MayuriK. 
 for any PHP, Codeignitor or Laravel work contact me through www.mayurik.com  -->
 <?php
//session_start();
//error_reporting(0);
include('../constant/connect.php');

?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Image Assets</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Image Assets</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                <div class="row">
<style type="text/css">
	tr{
		font-size: 22px;
	}
	
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}


</style>
<div class="content">
	
	<form action="" method="post" enctype="multipart/form-data">
	<table border=0 width="100%" cellspacing="5" cellpadding="5" style="box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);">

		<tr>
			<th colspan="2"><h3 class="text-primary" style="margin-left: 290px;">Upload Your Image Here &nbsp;&nbsp;&nbsp;&nbsp; <a href="viewimageassets.php">View Gallery</a></h3> </th>
		</tr>
		<tr>
			<th>&nbsp;&nbsp;</th>
		</tr>
        
		<tr>
            <br>
			<td align="right"><br><br>Choose Image Here</td><td><br><br><input type="file" name="img" value=""></td>
		</tr>
		<tr>
			<td colspan="2" align="center" style="text-align: center;"><input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="sb" value="    Upload Now    "></td>
		</td>
		<tr>
			<th>&nbsp;</th>
		</tr>

	

	</table>
	</form>
	<?php
	if(isset($_POST['sb']))
	{
		
		$i = "../img/images/".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], $i);//move file inside folder

		
		include "../constant/connect.php";
		mysqli_query($con,"insert into gallery(image)values('$i')") or die(mysqli_error($con));
		echo "<div style='margin-left: 340px; color:#007BFF; font-size:20px; border-radius:10px;'>Image Uploaded SuccessFully</div>";
	}
	?>
	<br><br>	
</div>
<style>
	body{
	background-color: white;
	margin: 0px;
}
.h{
	color: black;
	font-size: 30px;
	padding: 14px;
}
.mbg{
	padding: 25px;
}
.menu{
	color: black;
	font-family: Century Gothic;
	font-size:15px;
	padding: 10px;
	text-decoration: none;

}
.menu:hover{
	color: white;
}
.content{
	background-color: white;
    font-size: 21px;
    width: 70%;
    margin: 0 auto;
    margin-left: 70px;
	height: 10px;
	position: absolute;


}
.footer{
	color: orange;
	background-color: black;
	font-family: Calibri;
	padding: 23px;

}
.del{
	color: red;
}
tr{
	color: tomato;

}
th{
	color: blue;
	font-size: 1.2em;
    margin-left: 50px;
}
</style>
                </div>     
            </div>

        </div>   
            <!-- /# row -->
            <!-- End PAge Content -->
    <script>
            function myplandetail(str){
                 
                if(str==""){
                    document.getElementById("plandetls").innerHTML = "";
                    return;
                }else{
                    if (window.XMLHttpRequest) {
                 // code for IE7+, Firefox, Chrome, Opera, Safari
                     xmlhttp = new XMLHttpRequest();
                     }
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     document.getElementById("plandetls").innerHTML=this.responseText;
                
                        }
                    };
                    
                     xmlhttp.open("GET","plandetail.php?q="+str,true);
                     xmlhttp.send();    
                }
                
            }
        </script>

<?php include('../constant/layout/footer.php');?>
