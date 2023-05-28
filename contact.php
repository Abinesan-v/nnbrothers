<?php 

include 'header.php';

?> 
 
<body>
        <!-- Page Preloder -->
        <div id="preloder">
         <div class="loader"></div>
        </div>

          

    <!-- Humberger Menu Begin -->
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            <a href="#"><img src="img/f-logo.png" alt=""></a>
        </div>
        <div class="hw-menu mobile-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us </a>
                   
                </li>
                <li><a href="services.php">Services </a>
                  
                </li>
                <li><a href="contact.php">Contact </a>
                   
                </li>
               
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="hw-copyright">
            Copyright © 2019 Colorlib Inc. All rights reserved
        </div>
        <div class="hw-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="hw-insta-media">
            <div class="section-title">
                <h5>Instagram</h5>
            </div>
            <div class="insta-pic">
                <img src="img/instagram/ip-1.jpg" alt="">
                <img src="img/instagram/ip-2.jpg" alt="">
                <img src="img/instagram/ip-3.jpg" alt="">
                <img src="img/instagram/ip-4.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Humberger Menu End -->
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="fa fa-sun-o"></i> <span>20<sup>c</sup></span> London</li>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> Login / Sign up
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="ht-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="nav-search search-switch">
                    <i class="fa fa-search"></i>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li><a href="index.php"><span>Home</span></a></li>
                      
                        <li><a href="aboutus.php"><span>About Us </a></li>
                        <li><a href="services.php"><span>Services </span></a></li>
                        <li><a href="contact.php"><span>Contact </span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

     <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg spad" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h3>Contact us</h3>
                        <div class="bt-option">
                            <a href="./home.html">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
        <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-text">
                        <div class="contact-title">
                            <h3>Contact us</h3>
                            <p>My experience with Realy is absolutely positive. The themes are beautifully<br />
                                designed and well documented. Realy theme provides quick support.</p>
                        </div>
                        <div class="contact-form">
                            <div class="dt-leave-comment">
                                <form action="#">
                                    <div class="input-list">
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="Email">
                                        <input type="text" placeholder="Website">
                                    </div>
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <?php

include 'footer.php';

?>


<?php

include 'search.php';

?>

<?php

include 'script.php';

?>

</html>