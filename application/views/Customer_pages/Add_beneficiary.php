<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--main content start-->
  <section id="main-content">
      <section class="wrapper" >
        <h3>Fill Beneficiary Details</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt" >
          <div class="col-lg-12">
            <div class="form-panel" style="padding:40px">
              <h4 class="mb">Fill Beneficiary Details</h4>
              <form class="form-horizontal style-form" method="post" name="add_beneficiary_forms" id="add_beneficiary_forms" 
              action="<?php echo site_url('Main_customer/beneficiary_validation');?>" >
          
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">First Name :</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo set_value('first_name');?>">
                    <span class="text-danger"><?php echo form_error('first_name');?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Last Name :</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="last_name" id="last_name"  value="<?php echo set_value('last_name');?>">
                    <span class="text-danger"><?php echo form_error('last_name');?></span>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Account number :</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="account_no" id="account_no"  value="<?php echo set_value('account_no');?>">
                    <span class="text-danger"><?php echo form_error('account_no');?></span>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email :</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" id="email"  value="<?php echo set_value('email');?>">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                  </div>
                </div>
               
               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="phone_no" id="phone_no"  value="<?php echo set_value('phone_no');?>">
                    <span class="text-danger"><?php echo form_error('phone_no');?></span>
                  </div>
                </div>

      
                  <a class="btn btn-success" name="go_back" id="go_back" href="<?php echo site_url('Main_customer/Beneficiary');?>">Go Back</a>&nbsp;
                  <button type="reset" class="btn btn-danger" name="cancel" id="cancel" onclick=" return confirm('Do you really want to reset')">Reset</button> 
              

                <div align="center">
                  
                  <button type="submit" class="btn btn-theme" name="pay" id="pay">Submit</button> &nbsp;
               
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