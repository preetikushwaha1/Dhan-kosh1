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
        <h3><!--i class="fa fa-angle-right"></i-->Mini Statement</h3>
        <div class="row mb">
          <!-- page start-->


           <div class="form-panel">
          
              <form class="form-horizontal style-form" method="post" name="mini_statement_form" id="mini_statement_form"
              action="<?php echo site_url('Main/mini_statement');?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Account Number</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="account_number" id="account_number">

                    </div>
               
                    <div>
                      <button type="submit" class="btn btn-theme">Submit</button>   
                    </div>
                </div>
              </form>

              <div class="content-panel">
                <div class="adv-table">
                  <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                    <thead>
                      <tr>
                        <th>Transaction Id</th>
                        <th class="hidden-phone">Date & Time </th>
                        <th class="hidden-phone">Remarks</th>
                        <th class="hidden-phone">Debit</th>
                        <th class="hidden-phone">Credit</th>
                        <th class="hidden-phone">Amount</th>
                        <th class="hidden-phone">Status</th>
              
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if($fetch_mini_statement->num_rows() > 0)
                        {
                          foreach ($fetch_mini_statement->result() as $rows) {?>
                            <tr>
                              <td><?php echo $rows->sr_no;?></td>
                              <td><?php echo $rows->date;?></td>
                              <td><?php echo $rows->amount;?></td>
                            </tr>

                         <?php }

                        }
                             else
                      {?>
                          <tr>
                            <td  colspan="7">No Data Found</td>
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
      nCloneTd.innerHTML = '<img src="<?php echo base_url('assets2/lib/advanced-datatable/images/details_open.png');?>">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

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
