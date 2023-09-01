<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <title>Mata sa Mata : Official Website</title>

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets1/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Responsive Website Travel</title>
    </head>
    <body>
        <style>
  
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

        </style>
        <?php include 'nav.php'; ?>


        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="assets1/img/banner_bgnew.png" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        
                        <h1 class="home__data-title">Mata sa Mata</b></h1>
                        <span class="home__data-subtitle">Mata sa Mata (which translates to "Eye to Eye")<br>
                            offers a unique gaming experience that combines <br>
                            the thrill of exploration, the excitement of combat, 
                            <br>and the lore of Philippine mythology. </span>
                        <a href="#" class="button">Install Now</a>

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== CLIENT LOGO ====================-->
            <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<br><br><br><br>
<div class="container">
   <section class="customer-logos slider">
      <div class="slide"> <img src="assets1/images/client_logo/client_logo_11.png" alt="Image 1"></div>
      <div class="slide"> <img src="assets1/images/client_logo/client_logo_22.png" alt="Image 2"></div>
      <div class="slide"> <img src="assets1/images/client_logo/client_logo_11.png" alt="Image 1"></div>
      <div class="slide"> <img src="assets1/images/client_logo/client_logo_22.png" alt="Image 2"></div>
      <div class="slide"> <img src="assets1/images/client_logo/client_logo_11.png" alt="Image 1"></div>
      <div class="slide"> <img src="assets1/images/client_logo/client_logo_22.png" alt="Image 2"></div>
   </section>
