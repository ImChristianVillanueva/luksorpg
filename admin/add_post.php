
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

if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
    
    if(empty($title)){
     $errors[] = 'You need to supply a title';
    }
    else if(strlen($title)>255){
     $errors[] = 'The title can not be longer than 255 characters';   
    }
    
    if(empty($contents)){
     $errors[] = 'You need to supply some text';   
    }
    if(!category_exists('id',$_POST['category'])){
    $errors[] = 'That category does not exists';   
    }
    
    if(empty($errors)){
        add_post($title,$contents,$_POST['category']);    
        header("Location:about.php?id={$id}");
     
    }
}
?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Post</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Post</li>
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
       <div class="col-lg-8" style="    margin-left: 10%;">
       <div id="main" class="eight columns">

<article class="entry">
     <header class="entry-header">
<?php
if(isset($errors) && !empty($errors)){
echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
}
?>
         <h2 class="entry-title" >
             <h2 style="margin-right: -500px; margin-left: 350px;">Add Post</h2>
         </h2> 				 
     
         <div class="entry-meta" style="margin-left: 350px;">
                     <form action='' method='post'>

<div>
<label for='title'>Title</label>
<input type='text' name='title' value='<?php if(isset($_POST['title'])) echo $_POST['title']; ?>' />
</div>
<div>
<label for='contents'>Content</label>
<textarea name='contents' cols=20 rows=10><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
</div>
<div>
<label for='category'>Category</label>
<select name='category'>
<?php
foreach(get_categories() as $category){
?>
<option value='<?php echo $category['id'] ?>'><?php echo $category['name'] ?></option>
<?php
}
?>
</select>
</div>
<button type='submit' value='Add Post' class="btn btn-primary btn-flat m-b-30 m-t-30">Add Post</button>
                      
</form>
         </div> 
      
     </header> 

     
     <div class="entry-content">
         <p><!--insert here--></p>
     </div> 


 </article> <!-- end entry -->


                        </div>

   		
   		</div> <!-- end main -->

                </div>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="../js1/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="../js1/jquery-migrate-1.2.1.min.js"></script>  
   <script src="../js1/main.js"></script>
<?php include('../constant/layout/footer.php');?>
