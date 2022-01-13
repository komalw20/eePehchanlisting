<?php  include '(api/proses-api.php)';
     include '(api/library/config.php)';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <!-- Css-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vegas.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="assets/css/ziston-icon.css">
    <link rel="stylesheet" href="assets/css/ziston-new-icons.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

    <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">


        <div class="site-header__header-one-wrap clearfix">

            <div class="header_top_one">
                <div class="header_top_one_container">
                    <div class="header_top_one_inner clearfix">

                        <div class="header_top_one_inner_left float-left">
                            <div class="header_social_1">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header_top_one_inner_right float-right">
                            <div class="header_topmenu_1">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fas fa-heart"></i>Wishlist</a></li>
                                    <li><a href="#"><i class="fas fa-user"></i>Sign in or Register</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <header class="main-nav__header-one">
                <nav class="header-navigation one stricky">
                    <div class="container-box clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left main-nav__left_one float-left">
                            <div class="logo_one">
                                <a href="index.html" class="main-nav__logo">
                                    <img src="assets/images/resources/logo.png" class="main-logo" alt="Awesome Image">
                                </a>
                            </div>
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>

                        <div class="main-nav__main-navigation one float-left">
                            <ul class=" main-nav__navigation-box">
                                <li class="dropdown current">
                                    <a href="index.html">Home</a>
                                        </li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                        <div class="main-nav__right main-nav__right_one float-right">

                            <div class="header_btn_1">
                                <a href="#"><span class="icon-add"></span>Add listings</a>
                            </div>
                            <div class="icon_cart_box">
                                <a href="cart.html">
                                    <span class="icon-shopping-cart"></span>
                                </a>
                            </div>
                            <div class="icon-search-box">
                                <a href="#" class="main-nav__search search-popup__toggler">
                                    <i class="icon-magnifying-glass"></i>
                                </a>
                            </div>


                        </div>

                    </div>
                </nav>
            </header>
        </div>

        <!-- Banner Section One Start -->
        <section class="banner-one">
            <div class="banner-bg-slide"
                data-options='{ "delay": 5000, "slides": [ { "src": "assets/images/main-slider/slide_v1_1.jpg" }, { "src": "assets/images/main-slider/slide_v1_2.jpg" }, { "src": "assets/images/main-slider/slide_v1_1.jpg" } ], "transition": "fade", "timer": false, "align": "top" }'>
            </div><!-- /.banner-bg-slide -->

            <div class="container">
                <div class="content-box">
                    <div class="top-title">
                        <div class="sub-title">Let’s Explore</div>
                        <h1>your amazing city</h1>
                        <p>Find great places to stay, eat, shop, or visit from local experts.</p>
                    </div>
                    <form class="banner_one_form select_one">
                        <ul class="input_box_inner list-unstyled">
                            <li class="input_box">
                                <input type="text" name="listing_name" placeholder="What are you looking for?">
                            </li>
                            <li class="input_box banner_one_select_one">
                                <select class="selectpicker" data-width="100%">
                                    <option selected="selected">Location</option>
                                    <option>Default Sorting 1</option>
                                    <option>Default Sorting 2</option>
                                    <option>Default Sorting 3</option>
                                    <option>Default Sorting 4</option>
                                </select>
                            </li>
                            <li class="input_box banner_one_select_two">
                                <select class="selectpicker" data-width="100%">
                                    <option selected="selected">All catgories</option>
                                    <option>Default Sorting 1</option>
                                    <option>Default Sorting 2</option>
                                    <option>Default Sorting 3</option>
                                    <option>Default Sorting 4</option>
                                </select>
                            </li>
                        </ul>
                        <div class="banner_one_form_btn">
                            <button class="thm-btn" type="submit"><span
                                    class="icon-magnifying-glass"></span>Search</button>
                        </div>
                    </form>
                </div>
                <div class="banner_one_bottom">
                    <div class="banner_one_bottom_bg"
                        style="background-image: url(assets/images/shapes/banner-1-shape-1.png)">
                    </div>
                    <p>Or browse the selected categories</p>
                </div>
            </div>
        </section>

        <!-- Categories One Start -->
        <section class="categories_one">
            <div class="categories_one_shape wow slideInLeft animated" data-wow-delay="600ms"
                style="background-image: url(assets/images/shapes/map-1.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="categories_one_carousel owl-theme owl-carousel">
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cutlery"></span>
                                </div>
                                <h4>Restuarant</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cocktail"></span>
                                </div>
                                <h4>Nightlife</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-health"></span>
                                </div>
                                <h4>Fitness</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-skincare"></span>
                                </div>
                                <h4>Beauty</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-shop"></span>
                                </div>
                                <h4>Shopping</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-car"></span>
                                </div>
                                <h4>Traveling</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cutlery"></span>
                                </div>
                                <h4>Restuarant</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cocktail"></span>
                                </div>
                                <h4>Nightlife</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-health"></span>
                                </div>
                                <h4>Fitness</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-skincare"></span>
                                </div>
                                <h4>Beauty</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-shop"></span>
                                </div>
                                <h4>Shopping</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-car"></span>
                                </div>
                                <h4>Traveling</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<h3>=================================================================</h3>

            <section class="latest_listings">
                 <div class="block-title text-center">
                    <h4>Handpicked places</h4>
                    <h2>Latest Listings</h2>
                    <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
                </div>
                <div class="container" id="mysection">
                </div>
            </section>
