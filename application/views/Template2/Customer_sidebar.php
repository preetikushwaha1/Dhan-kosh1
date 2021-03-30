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
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets2/img/ui-sam.jpg');?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"style=" font-variant: small-caps; font-size: 20px;">Acc no-<?php echo $this->session->userdata('account_number');?></h5>

          <li class="mt">
            <a class="active" href="<?php echo site_url('Main_customer');?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="<?php echo site_url('Main_customer/view_customer');?>">
              <i class="fa fa-user-circle"></i>
              <span>Customer Details</span>
              </a>
            <!--ul class="sub">
              <li><a href="<?php //echo site_url('Main/new_customer');?>">Add New Customer</a></li>
              <li><a href="<?php //echo site_url('Main_customer/view_customer');?>">View Customer</a></li>
              <li><a href="<?php e//cho site_url('Main_customer/Edit_delete_customer');?>">Edit/Delete Customer</a></li>
             
            </ul-->
          </li>

          <li class="sub-menu">
            <a href="<?php echo site_url('Main_customer/view_account');?>">
              <i class="fa fa-briefcase"></i>
              <span>Account Details</span>
              </a>
            <!--ul class="sub">
              <li><a href="<?php echo site_url('Main/new_account');?>"> Add New Account</a></li>
              <li><a href="<?php echo site_url('Main_customer/view_account');?>">View Account</a></li>
              <li><a href="<?php echo site_url('Main_customer/Edit_delete_account');?>">Edit/Delete Account</a></li>
              
            </ul-->
          </li>

           <li>
            <a href="<?php echo site_url('Main_customer/balance');?>">
              <i class="fa fa-money"></i>
              <span>Balance</span>
              </a>
          </li>

          <li>
            <a href="<?php echo site_url('Main_customer/fund_transfer');?>">
              <i class="fa fa-money"></i>
              <span>Fund Transfer</span>
              </a>
          </li>

          <li>
            <a href="<?php echo site_url('Main_customer/mini_statement');?>">
              <i class="fa fa-book"></i>
              <span>Mini Statement </span>
              </a>
          </li>
  
          <li class="sub-menu">
            <a href="<?php echo site_url('Main_customer/customized_statement');?>">
              <i class="fa fa-book"></i>
              <span>Customised Statement</span>
              </a>
          </li>

          <!--li>
            <a href="<?php echo site_url('Main/news_management');?>">
              <i class="fa fa-file-text"></i>
              <span>News Management </span>
              </a>
          </li-->

           <li>
            <a href="<?php echo site_url('Main_customer/view_news');?>">
              <i class="fa fa-file-text"></i>
              <span>News</span>
              </a>
          </li>

          <li>
            <a href="<?php echo site_url('Main_customer/profile');?>">
              <i class="fa fa-user"></i>
              <span>Profile</span>
              </a>
          </li>


          <li>
            <a href="<?php echo site_url('Main_customer/faq');?>">
              <i class="fa fa-comments-o"></i>
              <span>Faq</span>
              </a>
          </li>

          <li>
            <a href="<?php echo site_url('Customer_change_pwd');?>">
              <i class="fa fa-cogs"></i>
              <span>Change Password</span>
              </a>
          </li>


        </ul>
        <!-- sidebar menu end-->
      </div>
</aside>
    <!--sidebar end-->