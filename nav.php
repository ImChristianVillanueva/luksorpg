<header class="header" id="header" style="height: 70px;">
            <nav class="nav container">
                <a href="#" class="nav__logo"> <img src="img/images/logonew.png" alt="logo"></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="home.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="https://www.reddit.com/r/MatasaMataOfficial/" class="nav__link">Community</a>
                        </li>
                        <li class="nav__item dropdown">
                            <a class="nav__link dropdown" href="" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Key Features
                            </a>
                            <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                <a class="nav__link" href="stagesettings.php" style="color:black;" > Stage Settings</a>
                                <a class="nav__link" href="weapons.php" style="color:black;">Weapons</a>
                                <a class="nav__link" href="gameplay.php" style="color:black;">Gameplay</a>
                            </div>
                        </li>
                        <li class="nav__item dropdown">
                            <a class="nav__link dropdown" href="" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Media
                            </a>
                            <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                <a class="nav__link" href="gallery.php" style="color:black;">Assets</a><br>
                                <a class="nav__link" href="blog.php" style="color:black;">Blog</a>
                            </div>
                        </li>
                        <li class="nav__item">
                            <a href="about.php" class="nav__link">About Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="contact.php" class="nav__link">Contact Us</a>
                        </li>

                        
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                        
                        
                    </div>
                    <br>
                   
                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
                <a href="#" class="button">Install</a>
            </nav>
        </header>
        <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
        </style>