<h3>=================================================================</h3>
 


     




 
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site_footer_shape-1" style="background-image: url(assets/images/resources/footer-shape-1.png)">
            </div>
            <div class="site_footer_map" style="background-image: url(assets/images/resources/footer-map.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__logo">
                                <a href="#"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>Lorem ipsum dolor sit amet, consect etur adi pisicing elit sed do eiusmod tempor
                                    incididunt ut labore.</p>
                            </div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_icon">
                                    <span class="icon-calling"></span>
                                </div>
                                <div class="footer_contact_number">
                                    <p>Phone</p>
                                    <h4><a href="tel:+123456789">92 666 888 0000</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__explore wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__title">
                                <h3>Explore</h3>
                            </div>
                            <ul class="footer-widget__explore-list list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#"> My Account</a></li>
                                <li><a href="#">My Listings</a></li>
                                <li><a href="#">Pricing Packages</a></li>
                                <li><a href="#">User Dashboard</a></li>
                                <li><a href="#">Bookmarks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__categories wow fadeInUp"
                            data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="footer-widget__categories_list list-unstyled">
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Shopping</a></li>
                                <li><a href="#">Beauty</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Hospitals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__newsletter wow fadeInUp"
                            data-wow-delay="400ms">
                            <div class="footer-widget__title">
                                <h3>Newsletter</h3>
                            </div>
                            <ul class="footer-widget_newsletter_address list-unstyled">
                                <li>88 Broklyn Golden Street, New York. USA</li>
                                <li><a href="mailto:needhelp@ziston.com">needhelp@ziston.com</a></li>
                            </ul>
                            <form>
                                <div class="footer_input-box">
                                    <input type="Email" placeholder="Enter email address">
                                    <button type="submit" class="button"><i
                                            class="fas fa-paper-plane"></i>Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="site-footer_bottom">
            <div class="container">
                <div class="site-footer_bottom_copyright">
                    <p>© Copyright 2020 by <a href="#">Layerdrops.com</a></p>
                </div>
                <div class="site-footer__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>





    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">
                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="assets/images/shapes/close-1-1.png" alt=""></a>
            </div><!-- /.side-menu__top -->

            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>

            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

            <div class="side-menu__content">
                <p><a href="mailto:needhelp@tripo.com">needhelp@ziston.com</a> <br> <a href="tel:888-999-0000">888 999
                        0000</a></p>
                <div class="side-menu__social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/typed-2.0.11.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/appear.js"></script>


    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>

<script>
  $(document).ready(function(){
           
           $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ePehchanlisting/api/proses-api.php',
                    contentType: "application/json",
                    data: JSON.stringify({ 
                        "custom_type":"getdata"
                    }),
                    success: function(msg){
                       // alert(msg);
                        console.log(msg.result);
                        console.log(msg.result[0].email);
                        console.log(msg.result[0].email);
                        console.log(msg.result[0].id);
                        console.log(msg.result[0].id);
                          //write for loop here to fetch data 


                            console.log("length"+msg.result.length);
                        for (let i = 0; i <=msg.result.length; i++) {
                            $('#mydata').append('<p>'+msg.result[i].card_id+'</p>');
                             $('#mydata').append('<p>'+msg.result[i].email+'</p>');
                             $('#mydata').append('<p>'+msg.result[i].d_comp_name+'</p>');
                            $('#mydata').append('<p>'+msg.result[i].d_about_us+'</p>');
                              $('#mydata').append('<p>'+msg.result[i].password+'</p>');

                        $('#mysection').append('<div class="latest_listings_single"><div class="row justify-content-md-center"><div class="latest_listings_image"><img src="assets/images/resources/latest-listings-img-1.jpg" alt=""><div class="open"><p>Open</p> </div></div>                        <br> '+msg.result[i].card_id+" <br> "+msg.result[i].email+" <br> "+msg.result[i].d_comp_name+ " <br> "+msg.result[i].d_about_us+
                            " <br> "+msg.result[i].password+ " <br> "+msg.result[i].d_title+  " <br> "+msg.result[i].d_f_name+ " <br> "+msg.result[i].category_business+ " <br> "+msg.result[i].d_address+  " <br> "+msg.result[i].d_css+  " <br> "+msg.result[i].ip+  '  <br><br> <br> <br></div> </div>');

                            }




                          //  console.log("length"+msg.result.length);
                 /*      for (var j = 1; j <=msg.result.length; j++) {
                            $('#info').append('<p>'+msg.result[j].card_id+'</p>');
                             $('#info').append('<p>'+msg.result[j].email+'</p>');
                             $('#info').append('<p>'+msg.result[j].d_comp_name+'</p>');
                           $('#info').append('<p>'+msg.result[j].d_about_us+'</p>');
                            $('#info').append('<p>'+msg.result[j].password+'</p>');

                            $('#myide').append('<div class="latest_listings_single"><div class="latest_listings_image"><img src="assets/images/resources/latest-listings-img-1.jpg" alt=""><div class="open"><p>Open</p>    </div> ');

                           




                            
                      } */

                      
                       
                    }
                });
           
           
        });
</script>


</body>

</html>