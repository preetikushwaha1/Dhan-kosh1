<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>eBanking &mdash; Dhan-Kosh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url('assets1/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets1/css/jquery-ui.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets1/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets1/css/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets1/css/owl.theme.default.min.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets1/css/jquery.fancybox.min.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets1/css/bootstrap-datepicker.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets1/fonts/flaticon/font/flaticon.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets1/css/aos.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets1/css/style.css');?>">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="#" class="h2 mb-0">DhanKosh<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <!--li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li-->
                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <!--li><a href="#testimonials-section" class="nav-link">Testimonials</a></li-->
                    <!--li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li-->
                  </ul>
                </li>
                
                
                <!--li><a href="#blog-section" class="nav-link">Blog</a></li-->
                <li><a href="#contact-section" class="nav-link">Contact</a></li>

                <li><a href="<?php echo site_url('Login');?>
                " class="nav-link">Login</a></li>
                
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  

