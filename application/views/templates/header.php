<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $judul; ?></title>
    <meta name="<?php echo $judul; ?>" content="noindex, follow" />
    <meta name="<?php echo $judul; ?>" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('asset/images/logotitle2.png');?>" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="<?=base_url('asset/css/vendor/bootstrap.min.css');?>" />
    <link rel="stylesheet" href="<?=base_url('asset/css/vendor/icofont.min.css');?>" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="<?=base_url('asset/css/plugins/animate.css');?>">
    <link rel="stylesheet" href="<?=base_url('asset/css/plugins/swiper-bundle.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('asset/css/plugins/nice-select.css');?>">
    <link rel="stylesheet" href="<?=base_url('asset/css/plugins/venobox.min.css');?>" />


    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?=base_url('asset/css/style.css');?>">
    

</head>

<body>

    <main class="main-wrapper">
    
        <!-- .....:::::: Start Header Section :::::.... -->
        <header class="header-section sticky-header d-none d-lg-block">
        <div id="particles-js"></div>
            <div class="header-wrapper">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <!-- Start Header Logo -->
                            <a href="index.html" class="header-logo">
                                <img src="<?=base_url('asset/images/logoheader2.png');?>" alt="">
                            </a>
                            <!-- End Header Logo -->
                        </div>

                        <div class="col">
                            <div class="header-btn-link text-end">
                               <a href="contact.html" class="btn btn-sm btn-outline-one icon-space-left">Hire Me <i class="fas fa-hands-helping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- .....:::::: End Header Section :::::.... -->

        <!-- .....:::::: Start Mobile Header Section :::::.... -->
        <div class="mobile-header d-block d-lg-none">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <div class="mobile-logo">
                            <a href="#"><img style="width:200px;" src="<?=base_url('assets/images/logo/logo.png');?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mobile-action-link text-end">
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu"><i class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .....:::::: Start MobileHeader Section :::::.... -->

        <!--  Start Offcanvas Mobile Menu Section -->
        <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
            <!-- Start Offcanvas Header -->
            <div class="offcanvas-header text-end">
                <button class="offcanvas-close"><i class="icofont-close-line"></i></button>
            </div> <!-- End Offcanvas Header -->
            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-mobile-menu-wrapper">
                <!-- Start Mobile Menu  -->
                <div class="mobile-menu-bottom">
                    <!-- Start Mobile Menu Nav -->
                    <div class="offcanvas-menu">
                        <ul>
                            <li>
                                <a href="index.html"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="#"><span>Services</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="service-list.html">Service List</a></li>
                                    <li><a href="service-details.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Blog</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="blog-list.html">Blog List Full Width</a></li>
                                    <li><a href="blog-list-sidebar-left.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-sidebar-right.html">Blog List Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details Full Width</a></li>
                                    <li><a href="blog-details-sidebar-left.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-sidebar-right.html">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Pages</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="project-list.html">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404-page.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html"><span>Contact</span></a>
                            </li>
                        </ul>
                    </div> <!-- End Mobile Menu Nav -->
                </div> <!-- End Mobile Menu -->