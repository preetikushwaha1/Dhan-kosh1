<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!--external css-->

  <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_table.css');?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets2/lib/advanced-datatable/css/DT_bootstrap.css');?>" />
  <style media="print">
  .hideblock{
      display:none;
}
</style>

</head>

<body>
  <section id="container">
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>Customized Statement</h3>
        <div class="row mb">
          <!-- page start-->


           <div class="form-panel">
                <span class="hideblock"> <a href="#" onclick="window.print()">
                  <span class="btn  btn-success fa fa-print" style="float:right;padding:10px;font-size: 14px" > Print</span> </a>
                </span>
                <br>
              <form class="form-horizontal style-form" method="post" name="custoised_form" id="customised_form" 
              action="<?php echo site_url('Main_customer/customized_statement');?>">
                <!--div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Account Number</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="account_no" is="account_no">
                    </div>
                </div-->
                    <br><br>

                <div class="form-group">
                  <label class="control-label col-md-2">Date Range :</label>
                  <div class="col-md-4">
                    <div class="input-group input-large"  data-date-format="mm/dd/yyyy">
                      <input type="date" class="form-control dpd1" name="from_date" id="from_date" values="<?php echo set_value('from_date');?>">
                      <span class="input-group-addon">To</span>
                      <input type="date" class="form-control dpd2" name="to_date" id="to_date" values="<?php echo set_value('to_date');?>">
                    </div>
                    <span class="help-block">Select date range</span>
                  </div>
                </div>

                 <div align="center" class="hideblock">
                      <button type="submit" class="btn btn-theme">Submit</button>   
                  </div>
              </form>

              <br>
              
              <div class="content-panel">
                <div class="adv-table">
                  <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                      <tr class="gradeX">
                          
                      <th>Transaction Id</th>
                      <th>Date & Time</th>
                      <th>Remarks</th>
                      <th>Debit(INR)</th>
                      <th>Credit(INR)</th>
                      <th>Balance</th>
              
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($balance_in_range->num_rows() > 0)
                      {
                        foreach ($balance_in_range->result() as $rows) {?>

                         <?php  $time=strtotime($rows->trans_date);

                            $sanitized_time = date("d/m/Y, h:i A", $time);?>

                            <!--td><?php echo $i;;?></td--><!--?php $i++;?-->
                          <tr>  
                            <td name="cust_id"><?php echo $rows->trans_id;?></td>
                            <td><?php echo $sanitized_time;?></td>
                            <td><?php echo $rows->remarks;?></td>
                            <td><?php echo "<span style='color:  #ed5565'><b>- &#8377; ". $rows->debit ."</b></span>" ;?></td>
                            <td><?php echo "<span style='color:  #4CAF50'><b>+ &#8377;  ". $rows->credit ."</b></span>" ;?></td>
                            <td><?php echo "&#8377; ". $rows->balance;?></td> 
                          </tr>
                      <?php }
                      }
                      else
                        {?>
                        <tr>
                          <td colspan="7">No record found</td>
                        </tr>
                        <?php

                      } ?>
                    
                     
                    </tbody>
                  </table>
                </div><br><br><br>
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
 <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
      
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
      $.fn.dataTableExt.sErrMode = 'throw';

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






