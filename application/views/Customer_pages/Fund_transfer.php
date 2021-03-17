<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--main content start-->
  <section id="main-content">
      <section class="wrapper" >
        <h3><!--i class="fa fa-angle-right"></i-->Fund Transfer</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt" >
          <div class="col-lg-12">
            <div class="form-panel" style="padding:40px">
              <h4 class="mb"><!--i class="fa fa-angle-right"></i-->Fund Transfer</h4>
              <form class="form-horizontal style-form" method="post" name="fund_form" id="fund_form" 
              action="<?php echo site_url('Main_customer/fund_form_validation');?>" >
          
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Account number</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="account_number" id="account_number">
                    <span class="text-danger"><?php echo form_error('account_number');?></span>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Re-enter Account number</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="re_enter_account_no" id="re_enter_account_no">
                    <span class="text-danger"><?php echo form_error('re_enter_account_no');?></span>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">IFSC Code</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="ifsc_code" id="ifsc_code">
                    <span class="text-danger"><?php echo form_error('ifsc_code');?></span>
                  </div>
                </div>
               
               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Amount</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="amount" id="amount">
                    <span class="text-danger"><?php echo form_error('amount');?></span>
                  </div>
                </div>

                   <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Recipient Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="recipient_name" id="recipient_name">
                    <span class="text-danger"> <?php echo form_error('recipient_name');?></span>
                  </div>
                </div>

                <div align="center">
                  <button type="submit" class="btn btn-theme" name="pay" id="pay">Pay</button> &nbsp;
                  <button type="reset" class="btn btn-theme" name="cancel" id="cancel">Cancel</button> 
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