
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!DOCTYPE html>
<html lang="en">
  
    <div id="login-page">
    <div class="container" style="padding:80px">

      <form class="form-login" action="<?php echo site_url('change_password');?>" method="post">

        <h2 class="form-login-heading">Change Password</h2>
        <div class="login-wrap">

              <?php if($this->session->flashdata('success')){?>
                      <div class="alert alert-success">      
                        <?php echo $this->session->flashdata('success')?>
                      </div>
                    <?php } ?>
              <br>
          <input type="text" class="form-control" placeholder="Old Password" autofocus name="old_pwd" id="old_pwd" >
          <span class="text-danger"><?php echo form_error('old_pwd');?></span>
          <br>
          <input type="password" class="form-control" placeholder="New Password" name="new_pwd" id="new_pwd" >
            <span class="text-danger"><?php echo form_error('new_pwd');?></span>
        <br>
           <input type="password" class="form-control" placeholder="confirm Password" name="confirm_pwd" id="confirm_pwd">
             <span class="text-danger"><?php echo form_error('confirm_pwd');?></span>
        <br><br>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Change Password</button>
          <br>
          <hr>
  
        </div>

      </form>
    </div>
  </div>

  
</body>
</html>



  
