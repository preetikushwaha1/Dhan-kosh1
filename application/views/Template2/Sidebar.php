<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>
  <section id="container">
 
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="<?php echo base_url('assets2/img/ui-sam.jpg');?>" class="img-circle" width="80"></a></p>
          <h5 class="centered" style=" font-variant: small-caps; font-size: 20px;"><?php echo $this->session->userdata('user_name');?></h5>

          <li class="mt">
            <a class="active" href="<?php echo site_url('Main');?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user-circle"></i>
              <span>Customer Details</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo site_url('Main/new_customer');?>">Add New Customer</a></li>
              <li><a href="<?php echo site_url('Main/view_customer');?>">View/Edit Customer</a></li>
              <!--li><a href="<?php echo site_url('Main/Edit_delete_customer');?>">Edit/Delete Customer</a></li-->
             
            </ul>
          </li>

          <!--li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-briefcase"></i>
              <span>Account Details</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo site_url('Main/new_account');?>"> Add New Account</a></li>
              <li><a href="<?php echo site_url('Main/view_account');?>">View Account</a></li>
              <li><a href="<?php echo site_url('Main/Edit_delete_account');?>">Edit/Delete Account</a></li>
              
            </ul>
          </li-->

     
           <li>
            <a href="<?php echo site_url('Main/balance');?>">
              <i class="fa fa-money"></i>
              <span>Balance</span>
              </a>
          </li>

          <!--li>
            <a href="<?php echo site_url('Main/fund_transfer');?>">
              <i class="fa fa-money"></i>
              <span>Fund Transfer</span>
              </a>
          </li-->

          <!--li>
            <a href="<?php echo site_url('Main/mini_statement');?>">
              <i class="fa fa-book"></i>
              <span>Mini Statement </span>
              </a>
          </li-->
  
          <!--li class="sub-menu">
            <a href="<?php echo site_url('Main/customized_statement');?>">
              <i class="fa fa-book"></i>
              <span>Customised Statement</span>
              </a>
          </li-->

          <li>
            <a href="<?php echo site_url('Main/news_management');?>">
              <i class="fa fa-file-text"></i>
              <span>News Management </span>
              </a>
          </li>

           <li>
            <a href="<?php echo site_url('Main/news');?>">
              <i class="fa fa-file-text"></i>
              <span>News</span>
              </a>
          </li>

          <li>
            <a href="<?php echo site_url('Main/profile');?>">
              <i class="fa fa-user"></i>
              <span>Profile</span>
              </a>
          </li>


          <li>
            <a href="<?php echo site_url('Main/faq');?>">
              <i class="fa fa-comments-o"></i>
              <span>Faq</span>
              </a>
          </li>

          <li>
            <a href="google_maps.html">
              <i class="fa fa-cogs"></i>
              <span>Change Password</span>
              </a>
          </li>


        </ul>
        <!-- sidebar menu end-->
      </div>
</aside>
    <!--sidebar end-->