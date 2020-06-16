                     
<?php    include 'db.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travelo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.html">home</a></li>
                                            <li><a href="about.html">About</a></li>
                                           
                                                        <li><a href="promotion.php">promotion</a></li>
                                                        <li><a href="categorie.php">Categorie</a></li>

                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                          <li><a class="active" href="evenement.php">Evenement</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i>26868754</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinations</h3>
                        <p>Pixel perfect design with awesome contents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>

<center>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET">
          <div class="input-group">
            <input name="acin" type="text" class="form-control bg-light border-0 small"placeholder="Where to go?" aria-label="Search"/>

              <div class="input-group-append">

<button name="but8" class="boxed-btn4 " type="submit">
                  Search

                </button>
              </div>

            </div>
          </form>
</center>


            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->


    
    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Filter Result</h3>
                        <div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">

 <form  method="GET">
                                        
                                    <div class="col-lg-12">
                                        <div class="single_select">
                        <input name="date1" type="date" class="form-control "  aria-label="Search" aria-describedby="basic-addon2"/>

                                        </div>
                                    </div> <br>
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                                        <input name="date2" type="date" class="form-control " aria-label="Search" aria-describedby="basic-addon2"/>

                                        </div>
                                    </div>
<br>
 <div class="reset_btn">
                                <button name="tridate" class="boxed-btn4" type="submit">Rechercher</button>
                            </div>

</form>

                                    <div class="col-lg-12">
                                        <div class="range_slider_wrap">
                                           
                                        </div>
                                    </div>
                                </div>


                            </div>

                           
                        </div>
                    </div>
                </div>


                  <div class="col-lg-8">
                    <div class="row">
            <?php
if (!isset($_GET['but8']) and !isset($_GET['tridate']) )
  {   
    $sel = "SELECT * FROM evenement ORDER BY id asc" ;


                       
                        $rs = $conn->query($sel);
                        while($rws = $rs->fetch_assoc()){
            ?>
                <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="reservation.php?id=<?php echo $rws['id'] ?>"> 
                                                                         <img class="thumb" src="img/destination/<?php echo $rws['photo'];?>" ></a>

                                    <a href="reservation.php" class="prise"><?php echo 'Prix : '.$rws['prix'];?></a>
                                </div>
                                <div class="place_info">
                                 <a href="reservation.php"></a><h3 href="reservation.php?id=<?php echo $rws['id'] ?>"><?php echo $rws['destination'];?></h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        
                                        <div class="days">
                                        </div>
                                        <div class="product-text">
                        
                                 <h5 style=""><span > <a> Date de départ: </a>  <?php echo $rws['debut'];?></span></h5>
                                 <h5><span > <a>Date de retour: </a>  <?php echo $rws['fin'];?></span></h5>

                            </a>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <?php }} 
   
if (isset($_GET['but8'])) 
  {   

   if (empty($_GET['acin'])){
   
      $sel = "SELECT * FROM evenement ORDER BY id asc" ;

   }
   else {
   $acin= $_GET['acin'];
          $sel = "SELECT * FROM evenement where destination='$acin' ";}



                       
                        $rs = $conn->query($sel);
                        while($rws = $rs->fetch_assoc()){
            ?>
                <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="reservation.php?id=<?php echo $rws['id'] ?>"> 
                                                                         <img class="thumb" src="img/destination/<?php echo $rws['photo'];?>" ></a>

                                    <a href="reservation.php" class="prise"><?php echo 'Prix : '.$rws['prix'];?></a>
                                </div>
                                <div class="place_info">
                                 <a href="reservation.php"></a><h3 href="reservation.php?id=<?php echo $rws['id'] ?>"><?php echo $rws['destination'];?></h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        
                                        <div class="days">
                                        </div>
                                        <div class="product-text">
                        
                                 <h5 style=""><span > <a> Date de départ: </a>  <?php echo $rws['debut'];?></span></h5>
                                 <h5><span > <a>Date de retour: </a>  <?php echo $rws['fin'];?></span></h5>

                            </a>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <?php }} ?>

<div class="col-lg-8">
                    <div class="row">

<?php
    if (isset($_GET['tridate'])) 
  {   if (empty($_GET['date1']and $_GET['date2'] )){
   
      $query = "SELECT * FROM evenement ORDER BY id asc" ;

   }
   else {
   $date1= $_GET['date1'];
      $date2= $_GET['date2'];
        echo 'Du '.$date1 ; echo '   Au '.$date2;
          $query = "SELECT * FROM evenement where (debut between '$date1' and '$date2') and  (fin between '$date1' and '$date2') ";}



  
                        $rs = $conn->query($query);
                        while($w = $rs->fetch_assoc()){
            ?>
                <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                  <a href="reservation.php?id=<?php echo $w['id'] ?>">
                                     <img class="thumb" src="img/destination/<?php echo $w['photo'];?>" ></a>
                                    <a href="#" class="prise"><?php echo 'Prix : '.$w['prix'];?></a>
                                </div>
                                <div class="place_info">
                                    <a href="reservation.php"><h3 href="reservation.php?id=<?php echo $w['id'] ?>"><?php echo $w['destination'];?></h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        
                                        <div class="days">
                                        </div>
                                        <div class="product-text">
                        
                                 <h5 style=""><span > <a> Date de départ: </a>  <?php echo $w['debut'];?></span></h5>
                                 <h5><span > <a>Date de retour: </a>  <?php echo $w['fin'];?></span></h5>

                            </a>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <?php }} ?>
               
            </div>

                    </div>

 </div>

                    </div>
                    
                        
                      
                    
                </div>
            </div>

        <!-- newletter_area_start  -->
        <div class="newletter_area overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="newsletter_text">
                                    <h4>Subscribe Our Newsletter</h4>
                                    <p>Subscribe newsletter to get offers and about
                                        new places to discover.</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="mail_form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-9 col-md-8">
                                            <div class="newsletter_field">
                                                <input type="email" placeholder="Your mail" >
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="newsletter_btn">
                                                <button class="boxed-btn4 " type="submit" >Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newletter_area_end  -->
    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/1.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/2.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/3.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                <a href="#">+10 367 826 2567</a> <br>
                                <a href="#">contact@carpenter.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">America</a></li>
                                <li><a href="#">India</a></li>
                                <li><a href="#">Switzerland</a></li>
                                <li><a href="#">Italy</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Franch</a></li>
                                <li><a href="#">England</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
    

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-ui.min.js"> </script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/range.js"></script>
        <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
    </script>
    
</body>

</html>