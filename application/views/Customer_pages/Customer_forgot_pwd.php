
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
  <title>Dhan_kosh</title>

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
          <li><a href="<?php echo site_url('Login');?>" class="logout">Sign in</a></li>
        </ul>
      </div>



    </header>
    <!--header end-->

  <div id="login-page" style="padding-bottom: 80px; padding-top: 50px;">
    <div class="container">

      <form class="form-login" action="<?php echo site_url('Forgot_password/user_forgot_password_change');?>" method="post">

        <h2 class="form-login-heading">Forgot Password?</h2>
        <div class="login-wrap">

                      <?php if($this->session->flashdata('success')){?>
                      <div class="alert alert-success">      
                        <?php echo $this->session->flashdata('success')?>
                      </div>
                    <?php } ?>
            <br>  
	          <input type="text" class="form-control" placeholder="Account Number" autofocus name="acc_no" id="acc_no">
            <span class="text-danger"><?php echo form_error('acc_no');?></span>
	          <br>
	          <input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password">
              <span class="text-danger"><?php echo form_error('new_password');?></span>
	          <br>
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
              <span class="text-danger"><?php echo form_error('confirm_password');?></span>
	          <br>
	          <button class="btn btn-theme btn-block" href="index.html" type="submit">Reset Password</button>
	       
        </div>

   	 </form>
	</div>
</div>

</body>
</html>



  
