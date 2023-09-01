
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
include_once('../constant/init.php');
if(isset($_POST['name'])){
    $name = trim($_POST['name']);
    
    if(empty($name)){
        $error = 'You must submit the category name';
    }
    else if(category_exists('name',$name) == true){ 
        $error = 'That category already exists';
    } else if(strlen($name)> 24){
        $error = 'The category name only be up to 24 characters only';
    }

    if(!isset($error)){
        $save = add_category($name);
          header("location: addcategory.php");
    }
}

?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Category</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                <div class="row">
 <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
					<header class="entry-header">
	     <?php if(isset($error)){
            echo $error;
            } ?>
						<h2 class="entry-title">
							<h2 style="text-alig: center; margin-left: 500px;">Add Category</h2>
						</h2> 				 
					
						<div class="entry-meta">
		<form action='' method='post'>
        <label for='name'  style="text-alig: center; margin-left: 450px;">Name </label>
        <input type='text' name='name' />
        <br>
        <input type='submit' value='Add Category' class="btn btn-primary btn-flat m-b-30 m-t-30" style="text-alig: center; margin-left: 500px; />
		</form>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><!--insert here--></p>
					</div> 


				</article> <!-- end entry -->

   		</div> <!-- end main -->

                </div>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="../js1/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="../js1/jquery-migrate-1.2.1.min.js"></script>  
   <script src="../js1/main.js"></script>
<?php include('../constant/layout/footer.php');?>
