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
        <h3></i>View Customer</h3>
        <div class="row mb">
          <!-- page start-->

          <div class="form-panel">
          
              <!--form class="form-horizontal style-form" method="post" name="view_cust_form" id="view_cust_form" 
              action="<?php echo site_url('Main_customer/view_customer');?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><h4>Customer Id</h4></label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="customer_id" id="customer_id">
                    </div>
               
                    <div>
                      <button type="submit" class="btn btn-theme" name="search_by_Cust_id">Submit</button>   
                    </div>
                </div>
              </form-->
              <br>

            <div class="content-panel">
              <div class="adv-table">
                <table cellpadding="2" cellspacing="2" border="0" class="display table table-bordered">
                  <thead>
                    <tr class="gradeX">
                      
                      
                      
                    
                    
                    </tr>
                  </thead>
                  <tbody>
                    <!--tr class="gradeX">
                      <td>Trident</td>
                      <td>Internet Explorer 4.0</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">4</td>
                      <td class="center hidden-phone">X</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">4</td>
                      <td class="center hidden-phone">X</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="hidden-phone">Win 95+</td>
                
                    </tr-->

                    <!--?php 
                        if(isset($_POST['search_by_Cust_id']))
                        {
                          $cust_id =  $_POST['customer_id'];
                          $query = "SELECT * FROM customer_details where customer_id= $cust_id";
                        }
                      ?-->
                    <?php 
                      if($fetch_data_by_customer_id->num_rows() > 0)

                      {
                        foreach ($fetch_data_by_customer_id->result() as $rows){?>
                          <tr>
                            <th>Customer Id</th>
                            <td><?php echo $rows->customer_id;?></td>
                          </tr>
                          <tr>
                            <th>Customer Name</th>
                            <td><?php echo $rows->first_name." ".$rows->last_name;?></td>
                          </tr>
                          <tr>
                            <th>Aadhar Card</th>
                            <td><?php echo $rows->aadhar_card;?></td>
                          </tr>
                          <tr>
                             <th>Pan Card</th>
                             <td><?php echo $rows->pan_card;?></td>
                          </tbody>
                          <tr>
                                <th>Gender</th>
                                <td><?php echo $rows->gender?></td>
                            </tr>
                            <tr>  
                                  <th>DOB</th>
                                <td><?php echo $rows->dob?></td>
                          </tr>
                          
                       <?php }

                      }
                      else
                      {?>
                          <tr>
                            <td  colspan="10">No Data Found</td>
                          </tr>

                       <?php
                      }?>
                   
                   
                  </tbody>
                </table>

                <br>

            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
              <thead>
                <label class="col-sm-2 col-sm-2 control-label"><h4>Address Details</h4></label>
                    <tr class="gradeX">
                      <th>Address</th>
                      <th>State</th>
                      <th>City</th>
                      <th>Pincode</th>
                      <th>Mobile no</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--tr class="gradeX">
                      <td>Trident</td>
                      <td>Internet Explorer 4.0</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">4</td>
                      <td class="center hidden-phone">X</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">4</td>
                      <td class="center hidden-phone">X</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="hidden-phone">Win 95+</td>
                
                    </tr-->
                    <?php 
                      if($fetch_data_by_customer_id->num_rows() > 0)
                      {
                        foreach ($fetch_data_by_customer_id->result() as $rows){?>
                   
                          <tr>
                            <td><?php echo $rows->address?></td>
                            <td><?php echo $rows->state?></td>
                            <td><?php echo $rows->city?></td>
                            <td><?php echo $rows->pincode?></td>
                            <td><?php echo $rows->phone_no?></td>
                            <td><?php echo $rows->email?></td>
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
