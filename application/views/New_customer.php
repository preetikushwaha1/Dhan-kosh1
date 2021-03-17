<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--main content start-->
  <section id="main-content">
      <section class="wrapper" >
        <h3><!--i class="fa fa-angle-right"></i-->Add New Customer </h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt" >
          <div class="col-lg-12">
            <div class="form-panel" style="padding:40px">
              <h4 class="mb"><!--i class="fa fa-angle-right"></i-->Add New Customer</h4>
              <form class="form-horizontal style-form" method="post" name="cust_form" id="cust_form"
              action="<?php echo site_url('Main/new_customer_form_validation');?>">

                <!--?php 
                    if($this->uri->segment(2) == "inserted");
                    {
                      //Main - segment(1)
                      //inserted - segment(2)

                      echo "<div class='alert alert-success '><b>Data Inserted Successfully</b></div>";
                    }
                  ?-->
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="first_name" id="first_name">
                    <span class="text-danger"><?php echo form_error('first_name');?></span>
                  </div>

                   <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="last_name" id="last_name">
                    <span class="text-danger"><?php echo form_error('last_name');?></span>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                    <div class="radio">&nbsp;  &nbsp;  
                     <label>
                        <input type="radio" name="gender" id="gender" value="male" checked>
                      Male
                    </label>
                      &nbsp;   &nbsp;  &nbsp;
                     <label>
                        <input type="radio" name="gender" id="gender" value="female" >
                      Female
                   </label>
                    &nbsp;   &nbsp;  &nbsp;
                     <label>
                        <input type="radio" name="gender" id="gender" value="other" >
                      Other
                    </label>
                  </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Date Of Birth</label>
                    <div class="col-sm-4">
                      <input type="date"  value="01-01-2014" size="16" class="form-control" name="dob" id="dob">
                      <span class="text-danger"><?php echo form_error('dob');?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Aadhar card</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="aadhar_no" id="aadhar_no">
                    <span class="text-danger"><?php echo form_error('aadhar_no');?></span>
                  </div>

                   <label class="col-sm-2 col-sm-2 control-label">Pan card</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pan_no" id="pan_no">
                    <span class="text-danger"> <?php echo form_error('pan_no');?></span>
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address</label>
                  <div class="col-sm-4">
                    <textarea class="form-control"  type="textarea" name="address" id="address"></textarea>
                    <span class="text-danger"><?php echo form_error('address');?></span>
                  </div>
              
                  <label class="col-sm-2 col-sm-2 control-label">State</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="state" id="state">
                    <span class="text-danger"><?php echo form_error('state');?></span>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">City</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="city" id="city">
                    <span class="text-danger"><?php echo form_error('city');?></span>
                  </div>
               
                  <label class="col-sm-2 col-sm-2 control-label">Pincode</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pincode" id="pincode">
                    <span class="text-danger"><?php echo form_error('pincode');?></span>
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone No</label>
                  <div class="col-sm-4">
                    <input type="tel" class="form-control"  name="phone_no" id="phone_no">
                    <span class="text-danger"><?php echo form_error('phone_no');?></span>
                  </div>
             
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" id="email">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                  </div>
                </div>
                  <button type="submit" class="btn btn-theme" name="submit" id="submit" value="Insert">Submit</button> 
                  <button type="reset" class="btn btn-theme" name="reset" id="reset" value="Reset">Reset</button> 
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>