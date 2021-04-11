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
         <h3></i>View Customer</h3>
        <div class="row mb">
          <!-- page start-->
              <div class="form-panel">

                <?php if($this->session->flashdata('success')){?>
                    <div class="alert alert-success">      
                        <?php echo $this->session->flashdata('success')?><br>
                        
                    </div>
                  <?php } ?>

                  <?php if($this->session->flashdata('Insufficient_balance')){?>
                    <div class="alert alert-warning">      
                        <?php echo $this->session->flashdata('Insufficient_balance')?><br>
                        
                    </div>
                  <?php } ?>

                 <?php if($this->session->flashdata('wrong')){?>
                    <div class="alert alert-danger">      
                        <?php echo $this->session->flashdata('wrong')?><br>
                        
                    </div>
                  <?php } ?>
          
              <form class="form-horizontal style-form" method="post" name="view_cust_form" id="view_cust_form" 
              action="">
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
                      
                      <th>Transaction Id</th>
                      <th>Date & Time</th>
                      <th>Remarks</th>
                      <th>Debit(INR)</th>
                      <th>Credit(INR)</th>
                      <th>Balance</th>
   
                    </tr>
                </thead>
                <tbody>
                   <?php 
                      if($fetch_view_transaction->num_rows() > 0)
                      {
                        

                        foreach ($fetch_view_transaction->result() as $rows){?>
                          <tr>
                            <?php  $time=strtotime($rows->trans_date);
                            $sanitized_time = date("d/m/Y, h:i A", $time);?>

                            <!--td><?php echo $i;;?></td--><!--?php $i++;?-->
                            
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
                            <td  colspan="10">No Data Found
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






