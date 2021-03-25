<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--main content start-->
  <section id="main-content">
      <section class="wrapper" >
        <h3 style="font-size:30px;color:#FF6347; font-weight:800;font-family:Times New Roman; font-variant: small-caps;">
        Update Customer </h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt" >
          <div class="col-lg-12">
            <div class="form-panel" style="padding:40px">
             <div class="alert alert-info">  
              <p class="mb" style="font-weight:600;font-family:Times New Roman;font-size: 20px" >Update Customer</p>

            </div>

              <?php extract($fetch_customer_view_edit_data->row_array());?>


              <form class="form-horizontal style-form" method="post" name="cust_form" id="cust_form"
              action="<?php echo site_url('Main/update_customer/').$customer_id;?>">
              <p style="font-weight:600;font-family:Times New Roman;font-size: 20px"> 
                Customer Id: <?php echo $customer_id;?></p>

                <!--?php 
                    if($this->uri->segment(2) == "inserted");
                    {
                      //Main - segment(1)
                      //inserted - segment(2)

                      echo "<div class='alert alert-success '><b>Data Inserted Successfully</b></div>";
                    }
                  ?-->

                  <?php if($this->session->flashdata('message')){?>
                    <div class="alert alert-success">      
                      <?php echo $this->session->flashdata('message')?>
                    </div>
                  <?php } ?>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="first_name" id="first_name"  value="<?php echo $first_name;?>">
                    <span class="text-danger"><?php echo form_error('first_name');?></span>
                  </div>

                   <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $last_name;?>">
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
                      <input type="date"  value="01-01-2014" size="16" class="form-control" name="dob" id="dob" value="<?php echo $dob;?>">
                      <span class="text-danger"><?php echo form_error('dob');?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Aadhar card</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="aadhar_no" id="aadhar_no" value="<?php echo $aadhar_card;?>">
                    <span class="text-danger"><?php echo form_error('aadhar_no');?></span>
                  </div>

                   <label class="col-sm-2 col-sm-2 control-label">Pan card</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pan_no" id="pan_no" value="<?php echo $pan_card;?>">
                    <span class="text-danger"> <?php echo form_error('pan_no');?></span>
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address</label>
                  <div class="col-sm-4">
                    <input class="form-control"  type="text" name="address" id="address" value="<?php echo $address;?>">
                    <span class="text-danger"><?php echo form_error('address');?></span>
                  </div>
              
                  <label class="col-sm-2 col-sm-2 control-label">State</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="state" id="state" value="<?php echo $state;?>">
                    <span class="text-danger"><?php echo form_error('state');?></span>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">City</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="city" id="city" value="<?php echo $city;?>">
                    <span class="text-danger"><?php echo form_error('city');?></span>
                  </div>
               
                  <label class="col-sm-2 col-sm-2 control-label">Pincode</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pincode" id="pincode" value="<?php echo $pincode;?>">
                    <span class="text-danger"><?php echo form_error('pincode');?></span>
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone No</label>
                  <div class="col-sm-4">
                    <input type="tel" class="form-control"  name="phone_no" id="phone_no" value="<?php echo $phone_no;?>">
                    <span class="text-danger"><?php echo form_error('phone_no');?></span>
                  </div>
             
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                  </div>
                </div>

              <div class="alert alert-info"><p class="mb" style="font-weight:600;font-family:Times New Roman;font-size: 20px" >Fill Account Details</p></div>
        

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Account No</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control"  name="account_no" id="account_no" value="<?php echo $account_no;?>">
                    <span class="text-danger"><?php echo form_error('account_no');?></span>
                  </div>
             
                  <label class="col-sm-2 col-sm-2 control-label">Opening Balance</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="opening_balance" id="opening_balance" value="<?php echo $opening_balance;?>">
                    <span class="text-danger"><?php echo form_error('opening_balance');?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control"  name="pwd" id="pwd"  value="<?php echo $password;?>"> 
                    <span class="text-danger"><?php echo form_error('pwd');?></span>
                  </div>
             
                  <label class="col-sm-2 col-sm-2 control-label">Confirm Password</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" name="confirm_pwd" id="confirm_pwd"  value="<?php echo $confirm_password;?>">
                    <span class="text-danger"><?php echo form_error('confirm_pwd');?></span>
                  </div>
                </div>


                  <button type="submit" class="btn btn-theme" name="submit" id="submit" value="Insert">Update</button> 
                  <button type="reset" class="btn btn-warning " name="reset" id="reset" value="Reset" onclick="alert('Do you really want to Reset');">Reset</button> 
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>