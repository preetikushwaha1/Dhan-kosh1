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

    <style media="print">
  .hideblock{
      display:none;
}
</style>
</head>


 <!--header start-->
    <header class="header black-bg hideblock">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DHAN<span>KOSH</span></b></a>
      
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                <li><a class="logout" href="<?php echo site_url('Login/logout');?>">Logout</a></li>
              </ul>
            </div>
  
    </header>
    <!--header end-->

  
