<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--main content start-->
  <section id="main-content">
    <section class="wrapper" >
      <h3>Transfer Funds</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt" >
          <div class="col-lg-12">
            <div class="form-panel" style="padding:40px">
              <h4 class="mb">Transfer Funds</h4>

                <?php extract($fetch_data->row_array());?>

              <form class="form-horizontal style-form" method="post" name="add_beneficiary_forms" id="add_beneficiary_forms" 
              action="<?php echo site_url('Main_customer/send_fund_validation/'.$customer_id);?>" >

                
                  <?php if($this->session->flashdata('success')){?>
                    <div class="alert alert-success">      
                        <?php echo $this->session->flashdata('success')?><br>
                        
                    </div>
                  <?php } ?>

                  <?php if($this->session->flashdata('Insufficient_balance')){?>
                    <div class="alert alert-warning">      
                        <?php echo $this->session->flashdata('Insufficient_balance')?><br>
                        
                    </div>
                  <?php } ?>

                 <?php if($this->session->flashdata('wrong')){?>
                    <div class="alert alert-danger">      
                        <?php echo $this->session->flashdata('wrong')?><br>
                        
                    </div>
                  <?php } ?>




                <div class="form-group">
                  <label class="col-sm-4 col-sm-4 control-label" style="font-size: 16px">To : <b><?php echo $first_name." ".$last_name;?></b></label>
             
                </div>

                <div class="form-group">
                  <label class="col-sm-4 col-sm-4 control-label"  style="font-size: 16px">Account Number : <b><?php echo $account_no;?></b></label>
                
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"  style="font-size: 16px">Enter Amount(INR) :</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="amount" id="amount"  value="<?php echo set_value('amount');?>">
                    <span class="text-danger"><?php echo form_error('amount');?></span>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"  style="font-size: 16px">Enter your Password :</label>
                  <div class="col-sm-4">
                    <input type="Password" class="form-control" name="password" id="password"  value="<?php echo set_value('password');?>">
                    <span class="text-danger"><?php echo form_error('password');?></span>
                  </div>
                </div>

      
                  <a class="btn btn-success" name="go_back" id="go_back" href="<?php echo site_url('Main_customer/Beneficiary');?>">Go Back</a>&nbsp;
                  <button type="reset" class="btn btn-danger" name="cancel" id="cancel" onclick=" return confirm('Do you really want to reset')">Reset</button> 
              

                <div align="center">
                  
                  <button type="submit" class="btn btn-theme" name="pay" id="pay" onclick="return confirm('Are you sure')">Submit</button> &nbsp;
               
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
  </section>