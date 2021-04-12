<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_table.css');?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets2/lib/advanced-datatable/css/DT_bootstrap.css');?>" />


 
</head>

<body>
 
    <section id="main-content">
      <section class="wrapper">
         <h3><!--i class="fa fa-angle-right"--></i>View Account</h3>
        <div class="row mb">
          <!-- page start-->
              <div class="form-panel">
          
              <form class="form-horizontal style-form" method="post" name="view_cust_form" id="view_cust_form" 
              action="<?php echo site_url('Main/view_customer');?>">
                <!--div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><h4>Customer Id</h4></label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="customer_id" id="customer_id">
                    </div-->
               
                    <!--div>
                      <button type="submit" class="btn btn-theme" name="search_by_Cust_id">Submit</button>   
                    </div>
                </div-->
              </form>
              <br>


          <div class="content-panel">

            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
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

                    

            </div><br><br><br>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->

  <script type="text/javascript" language="javascript" src="<?php echo base_url('assets2/lib/advanced-datatable/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assets2/lib/bootstrap/js/bootstrap.min.js');?>"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url('assets2/lib/jquery.dcjqaccordion.2.7.js');?>"></script>
  <script src="<?php echo base_url('assets2/lib/jquery.scrollTo.min.js');?>"></script>
  <script src="<?php echo base_url('assets2/lib/jquery.nicescroll.js');?>" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url('assets2/lib/advanced-datatable/js/jquery.dataTables.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets2/lib/advanced-datatable/js/DT_bootstrap.js');?>"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url('assets2/lib/common-scripts.js');?>"></script>
  <!--script for this page-->
  <script type="text/javascript">


    $(document).ready(function() {
           $.fn.dataTableExt.sErrMode = 'throw';    //to stop warning request unkonwn parameters
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [1]
        }],
        "aaSorting": [
          [1, 'desc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */

    });
  </script>
</body>



</html>






