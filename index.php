<?php 
include('includes/dbconnection.php');

session_start();
    //if(!isset($_SESSION['username'])){
       // header('location:includes/login.php');
    //}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Malena Beauty Salon</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style type="text/css">
        .card {
        margin: 0 auto;
        max-width: 100%;
        min-height: 400px;
        overflow: hidden;
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
    }

.card1 {
  background-image: url(assets/images/pkg_hairdressing.jpeg);
}
.card2 {
  background-image: url(assets/images/pkg_hairspa.jpeg);
}
.card3 {
  background-image: url(assets/images/pkg_skinrejuivination.png);
}
.card4 {
  background-image: url(assets/images/pkg_skinexfolitation.jpg);
}
.card5 {
  background-image: url(assets/images/pkg_eventready.jpeg);
}
.card6 {
  background-image: url(assets/images/pkg_bridalairbrush.jpeg);
}

#our-location{
    border:1px solid black;
    border-radius:45px;
    padding: 0px 20px 20px 20px;
    background:tomato !important;
}
    </style>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/malena_black_logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" >Home</a></li><!--class="active"-->
                            <!--<li class="scroll-to-section"><a href="#about">About</a></li>-->
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <!--<li class="scroll-to-section"><a href="#menu">Packages</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Stylists</a></li>-->
                            <li class="submenu">
                                <a href="javascript:;">Services</a>
                                <ul>
                                    <li><a href="service1.php">Hair</a></li>
                                    <li><a href="service2.php">Skin</a></li>
                                    <li><a href="service3.php">Makeup</a></li>
                                    
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li class="scroll-to-section"><a href="includes/register.php">Signup</a></li>
                            <li class="scroll-to-section"><a href="includes/logout.php">Logout</a></li>
                            <li class="scroll-to-section"><a href="#" id="our-location"><?php 
							if(isset($_SESSION['username'])){
								echo"".$_SESSION['username'];
								
							}
			                ?></a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>malena</h4>
                            <h6>BEAUTY SALON</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="book_apt.php">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/new1.jpeg" alt="salon image">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-2.jpg" alt="salon image">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-3.jpg" alt="salon image">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We'll style while you smile!</h2>
                        </div>
                        <p>Look your best, feel even better. Our beauty salon is a place where we offers variety of services for women. Our prime services includes hair cutting & styling, hair spa and treatment, any event & function makeup and makeovers, skin treatments like manicure, pedicure, facial any lot other finest cosmetic services. We have professional stylists for all your beauty needs. <br><br>Our mission is to support clients in all the life stages so that they can age gracefully with timeless sophistication and effortless beauty</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                           <!--<a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>-->
                            <img src="assets/images/about.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Packages</h6>
                        <h2>We offer some of the prime packages</h2>
                        <p> Give your body a time out! We have several pampering packages for you that will vitalize your body and enhance your beauty. 
                        What’s more, they will save you money!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>600</h6></div>
                            <div class='info'>
                              <h1 class='title'>Hair Dressing package</h1>
                              <p class='description'>Includes hair wash, cutting & blow dry</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>800</h6></div>
                            <div class='info'>
                              <h1 class='title'>Hair Spa package</h1>
                              <p class='description'>Includes massage, heat and hair spa with best hair mask</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>1800</h6></div>
                            <div class='info'>
                              <h1 class='title'>body nourishing package</h1>
                              <p class='description'>Includes body massage and moisturization</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>1500</h6></div>
                            <div class='info'>
                              <h1 class='title'>Skin Exfoliation package</h1>
                              <p class='description'>Includes exclusive scrubbing and massage.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>5000</h6></div>
                            <div class='info'>
                              <h1 class='title'>Glamour Touch package</h1>
                              <p class='description'>Includes face wax, facial, eye care and makeup</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6'>
                            <div class="price"><h6>12000</h6></div>
                            <div class='info'>
                              <h1 class='title'>Airbrush Bridal Package</h1>
                              <p class='description'>Includes all exclusive 3D airbrush makeup</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Stylists</h6>
                        <h2>We offer the best services for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets/images/stylist1.jpg" alt="Makeup Artist">
                        </div>
                        <div class="down-content">
                            <h4>Randy Walker</h4>
                            <span>Makeup Artist</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/images/stylist2.jpg" alt="Hair Stylist">
                        </div>
                        <div class="down-content">
                            <h4>David Martin</h4>
                            <span>Hair Stylist</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="assets/images/stylist3.jpg" alt="Skin Specialist">
                        </div>
                        <div class="down-content">
                            <h4>Maria Perkson</h4>
                            <span>Skin Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our salon</h2>
                        </div>
                        <p>Just give a call or hit a mail on our mail provided. You can very conveniently book online appointment in some clicks.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">malena@official.com</a><br><a href="#">malena@beautysalon.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center" style="width: 24rem;">
                    <div class="card-body"><br><br><br>
                        <h3 class="card-title">Book Appointment</h3><br><br>
                        <h6 class="card-text">You Can also Book Appointment easily at comfort of your home in no time.</h6><br><br><br>
                        <a href="book_apt.php" class="btn btn-primary" style="background-color:tomato">Book Appointment</a>
                    </div>
                </div>
                <!--<div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <br><br>
                                <h4>Book Appointment</h4>
                                <h6>You Can also Book Appointment easily at comfort of your home in no time.</h6>
                                <br><br><br><br>
                            </div>
                            
                           
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name="submit" id="form-submit" class="main-button-icon">Book Appointment</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

   
    <!-- ***** Reservation Area Ends ***** -->

  
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><img src="assets/images/malena_white_logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright malena beauty salon
                        
                        <br>BEAUTY & LIFESTYLE</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>