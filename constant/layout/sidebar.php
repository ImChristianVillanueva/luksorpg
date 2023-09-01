 <?php 
 include('../constant/connect.php');
  

 ?>
       <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                        <li><a href="profile.php" aria-expanded="false"><i class="fa fa-folder"></i><span class="hide-menu">Profile</span></a></li>

                        <button class="dropdown-btn" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu"> Gallery Assets</span> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                            <li><a href="addimageassets.php">Add Images</a></li>
                                <li><a href="viewimageassets.php">View Gallery</a></li>
                            </div>
                        <button class="dropdown-btn" aria-expanded="false"><i class="fa fa-gun"></i><span class="hide-menu"> Stage Settings</span> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                            <li><a href="addstagesettings.php">Add Post</a></li>
                                <li><a href="viewstagesettings.php">Manage Stage Settings</a></li>
                            
                            </div>
                        <button class="dropdown-btn" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu"> Weapons</span> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                            <li><a href="addweapons.php">Add Post</a></li>
                                <li><a href="viewweapons.php">Manage Weapons</a></li>
                            
                            </div>
                        
                        <button class="dropdown-btn" aria-expanded="false"><i class="fa fa-gamepad"></i><span class="hide-menu"> Gameplay</span> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                            <li><a href="addgameplay.php">Add Post</a></li>
                                <li><a href="viewgameplay.php">Manage Gameplay</a></li>
                            </div>
                        <button class="dropdown-btn" aria-expanded="false"><i class="fa fa-bullhorn"></i><span class="hide-menu"> Blog Category</span> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <li><a href="addcategory.php" >Add Category</a></li>
                                <li><a href="viewcategory.php">Manage Category</a></li>
                            </div>
                        <button class="dropdown-btn"><i class="fa fa-bullhorn"></i><span class="hide-menu"> Blog Post</span> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <li><a href="add_post.php">Add Post</a></li>
                                <li><a href="viewpost.php">Manage Post</a></li>
                            </div>     
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <style>
.sidenav {
  height: 120%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 10px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #a9bac3;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  height: 40px;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
  background: #5d4ac8 !important;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 10px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  color: white;
  
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  padding: 9px 18px;
    width: 50px;
    
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
  
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        </style>
<script>
    //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>