</div>
<script>
    $(document).ready(function() {
  $('.customer-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});

const slider = $(".customer-logos");


slider.on('wheel', (function(e) {

  var slideCount = $(this)[0].slick["slideCount"];
  var currentIndex = $(this).slick("slickCurrentSlide");
  var totalSildeToShow =  $(this)[0].slick.options["slidesToShow"];

  if (e.originalEvent.deltaY < 0) {

    e.preventDefault();
    $(this).slick('slickPrev');

  } else {
    if (slideCount - totalSildeToShow === currentIndex)
      return;
    e.preventDefault();
    $(this).slick('slickNext')
  }
}));
</script>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Learn more about Philippine Mythology!</h2>
                        <p class="about__description">Mata sa Mata is an upcoming 3D MMORPG game that invites 
                            players to immerse themselves in the rich and captivating world of Philippine mythology. 
                            Unlike traditional immersive games, Mata sa Mata offers a unique non-immersive gameplay 
                            experience, allowing players to explore and interact with the mythical realm from a
                            third-person perspective.
                        </p>
                        
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets1/images/about_sigbin.png" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>
            </section>
            

            <!--==================== VIDEO ====================-->
            <section class="video section">
                <h2 class="section__title">Check out our Youtube channel! </h2>

                <div class="video__container container">
                
                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets1/video/mata.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>
            
              <!--==================== ASSETS ====================-->
              <section class="video section">
                <h2 class="section__title">Sneak peak of Assets</h2>

                <div class="gallery-box">
		<div class="container1">
			<div class="tz-gallery">
				<div class="row2">
					
					<?php
							include "connect.php";
							$s = mysqli_query($con,"select * from gallery");
							while($r = mysqli_fetch_array($s))
							{
					?>
						<div class="col-sm-12 col-md-4 col-lg-4">
						
							<a class="lightbox" href="<?php echo "admin/".$r['image']; ?>">
								<img class="img-fluid"  src="<?php echo "admin/".$r['image']; ?>" alt="Gallery Images" style="width: 350px; height: 250px;"
								>

								
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
    <style>
        .gallery-box{
	padding: 70px 0px;
}
.container1 {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.rows {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.tz-gallery{
	margin-top: 30px;
}
.tz-gallery .lightbox img {
    width: 100%;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}
.tz-gallery .lightbox{  
	display: inline-block;
	margin-bottom: 30px;
}
.col-lg-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 23.333333%;
    max-width: 33.333333%;
}

    </style>
            </section>
            

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">Alpha Version</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid" style="margin-left: 150px;">
                        <div class="experience__data">
                            <h2 class="experience__number">-1364</h2>
                            <span class="experience__description">Days</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">15</h2>
                            <span class="experience__description">Hours</span>
                        </div>

                </div>
            </section>

            

            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Choose Your Place</h2>
                    <div class="container">
                        <div class="toggle-btn">
                       
                          <label class="switch" style="margin-left: 480px;" >
                            <input type="checkbox" id="checbox" onclick="check()" ; />
                            <span class="slider1 round"></span>
                          </label>
                      </div>
                  
                      <div class="package-container">
                        <div class="packages">
                          <h2 class="text2">Minimum</h2>
                          <h2 class="text1">Buy Now</h2>
                          <ul class="list">
                            <li class="first">Windows 10 64-Bit</li>
                            <li>Intel I5-2500k(4 Core<br> 3.3ghz) Or AMD Ryzen 3<br> 1200 (4 Core 3.1 GHz)</li>
                            <li>4 GB RAM</li>
                            <li>NVIDIA GTX 960 (4 GB) Or <br>AMD R9 290X (4 GB)</li>
                            <li>DirectX: Version 11</li>
                            <li>15GB Available Space</li>
                          </ul>
                          
                        </div>
                        <div class="packages">
                          <h2 class="text2">Recommended</h2>
                          <h2 class="text1">Buy Now</h2>
                          <ul class="list">
                            <li class="first">Windows 10 64-Bit</li>
                            <li>Intel I5-6600k (4 Core 3.5 GHz) Or AMD Ryzen 5 2400 G (4 Core 3.6 GHz)</li>
                            <li>8 GB RAM</li>
                            <li>NVIDIA GTX 1060 (6 GB) Or AMD RX 570 (4 GB)</li>
                            <li>DirectX: Version 11</li>
                            <li>15GB Available Space</li>
                          </ul>
                   
                        </div>
                        <div class="packages">
                          <h2 class="text2">Full Experience</h2>
                          <h2 class="text1">Buy Now</h2>
                          <ul class="list">
                            <li class="first">Windows 10 64-Bit</li>
                            <li>Intel I9-9900k Or AMD Ryzen 9 3950X</li>
                            <li>16 GB RAM</li>
                            <li>Nvidia RTX 3080 Or AMD RX 6800 XT</li>
                            <li>DirectX: Version 11</li>
                            <li>25GB Available Space</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  
                    <script>
                        function check() {
                            var checkBox = document.getElementById("checbox");
                            var text1 = document.getElementsByClassName("text1");
                            var text2 = document.getElementsByClassName("text2");

                            for (var i = 0; i < text1.length; i++) {
                                if (checkBox.checked == true) {
                                text1[i].style.display = "block";
                                text2[i].style.display = "none";
                                } else if (checkBox.checked == false) {
                                text1[i].style.display = "none";
                                text2[i].style.display = "block";
                                }
                            }
                            }
                            check();
                    </script>
                  
            </section>
            
           

        <!--==================== FOOTER ====================-->
        <footer class="footer section" style="border: 1px solid black; max-width: 100%;">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title"> <a href="#"><img src="assets1/images/logonew.png" alt="" width="330px"></a></h3>
                        <p class="footer__description">"Unleash the Fury, Embrace the Eye for an Eye in Mata sa Mata!"
                        </p>
                        
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__title">Contact Info</h3>
                        <p class="footer__description">Address : P. Paredes St, Sampaloc, Manila, 1015 Metro Manila
                        </p>
                        <p class="footer__description">Phone : +1448027361
                        </p>
                        <p class="footer__description">Email : luksoofficial@gmail.com
                        </p>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Shortcut Links</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Home</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Community</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Assets</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">About</a>
                            </li>   
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2023 All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets1/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets1/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets1/js/main.js"></script>
    </body>
</html>