<?php
include_once('constant/init.php');
$posts = get_posts(null,$_GET['id']);
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


        <section class="breadcrumb breadcrumb_bg" style="background-image: url('assets/images/breadcrumb.png');">
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

    <div id="main" class="eight columns1">

        <article class="entry">
             <header class="entry-header">
 <?php
foreach($posts as $post){

?>
                 <h2 class="entry-title">
                     <h2>Category</h2><br/>
                 </h2> 				 
             
                 <div class="entry-meta">
  <h2><a href='blog.php?id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></a></h2>
<p>
 Posted on <?php echo date('d-m-y h:i:s',strtotime($post['date_posted'])); ?>
 In <a href='category.php?id=<?php echo $post['category_id']; ?>' ><?php echo $post['name']; ?></a>
</p>
<div><?php echo nl2br($post['contents']); ?></div>
<menu>
 <ul>
     <li></li>
     <li></li>
 </ul>
</menu>
                 </div> 
              
             </header> 

             
             <div class="entry-content">
                 <p><!--insert here--></p>
             </div> 

<?php   
}
?>
         </article> <!-- end entry -->

    </div> <!-- end main -->

    <div id="sidebar" class="four columns">

        <div class="widget widget_search">
           <h3>Search</h3> 
           <form action="#">

              <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
              <input type="submit" value="" class="submit-search">

           </form>
        </div>

        <div class="widget widget_categories group">
            <h3>Categories.</h3> 
            <?php
foreach(get_categories() as $category){
?>
<p><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a>
<?php  
}
?>
         </div>

         <div class="widget widget_text group">
             <h3>Daily Quote of the Day</h3>
            <p>What is success?</p><br/>
         <p>"Success is not final; failure is not fatal: It is the courage to continue that counts." - Winston S. Churchill</p>

        </div>
        
    </div> <!-- end sidebar -->

</div> <!-- end row -->

</div> <!-- end content-wrap -->

           

        <!--==================== FOOTER ====================-->
       

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