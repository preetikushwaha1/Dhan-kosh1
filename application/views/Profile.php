<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


    <section id="main-content">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Profile</h3>
            </div>

               <div class="col-md-4 centered">
                      <div class="profile-pic">
                        <p><img src="img/ui-sam.jpg" class="img-circle"></p>
                        <p><br>

                          <form  name="profile-pic"  enctype="multipart/form-data"  method="post" action="<?php echo base_url('Main/upload_profile');?>">
                          <input type="file" value="Upload Photo" name="upload_profile" id="upload_profile">
                          <button class="btn btn-theme" >Upload Photo</button>
                        </form>
                        </p>
                      </div>
                    </div>
                  <div class="row content-panel">
                    <div class="col-md-4 profile-text mt mb centered">
                     <h3 style="font-variant-caps:  small-caps;font-size:40px;font-weight:800"><?php echo $this->session->userdata('user_name');?></h3>
                   
                      
                    </div>
           
                  </div>
                  <!-- /row -->
                </div>
        
      
          </aside>
       
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>