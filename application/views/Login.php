
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <script type="text/javascript">
        site_url_='<?php echo site_url();?>';
        base_url_='<?php echo base_url();?>';
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>eBanking &mdash; Dhan-Kosh</title>

  <!-- Favicons -->
  <link href="<?php echo base_url('assets2/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('assets2/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets2/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url('assets2/lib/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/css/zabuto_calendar.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/lib/gritter/css/jquery.gritter.css');?>" />
  
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets2/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets2/css/style-responsive.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets2/lib/chart-master/Chart.js');?>"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<body>

 <!--header start-->
    <header class="header black-bg">
      <!--div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div-->
      <!--logo start-->
      <a href="<?php echo site_url('Home');?>" class="logo"><b>DHAN<span>KOSH</span></b></a>
      

      <div class="top-menu">

        <ul class="nav pull-right top-menu">
        	<li><a href="<?php echo site_url('Home');?>" class="logout">Home</a></li>
        	<li><a href="<?php echo site_url('Forgot_password/Sign_up');?>" class="logout">Sign up</a></li>
        </ul>
      </div>



    </header>
    <!--header end-->

  <div id="login-page" style="padding-bottom: 105px; padding-top: 60px; padding-right: 500px" >
    <div class="container">
      <form class="form-login" action="<?php echo site_url('Login/admin_login_validation');?>" method="post" name="login_form"
       style="float:right; width:500px;">
        <h2 class="form-login-heading">Admin sign in </h2>
          <div class="login-wrap">
  	            <input type="text" class="form-control" placeholder="User Name"  name="admin_username" id="admin_username"
                 value="<?php echo set_value('admin_username');?>">

                <span class="text-danger"><?php echo form_error('admin_username');?></span>
  	            <br>

  	            <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?php echo set_value('password');?>">
                <span class="text-danger"><?php echo form_error('password');?></span>
  	            <br>

  	            <label class="checkbox "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <input type="checkbox" value="remember-me"> Remember me
    	            <span class="pull-right">
    	               <a data-toggle="modal" href="<?php echo site_url('Forgot_password');?>"> Forgot Password?</a>
    	            </span>
  	            </label>
  	            <br>
  	          <button class="btn btn-theme btn-block" href="index.html" type="submit" value="SIGN IN" name="insert"><i class="fa fa-lock"></i> SIGN IN
              </button><br>
              <?php if($this->session->flashdata('error')) {?>

                  <div class="alert alert-danger">
                    <b><?php echo  $this->session->flashdata('error');?></b>
                  </div>

             <?php }?>
  	          <hr>
  	         
  	          <div class="registration">
  	            Don't have an account yet?<br/>
  	            <a class="" href="<?php echo site_url('Forgot_password/Sign_up');?>">
  	              Create an account
  	              </a>
  	          </div>
          </div>

   	 </form>

     <form class="form-login" action="<?php echo site_url('Login/user_login_validation');?>" method="post" name="login_form" style="width:500px">
        <h2 class="form-login-heading">User Sign in</h2>
          <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Account Number"  name="account_num" id="account_num" 
                value="<?php echo set_value('account_num');?>">
                <span class="text-danger"><?php echo form_error('account_num');?></span>
                <br>
                <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" value="<?php echo set_value('pass');?>">
                <span class="text-danger"><?php echo form_error('pass');?></span>
                <br>
                <label class="checkbox "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <input type="checkbox" value="remember-me"> Remember me
                  <span class="pull-right">
                     <a data-toggle="modal" href="<?php echo site_url('');?>"> Forgot Password?</a>
                  </span>
                </label>
                <br>
              <button class="btn btn-theme btn-block" href="index.html" type="submit" value="SIGN IN" name="insert"><i class="fa fa-lock"></i> SIGN IN
              </button>
              <br>
              <?php if($this->session->flashdata('user_error')) {?>

                  <div class="alert alert-danger">
                    <b><?php echo  $this->session->flashdata('user_error');?></b>
                  </div>

             <?php }?>
              <hr>
             
              <div class="registration">
                Don't have an account yet?<br/>
                <a class="" href="<?php echo site_url('Forgot_password/Sign_up');?>">
                  Create an account
                  </a>
              </div>
          </div>

     </form>
	</div>
</div>

</body>
</html>



  
