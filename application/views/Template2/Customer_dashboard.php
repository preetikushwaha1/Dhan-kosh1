
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
            <h1 style="font-size:50px;color:#FF6347; font-weight:800;font-family:Times New Roman; font-variant: small-caps;">
              Welcome <?php echo $this->session->userdata('first_name');?> <?php echo $this->session->userdata('last_name');?>!!!
            </h1>

            <h1 style="font-size:30px;color:#000000; font-weight:800;font-family:Times New Roman; font-variant: small-caps;">
               AC/No:<?php echo $this->session->userdata('account_number');?>
              </h1>

          </div>
          <!--CUSTOM CHART START -->       
          <div class="row mt" style="padding-left: 350px" >
              <!-- SERVER STATUS PANELS -->
            <div class="col-md-8 col-sm-4 mb">
              <div class="grey-panel pn ">
                <div class="grey-header">
                  <h4 style="color: #000000"><b>Account Details</b></h4>
                </div>
                
                <?php 
                if($customer_dashboard_details->num_rows()>0)
                {
                   foreach ($customer_dashboard_details->result() as $rows){?>

                      <div class="row text-justify" style="color:#000000" >
                         <h3>&nbsp;&nbsp; &nbsp;&#9656 Balance (INR): <?php echo "<b>".$rows->balance ."</b>";?><h3>
                          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&#9656 You have <?php  $res=$beneficiary->row_array() ?>
                                                                      <?php  echo "<b>".$res['count(*)'] ."</b>";?> beneficiaries.</h3>

                           <?php if($rows->debit == 0)
                          {
                            $transaction = $rows->credit;
                            $type = "<span style='color:  #4CAF50'><b> (Credit) </b></span>";
                          }
                          else
                          {
                            $transaction = $row->debit;
                            $type = "<span style='color:  #ed5565'><b> (Debit) </b></span>";

                          }?>
                            <?php  $time=strtotime($rows->trans_date);
                            $sanitized_time = date("d/m/Y, g:i A", $time);?>

                          <h3>&nbsp;&nbsp;&nbsp; &#9656 Your last transaction 
                            <?php echo $type.
                            "of "."<b> Rs. ". $transaction ."</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On ". $sanitized_time .", was ".
                            ' " ' .$rows->remarks .' " ' ;?></h3>  
                      </div>
                    <?php }
                       
                      }
                      else
                      {?>
                          <tr>
                            <td  colspan="10">No Data Found
                            </td>
                          </tr>

                       <?php
                      }?>
              </div>  
            </div><!-- /grey-panel -->

          </div>
        </div>
      </div>
    </section>
  </section>