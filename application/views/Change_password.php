
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
  
    <div id="login-page">
    <div class="container" style="padding:80px">

      <form class="form-login" action="<?php echo site_url('change_password/change_pwd');?>" method="post">

        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Old Password" autofocus name="old_pwd" id="old_pwd">
          <br>
          <input type="password" class="form-control" placeholder="New Password" name="new_pwd" id="new_pwd">
        <br>
           <input type="password" class="form-control" placeholder="confirm Password" name="confirm_pwd" id="confirm_pwd">
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



  
