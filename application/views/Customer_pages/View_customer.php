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
 
 <style>
   
    .th_decorate{
       padding-left:100px;
       font-size: 17px ;
       color:#000000;
  }
  .tr_decorate
  {
      padding-left:20px;
      font-size: 17px;
      color:#DC143C ;
      font-weight:700;
      text-align: left;


  }
 </style>
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
                <?php 
                      if($fetch_data_by_customer_id->num_rows() > 0)

                      {
                        foreach ($fetch_data_by_customer_id->result() as $rows){?>
                        
                            <h3 style="text-align: center;"><b>Customer Id: <?php echo $rows->customer_id;?></b></h3>
                            <br>
                          
                       
                       <?php }

                      }
                      else
                      {?>
                          <tr>
                            <td  colspan="10">No Data Found</td>
                          </tr>

                       <?php
                      }?>
          
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

                    <?php 
                      if($fetch_data_by_customer_id->num_rows() > 0)

                      {
                        foreach ($fetch_data_by_customer_id->result() as $rows){?>
                         
                           <div class="row">
                                <div class="col-md-6 col-sm-4 mb">
                                    <div class="green-panel pn donut-chart" style="background-color: #B0E0E6">
                                       <div class="green-header" >
                                       <h5 style="font-size: 25px;"><b>Customer Details</b></h5>
                                      </div>
                  
                                       <div class="row" >
                                          <table>
                                              <tr>
                                                <th class="th_decorate">Customer Name&nbsp;&nbsp;: </th>
                                                <td class="tr_decorate" ><?php echo $rows->first_name." ".$rows->last_name;?></td>
                                              </tr>
                                               <tr>
                                                  <th  class="th_decorate">Aadhar Card&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </th>
                                                  <td class="tr_decorate"><?php echo $rows->aadhar_card;?></td>
                                                </tr>
                                                <tr>
                                                  <th  class="th_decorate">Pan Card&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
                                                  <td class="tr_decorate"><?php echo $rows->pan_card;?></td>
                                                </tr>
                                                <tr>
                                                   <th class="th_decorate">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </th>
                                                   <td class="tr_decorate"><?php echo $rows->gender?></td>
                                                </tr>
                                                  <tr>  
                                                      <th  class="th_decorate">DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
                                                      <td class="tr_decorate"><?php echo $rows->dob?></td>
                                                   </tr>
                                            </table>
                                          
                                     </div>
                                 </div> 
                                </div> 

                                <div class="col-md-6 col-sm-4 mb">
                                    <div class="green-panel pn donut-chart" style="background-color: #B0E0E6">
                                       <div class="green-header">
                                       <h5 style="font-size: 25px;"><b>Address Details</b></h5>
                                      </div>
                  
                                       <div class="row">
                                          <table>
                                              <tr>
                                                <th  class="th_decorate">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</th>
                                                <td class="tr_decorate"><?php echo $rows->address;?></td>
                                              </tr>
                                               <tr>
                                                  <th class="th_decorate">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </th>
                                                  <td  class="tr_decorate"><?php echo $rows->state;?></td>
                                                </tr>
                                                <tr>
                                                  <th  class="th_decorate">City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</th>
                                                  <td class="tr_decorate"><?php echo $rows->city;?></td>
                                                </tr>
                                                <tr>
                                                   <th class="th_decorate">Pincode &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
                                                   <td class="tr_decorate"><?php echo $rows->pincode;?></td>
                                                </tr>
                                                  <tr>  
                                                      <th  class="th_decorate">Phone Number&nbsp; :</th>
                                                      <td class="tr_decorate"><?php echo $rows->phone_no;?></td>
                                                   </tr>
                                                    <tr>  
                                                      <th   class="th_decorate">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
                                                      <td class="tr_decorate"><?php echo $rows->email;?></td>
                                                   </tr>
                                            </table>
                                          
                                     </div>
                                 </div> 
                                </div> 

                          
                       <?php }

                      }
                      else
                      {?>
                          <div class="row">
                                <div class="col-md-6 col-sm-4 mb">
                                    <div class="green-panel pn donut-chart">
                                       <div class="green-header" style="background-color: #B0E0E6">
                                       <h5 style="font-size: 25px;"><b>Customer Details</b></h5>
                                      </div>
                  
                                       <div class="row">
                                          <table>
                                              <tr>
                                                <td colspan="4">NO Data Found</td>
                                              </tr>
                                              
                                     </div>
                                 </div> 
                                </div> 

                       <?php
                      }?>
                   
                  </tbody>
                </table>

                <br>

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
