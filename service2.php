<!--Services 2 [skin]-->
<?php 
include("includes/dbconnection.php");
include("includes/header.php");
?>
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

    </head>


 <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Malena</h6>
                        <h2>Skin Care Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><!--img src="assets/images/tab-icon-01.png" alt="">-->Body Care</a></li>
                                          <li><a href='#tabs-2'><!--img src="assets/images/tab-icon-02.png" alt="">-->Face Care</a></a></li>
                                          <li><a href='#tabs-3'><!--img src="assets/images/tab-icon-03.png" alt="">-->Skin Treatments</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>

                                <article id='tabs-1'>
                                    <div class="row">

                                    <?php
							            $ret=mysqli_query($con,"select *from  tblskinservices where Category='Body Care'");
							            $cnt=1;
                                        $path="images/";
							            while ($row=mysqli_fetch_array($ret)) {

								    ?>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <div class="tab-item">
                                                    <!--<img src="assets/images/tab-item-04.png" alt="">-->
                                                    <img src="<?php echo $path.$row['Image'];?>" height="100" width="100" alt="img"/>
                                                    <h4><?php  echo $row['ServiceName'];?></h4>
                                                    <p><?php  echo $row['Description'];?></p>
                                                        <div class="price">
                                                            <h6><?php  echo $row['Cost'];?></h6>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
								            $cnt=$cnt+1;
							            }?>


                                        <!--<div class="col-lg-6">
                                            <div class="">
                                                <div class="tab-item">
                                                    <img src="assets/images/tab-item-04.png" alt="">
                                                    <h4>Facial</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="">
                                                <div class="tab-item">
                                                    <img src="assets/images/tab-item-04.png" alt="">
                                                    <h4>Facial</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>-->

                                    </div>
                                </article>  



                                <article id='tabs-2'>
                                    <div class="row">
                                    <?php
							            $ret=mysqli_query($con,"select *from  tblskinservices where Category='Face Care'");
							            $cnt=1;
                                        $path="images/";
							            while ($row=mysqli_fetch_array($ret)) {

								    ?>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <div class="tab-item">
                                                    <!--<img src="assets/images/tab-item-04.png" alt="">-->
                                                    <img src="<?php echo $path.$row['Image'];?>" height="100" width="100" alt="img"/>
                                                    <h4><?php  echo $row['ServiceName'];?></h4>
                                                    <p><?php  echo $row['Description'];?></p>
                                                        <div class="price">
                                                            <h6><?php  echo $row['Cost'];?></h6>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
								            $cnt=$cnt+1;
							            }?>


                                        
                                    </div>
                                </article>  



                                <article id='tabs-3'>
                                    <div class="row">
                                    <?php
							            $ret=mysqli_query($con,"select *from  tblskinservices where Category='Skin Treatments'");
							            $cnt=1;
                                        $path="images/";
							            while ($row=mysqli_fetch_array($ret)) {

								    ?>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <div class="tab-item">
                                                    <!--<img src="assets/images/tab-item-04.png" alt="">-->
                                                    <img src="<?php echo $path.$row['Image'];?>" height="100" width="100" alt="img"/>
                                                    <h4><?php  echo $row['ServiceName'];?></h4>
                                                    <p><?php  echo $row['Description'];?></p>
                                                        <div class="price">
                                                            <h6><?php  echo $row['Cost'];?></h6>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
								            $cnt=$cnt+1;
							            }?>
                                    </div>
                                </article>   

                                
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 

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
    </html>
    <?php
        include("includes/footer.php"); 
    ?>
    
