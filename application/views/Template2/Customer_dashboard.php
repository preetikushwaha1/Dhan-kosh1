
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12 main-chart">
            <div class="row" align="center">
            <h1 style="font-size:50px;color:#FF6347; font-weight:800;font-family:Times New Roman; font-variant: small-caps;">Welcome <?php echo $this->session->userdata('first_name');?> <?php echo $this->session->userdata('last_name');?>!!!</h1>
            <h1 style="font-size:30px;color:#000000; font-weight:800;font-family:Times New Roman; font-variant: small-caps;">AC/No:<?php echo $this->session->userdata('account_number');?></h1>

          </div>
          <!--CUSTOM CHART START -->       
          <div class="row mt" style="padding-left: 350px" >
              <!-- SERVER STATUS PANELS -->
            <div class="col-md-8 col-sm-4 mb">
              <div class="grey-panel pn ">
                <div class="grey-header">
                  <h4 style="color: #000000"><b>Account Details</b></h4>
                </div>
                
                  <div class="row text-justify" >
                     <h3>&nbsp;&nbsp; &nbsp;&#9656 Balance (INR):<h3>
                      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&#9656 You have </h3>
                      <h3>&nbsp;&nbsp;&nbsp; &#9656 Your last transaction </h3>  
                  </div>
              </div>  
            </div><!-- /grey-panel -->

          </div>
        </div>
      </div>
    </section>
  </section>