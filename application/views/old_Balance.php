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
        <h3><!--i class="fa fa-angle-right"></i-->Balance </h3>
        <div class="row mb">
          <!-- page start-->

           <div class="form-panel">
          
              <form class="form-horizontal style-form" method="post" action="<?php echo site_url('Main/view_balance');?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><h4>Account Number</h4></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="account_no" id="account_no">
                    </div>
               
                    <div>
                      <button type="submit" class="btn btn-theme">Submit</button>   
                    </div>
                </div>
              </form>

              <div class="content-panel">


                <div class="adv-table">
                  <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" >
                    <thead>
                      <tr>
                        <th>Customer Id</th>
                        <th>Customer Name</th>
                        <th>Account Number</th>
                        <th>Balance</th>
                        <th>Delete</th>
                      </tr>

                    </thead>
                    <tbody>
                    
                    <?php 
                      if($fetch_balance->num_rows() > 0)
                      {
                        foreach ($fetch_balance->result() as $rows){?>
                          <tr>
                            <td><?php echo $rows->customer_id;?></td>
                            <td><?php echo $rows->first_name." ".$rows->last_name;?></td>
                            <td><?php echo $rows->account_number;?></td>
                            <td><?php echo $rows->opening_balance;?></td>

                           
                            <td><a href="<?php echo site_url('Main/delete_customer/'.$rows->customer_id);?>" class="btn btn-danger fa fa-trash-o" onclick="return confirm('Are you sure')" name="delete_customer_data"></a></td>
                          </tr>
                          
                       <?php }

                      }
                      else
                      {?>
                          <tr>
                            <td colspan="10">No Data Found</td>
                          </tr>

                       <?php
                      }?>
                   
                     
                     
                    </tbody>
                  </table>
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

  <!--script for this page-->
  <script type="text/javascript">

    $(document).ready(function() {


      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

   
    });




  </script>
</body>

</html>
