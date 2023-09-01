
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
                    <h3 class="text-primary">Add Stage Settings</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Stage Settings</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                <div class="row">
                
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                <form action="" method="post" enctype="multipart/form-data">                   

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Choose Image</label>
                                                <div class="col-sm-9">
                                                <input type="file" name="img" value="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Description</label>
                                                <div class="col-sm-9">
                                                <input  name="description" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="sb" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                    
                
                                    </form>
                                    <?php
	if(isset($_POST['sb']))
	{
		
		$i = "../img/images/".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], $i);//move file inside folder
        $description = $_POST['description'];
		
		include "../constant/connect.php";
		mysqli_query($con,"insert into stagesettings(image,description)values('$i','$description')") or die(mysqli_error($con));
		echo "<div style='margin-left: 340px; color:#007BFF; font-size:20px; border-radius:10px;'>Image Uploaded SuccessFully</div>";
	}
	?>
                                </div>
                            </div>

                        </div>
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
