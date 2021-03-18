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
        <h3><i class="fa fa-angle-right"></i> Advanced Table Example</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th class="hidden-phone">Platform(s)</th>
                    <th class="hidden-phone">Engine version</th>
                    <th class="hidden-phone">CSS grade</th>
                  </tr>
                </thead>
                <tbody>
                 
                </tbody>
              </table>
            </div>
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
  <!--script type="text/javascript" language="javascript" src="<?php //echo base_url('assets2/lib/advanced-datatable/js/jquery.dataTables.js');?>"></script-->
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
          [1, 'asc']
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
