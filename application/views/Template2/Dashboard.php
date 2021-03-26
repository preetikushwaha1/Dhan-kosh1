
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
            <h1 style="font-size:50px;color:#FF6347; font-weight:800;font-family:Times New Roman; font-variant: small-caps;">Welcome <?php echo $this->session->userdata('user_name');?>!!!</h1>
          </div>
          <!--CUSTOM CHART START -->       
          <div class="row mt">
              <!-- SERVER STATUS PANELS -->
            <div class="col-md-4 col-sm-4 mb">
              <div class="grey-panel pn donut-chart">
                <div class="grey-header">
                  <h5 style="font-size: 25px;"><b>TOTAL CUSTOMER</b></h5>
                </div>
                
                  <div class="row">
                      <h2 style="font-size:50px"><?php echo $get_all_customer_no;?></h2>  
                  </div>
              </div>  
            </div><!-- /grey-panel -->

              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>DROPBOX STATICS</h5>
                  </div>
                  <p>April 17, 2014</p>
        
                </div>
              </div>  <!--  /darkblue panel -->

              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>REVENUE</h5>
                  </div>
                  <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
                </div>
              </div>  

              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>REVENUE</h5>
                  </div>
                  <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
                </div>
              </div>  
          </div>
        </div>
      </div>
    </section>
  </section>