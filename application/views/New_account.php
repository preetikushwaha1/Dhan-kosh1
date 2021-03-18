<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--main content start-->
  <section id="main-content">
      <section class="wrapper" >
        <h3><!--i class="fa fa-angle-right"></i-->Add New Account</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt" >
          <div class="col-lg-12">
            <div class="form-panel" style="padding:40px">
              <h4 class="mb"><!--i class="fa fa-angle-right"></i-->Add New Account</h4>
              <form class="form-horizontal style-form" method="post" name="account_form" id="account_form"
              action="<?php echo site_url('Main/new_account_form_validation');?>">

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Customer Id</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="customer_id" id="customer_id">
                    <spna class="text-danger"><?php echo form_error('customer_id');?></spna>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Account Type</label>
                  <div class="col-sm-4">
                    <select  class="form-control" name="account_type" id="account_type">
                      <option value="">Select Account</option>
                      <option value="Saving account">Saving Account</option>
                      <option value="Current account">Current Account</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('account_type');?></span>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Bank Branch</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="branch" id="branch">
                    <span class="text-danger"><?php echo form_error('branch');?></span>
                  </div>
               
                  <label class="col-sm-2 col-sm-2 control-label">IFSC code</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="ifsc_code" id="ifsc_code">
                    <span class="text-danger"><?php echo form_error('ifsc_code');?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone No</label>
                  <div class="col-sm-4">
                    <input type="tel" class="form-control" name="phone_no" id="phone_no">
                    <span class="text-danger"><?php echo form_error('phone_no');?></span>
                  </div>
             
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" id="email">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                  </div>

                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Opening Balance</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control"  name="opening_balance" id="opening_balance">
                    <span class="text-danger"><?php echo form_error('opening_balance');?></span>
                  </div>
                </div>

                <!--div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pin(4 digit)</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control">
                  </div>
                
                </div-->
              
                 <div align="center">
                    <button type="submit" class="btn btn-theme">Submit</button> &nbsp;
                    <button type="reset" class="btn btn-theme">Reset</button> 
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