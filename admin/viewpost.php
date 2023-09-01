<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 <?php
include_once('../constant/init.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
$posts = get_posts((isset($_GET['id']))? $_GET['id'] : null); 
?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Manage Post</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Post</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add_post.php"><button class="btn btn-primary">Add Post</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
          <th>ID</th>
          <th>Category ID</th>
          <th>Title</th>
          <th>Contents</th>
          <th>Date Posted</th>
          <th>Action</th>
        </tr>
      </thead>    
        <tbody>
          <?php
          $query  = "select * from posts";
          //echo $query;
          $result = mysqli_query($con, $query);

          if (mysqli_affected_rows($con) != 0) {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  $msgid = $row['pid'];
                ?>
                  
                  <tr>
                     <td><?php echo$row ['id']; ?></td>
                     <td><?php echo$row ['cat_id']; ?></td>
                     <td><?php echo$row ['title']; ?></td>   
                     <td><?php echo$row ['contents']; ?></td>
                     <td><?php echo$row ['date_posted']; ?></td>    
                 <td>
                  <a href="delpost.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this post?')"><i class="fa fa-trash" style="font-size: 20px;"></i></button></a></td></tr>
                  
              <?php 
              $sno++; 
              $msgid = 0;
              }
              
          }

          ?>  

        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('../constant/layout/footer.php');?>
  <!--  This Project Developed by: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me through https://www.mayurik.com  -->

