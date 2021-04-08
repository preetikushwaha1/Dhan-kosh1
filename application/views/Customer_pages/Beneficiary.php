<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!--external css-->

   <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_table.css');?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets2/lib/advanced-datatable/css/DT_bootstrap.css');?>" />
 
</head>

<body>
  <section id="container">
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><!--i class="fa fa-angle-right"></i-->Add Beneficiary</h3>
        <div class="row mb">
          <!-- page start-->


           <div class="form-panel"><br>
             <span style="padding-left: 550px">  <a class="btn btn-primary" href="<?php echo site_url('Main_customer/add_beneficiary');?>">Add Beneficiary</a></span>
             <br><br>
             <hr>
            
              <form class="form-horizontal style-form" method="post" name="mini_statement_form" id="mini_statement_form"
              action="<?php echo site_url('');?>">

              </form>

         <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr class="gradeX">
                      
                      <th>Customer id</th>
                      <th>Account_no</th>
                      <th>Name</th>
                      <th>Send</th>
                      <th>Delete</th>
   
                    </tr>
                </thead>
                <tbody>
                   <?php 
                      if($fetch_beneficiary_data->num_rows() > 0)
                      {
                        

                        foreach ($fetch_beneficiary_data->result() as $rows){?>
                          <tr>
                            
                            <td><?php echo $rows->customer_id;?></td>
                            <td><?php echo $rows->account_no;?></td>
                            <td><?php echo $rows->first_name." ".$rows->last_name;?></td>
                            <td><a href="<?php echo site_url('Main_customer/send_fund/'.$rows->customer_id);?>"  class=" btn btn-success fa fa-money" ></a></td>
                            <td><a href="<?php echo site_url('Main_customer/delete_beneficiary/'.$rows->customer_id);?>"  class="btn btn-danger fa fa-trash-o" 
                              onclick="return confirm(Do you really want Delete!)"></a></td>

                           
                          </tr>
                       
                       <?php }
                       
                      }
                      else
                      {?>
                          <tr>
                            <td  colspan="10">No Data Beneficiary Found
                            </td>
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

      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [0, 'desc']
        ]
      });

 
    });
  </script>
</body>



</html>






