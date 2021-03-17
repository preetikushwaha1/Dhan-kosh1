<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!--external css-->

  <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_page.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_table.css');?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets2/lib/advanced-datatable/css/DT_bootstrap.css');?>" />
 
</head>

<body>
  <section id="container">
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><!--i class="fa fa-angle-right"></i-->View Account</h3>
        <div class="row mb">
          <!-- page start-->


           <div class="form-panel">
          
              <!--form class="form-horizontal style-form" method="post" name="view_account_form" 
              action="<?php echo site_url('Main/view_account');?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><h4>Account Number</h4></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="account_no" id="account_no">
                    </div>
               
                    <div>
                      <button type="submit" class="btn btn-theme" name="submit" id="submit">Submit</button>   
                    </div>
                </div>
              </form-->
              <br>

              <div class="content-panel">
                <div class="adv-table">
                  <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" >
                    <thead>
                      <tr class="gradeX">
                        <th>Customer Id</th>
                        <th>date</th>
                        <th>Account Number</th>
                        <th>Account Type</th>
                        <th>Bank Branch</th>
                        <th>IFSC Code</th>
                        <th>Opening Balance</th>
                        <th>Pin(4 digit)</th>
                        <th>Phone No</th>
                        <th>Email</th>
              
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        if($fetch_new_account_data->num_rows() > 0)
                        {
                          foreach($fetch_new_account_data->result() as $rows ) {?>
                              <tr>
                                <td><?php echo $rows->customer_id;?></td>
                                <td><?php echo $rows->date;?></td>
                                <td><?php echo $rows->account_number;?></td>
                                <td><?php echo $rows->account_type;?></td>
                                <td><?php echo $rows->bank_branch;?></td>
                                <td><?php echo $rows->ifsc_code;?></td>
                                <td><?php echo $rows->opening_balance;?></td>
                                <td><?php echo $rows->pin;?></td>
                                <td><?php echo $rows->phone_no;?></td>
                                <td><?php echo $rows->email;?></td>
                              </tr>
                          
                          <?php }
                        }
                        else
                        {?> 
                           <tr>
                            <td colspan="9">No Data Found</td>
                          </tr>


                       <?php 
                       }?>

                     
                    </tbody>
                  </table>
                  
                    <div align="right">
                    <?php echo $pagination_links ;?>
                  <div>

                </div>
              </div>
          <!-- page end-->
        </div>
      </div>
        <!-- /row -->
    </section>
      <!-- /wrapper -->
  </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

</section>
  <!-- js placed at the end of the document so the pages load faster -->
 
  <script type="text/javascript" language="javascript" src="<?php echo base_url('assets2/lib/advanced-datatable/js/jquery.js');?>"></script>

  <script type="text/javascript" language="javascript" src="<?php echo base_url('assets2/lib/advanced-datatable/js/jquery.dataTables.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets2/lib/advanced-datatable/js/DT_bootstrap.js');?>"></script>

</body>

</html>
