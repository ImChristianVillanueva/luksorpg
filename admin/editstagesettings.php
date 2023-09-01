
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
<?php
        $id=$_GET['id'];
        //echo $id;exit;
        $sql="Select * from stagesettings  Where id='".$_GET['id']."'";
        $res=mysqli_query($con, $sql);
        //echo $sql;exit;
                     if($res){
                                $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                                //print_r($row);exit;
                
                              }
                        
        ?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Stage Settings</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Stage Settings</li>
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

                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="updatestagesettings.php" id="form1" name="form1">

                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">ID</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="id" id="id" readonly value='<?php echo $row['id'] ?>' class="form-control">

                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Image</label>
                                                <div class="col-sm-9">
                                                 <input name="img" id="img" type="file"  value='<?php echo $row['image'] ?>' class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Description</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="description" id="description"  value='<?php echo $row['description'] ?>' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               
                <!-- /# row -->

                <!-- End PAge Content -->
    

<?php include('../constant/layout/footer.php');?>

