<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_table.css');?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets2/lib/advanced-datatable/css/DT_bootstrap.css');?>" />
</head>


<body>
  <section id="container">
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><!--i class="fa fa-angle-right"></i-->News Management</h3>
        <div class="row mb">
          <!-- page start-->
           <div class="form-panel">
          
              <form class="form-horizontal style-form" method="post" action="<?php echo site_url('Main/news_management_form_validation');?>">

                 <?php if($this->session->flashdata('message')){?>
                      <div class="alert alert-success">      
                        <?php echo $this->session->flashdata('message')?>
                      </div>
                    <?php } ?>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">News Headline</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="news_headline" id="news_headline"  placeholder="Headline" value="<?php echo set_value('news_headline');?>">
                      <span class="text-danger"><?php echo form_error('news_headline');?></span>
                    </div>
                </div>  

                <div class="form-group">

                  <label class="col-sm-2 col-sm-2 control-label">News Detail</label>
                    <div class="col-sm-4">
                       <textarea class="form-control" name="news" id="news" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us" value="<?php echo set_value('news');?>"></textarea>
                       <span class="text-danger"><?php echo form_error('news');?></span>
                    </div>
                </div>

                <div align="center">
                    <div>
                      <button type="submit" class="btn btn-theme">Add News</button>   
                    </div>
                </div>
              </form>
            </div>
          </div>
        </section>
