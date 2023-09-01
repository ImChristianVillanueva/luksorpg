<?php
include_once('constant/init.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
$posts = get_posts((isset($_GET['id']))? $_GET['id'] : null); 
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/images/favicon1.png" type="image/png">
        <title>Mata sa Mata : Official Website</title>
        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
       
	<link rel="stylesheet" href="assets1/css/layout.css">  
	<link rel="stylesheet" href="assets1/css/media-queries.css"> 

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets1/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets1/css/styles.css">

       
        
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


        <section class="breadcrumb breadcrumb_bg" style="background-image: url('assets1/images/breadcrumb.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">   
                            <div class="breadcrumb_iner_item">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- breadcrumb start-->


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

        <!--::client logo part end::-->
		<div id="content-wrap">

   	<div class="row1">

   		      <!--==================== ABOUT ====================-->
                 <section class="about section" id="about">
                <div class="about__container container grid" style="margin-top: -50px; border-top: 1px dotted black; padding: 50px 0;">
                    <div class="about__data">
                        <p class="about__description">Meet Joseph Ross R. Que, a driven
                             FEU Tech student pursuing BSIT-AGD. With skills in leadership,
                              system design, architecture, and business analysis, Joseph is 
                              dedicated to making a positive impact. Passionate about culture, 
                              he aims to contribute through Mata sa Mata, combining his expertise and 
                              commitment to showcasing the richness of Philippine heritage. 
                              Join Joseph on this extraordinary journey as we celebrate our cultural 
                              identity through the immersive world of Mata sa Mata.</p>
                        
                    </div>

                    <div class="about__img" style="margin-top: -50px;">
                        <div class="about__img-overlay">
                        <h3 class="mb-30">Verde, Khale Archoette P.</h3>
                            <img src="img/elements/deleon1.jpg" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>
                
                <div class="about__container container grid" style="margin-top: -50px; border-top: 1px dotted black; padding: 50px 0;">
                <div class="about__img" style="margin-top: -50px;">
                        <div class="about__img-overlay">
                        <h3 class="mb-30">De Leon, Jervil Angelo D.</h3>
                            <img src="img/elements/deleon1.jpg" alt="" class="about__img-one">
                        </div>
                    </div>
                    <div class="about__data">
                        <p class="about__description">Meet Jervil Angelo D. De Leon, an avid gamer and dedicated advocate of Philippine culture. As a student at FEU Tech pursuing a degree in BSIT-AGD, Jervil is not only a skilled team programmer but also a talented graphic artist and web designer. With a deep passion for gaming that has fueled his creativity and love for immersive experiences, Jervil brings his expertise and enthusiasm to the world of Mata sa Mata. Inspired by his unwavering love for our country, Jervil is eager to contribute to this incredible community where gaming and Philippine mythology intertwine.</p>
                        
                    </div>
                </div>
                <div class="about__container container grid" style="margin-top: -50px; border-top: 1px dotted black; padding: 50px 0;">
                    <div class="about__data">
                        <p class="about__description">Meet Shem Hong, a talented professional with expertise as a System Support Specialist and Autodesk 3D Maya Designer. With a keen eye for detail and a passion for technological advancements, Shem brings invaluable skills to the Mata sa Mata community. Whether troubleshooting technical issues or crafting stunning visual experiences, Shem's dedication and proficiency elevate the gaming experience for all.</p>
                        
                    </div>

                    <div class="about__img" style="margin-top: -50px;">
                        <div class="about__img-overlay">
                        <h3 class="mb-30">Hong, Shem R.</h3>
                            <img src="img/elements/deleon1.jpg" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>
                
                <div class="about__container container grid" style="margin-top: -50px; border-top: 1px dotted black; padding: 50px 0;">
                <div class="about__img" style="margin-top: -50px;">
                        <div class="about__img-overlay">
                        <h3 class="mb-30">Verde, Khale Archoette P.</h3>
                            <img src="img/elements/deleon1.jpg" alt="" class="about__img-one">
                        </div>
                    </div>
                    <div class="about__data">
                        <p class="about__description">Meet Verde, Khale Archoette P., a skilled individual experienced in Autodesk Maya 3D design and animation. With a background in software engineering, Verde combines artistic creativity with technical expertise. Join Verde on the exciting journey of Mata sa Mata as we explore the captivating realm of Philippine mythology through immersive visuals and engaging gameplay.</p>
                    </div>
                </div>
                
                <div class="about__container container grid" style="margin-top: -50px; border-bottom: 1px dotted black; border-top: 1px dotted black; padding: 50px 0;">
                    <div class="about__data">
                        <p class="about__description">Meet Luwis Marc Chua, our dedicated Research Documentation Editor and Spokesperson. With his keen eye for detail and exceptional communication skills, Luwis ensures the integrity of our game's lore and serves as the voice of Mata sa Mata. Join us as we appreciate Luwis's contributions in keeping our community informed and connected on this thrilling journey.</p>
                    </div>

                    <div class="about__img" style="margin-top: -50px;">
                        <div class="about__img-overlay">
                        <h3 class="mb-30">Chua, Luwis Marc</h3>
                            <img src="img/elements/deleon1.jpg" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>

                <div class="section-top-border">
                                    <h3 class="mb-30">Hi KaLukso!</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <blockquote class="generic-blockquote">
                                                Welcome to Lukso, where Philippine culture comes to life! As a team of passionate students from FEU Institute of Technology, specializing in Animation and Game Development, we invite you to explore Mata sa Mata. Immerse yourself in this 3D MMORPG Non-Immersive Game, as we showcase the enchanting world of Philippine Mythology. Join us on this remarkable journey to rediscover our cultural heritage and embark on unforgettable adventures. Get ready to hop into a world where tradition meets technology. Let's celebrate our rich culture together!
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                
            </section>
   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   <style>
    
    .generic-blockquote {
    padding: 30px 50px 30px 30px;
    background: #f9f9ff;
    border-left: 2px solid #ff0000;
}
.section-top-border {
    padding: 50px 0;
    border-top: 1px dotted #eee;
}
.mb-30 {
    margin-bottom: 30px;
}
   </style>
   
           

        <!--==================== FOOTER ====================-->
        <?php include 'footer.php'; ?>

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
        <script src="assets1/js/modernizr.js"></script>
    </body>
</html>