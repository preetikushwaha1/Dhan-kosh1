<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!--external css-->

  <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_page.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets2/lib/advanced-datatable/css/demo_table.css');?>" rel="stylesheet" />
 
 
</head>

<body>
  <section id="container">
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><!--i class="fa fa-angle-right"></i-->Edit/Delete Customer</h3>
        <div class="row mb">
          <!-- page start-->

           <div class="form-panel">
          
              <form class="form-horizontal style-form" method="post" name="edit_del_cust_form" 
                action=<?php echo site_url('Main/edit_delete_customer');?>>
                <!--div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><h4>Customer Id</h4></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="cust_id" id="cust_id">
                    </div>
               
                    <div>
                      <button type="submit" class="btn btn-theme" name="submit" id="submit">Submit</button>   
                    </div>
                </div-->
              </form>

             <div class="content-panel">
              <div class="adv-table">
                <table cellpadding="2" cellspacing="2" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                    <tr class="gradeX">
                        <th>Id</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Aadhar No</th>
                      <th>Pan No</th>
                      <th>Gender</th>
                      <th>DOB</th>
                      <th>Phone no</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th></th>
                 

                    
                    </tr>
                  </thead>
                    <tbody>
                   <?php 
                      if($fetch_new_customer_data->num_rows() > 0)
                      {
                        foreach ($fetch_new_customer_data->result() as $rows){?>
                          <tr>
                            <td name="cust_id"><?php echo $rows->customer_id;?></td>
                            <td><?php echo $rows->date;?></td>
                            <td><?php echo $rows->first_name." ".$rows->last_name;?></td>
                            <td><?php echo $rows->aadhar_card;?></td>
                            <td><?php echo $rows->pan_card;?></td>
                            <td><?php echo $rows->gender;?></td>
                            <td><?php echo $rows->dob;?></td>
                            <td><?php echo $rows->phone_no;?></td>
                            <td><?php echo $rows->email;?></td>
                            <td><?php echo $rows->address."<br>".$rows->city." , ".$rows->state." , Pincode: ". $rows->pincode;?></td>
                            <td><span style="float:right;">
                                  <a href="<?php echo site_url('Main/view_customer');?>" class="fa fa-eye text-info"  ></a>

                                  <a href="#" class="fa fa-pencil-square-o text-primary" onclick="return confirm('Are you sure you want to update this?')" ></a>

                                  <a href="<?php echo site_url('Main/delete_customer/'.$rows->customer_id);?>" class=" fa fa-trash-o text-danger" 
                                  onclick="return confirm('Are you sure')" name="delete_customer_data"></a>
                              </span>
                            </td>
                            
                           
                           
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

        
              </div> <br><br><br>
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
      /*
       * Insert a 'details' column to the table
       */
     /* var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });
*/
      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [0, 'desc']
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
