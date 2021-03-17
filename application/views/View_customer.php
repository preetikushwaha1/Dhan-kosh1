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
         <h3><!--i class="fa fa-angle-right"--></i>View Customer</h3>
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
                      <th>Date</th>
                      <th>Customer Name</th>
                      <th>Aadhar Card</th>
                      <th>Pan Card</th>
                      <th>Gender</th>
                      <th>DOB</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <!--th>Address</th-->
                    
                    </tr>
                </thead>
                <tbody>
                   <?php 
                      if($fetch_new_customer_data->num_rows() > 0)
                      {
                        foreach ($fetch_new_customer_data->result() as $rows){?>
                          <tr>
                            <td><?php echo $rows->customer_id;?></td>
                            <td><?php echo $rows->date;?></td>
                            <td><?php echo $rows->first_name." ".$rows->last_name;?></td>
                            <td><?php echo $rows->aadhar_card;?></td>
                            <td><?php echo $rows->pan_card;?></td>
                            <td><?php echo $rows->gender;?></td>
                            <td><?php echo $rows->dob;?></td>
                            <td><?php echo $rows->email;?></td>
                            <td><?php echo $rows->phone_no;?></td>
                            <!--td>address</td-->
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
              </table><br><br><br>
            </div>
        <!-- /MAIN CONTENT -->
      </div>
    </div>
  </div>
</section>
</section>
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
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      //nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
     // nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[1]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[1]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
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
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "<?php echo base_url('assets2/lib/advanced-datatable/media/images/details_open.png');?>";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "<?php echo base_url('assets2/lib/advanced-datatable/images/details_close.png');?>";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
