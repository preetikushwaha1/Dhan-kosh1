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
        <h3><!--i class="fa fa-angle-right"--></i>View Customer</h3>
        <div class="row mb">
          <!-- page start-->

          <div class="form-panel">
          
              <form class="form-horizontal style-form" method="post" name="view_cust_form" id="view_cust_form" 
              action="<?php echo site_url('Main/view_customer');?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><h4>Customer Id</h4></label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="customer_id" id="customer_id">
                    </div>
               
                    <div>
                      <button type="submit" class="btn btn-theme" name="search_by_Cust_id">Submit</button>   
                    </div>
                </div>
              </form>
              <br>

            <div class="content-panel">
              <div class="adv-table">
                <table cellpadding="2" cellspacing="2" border="0" class="display table table-bordered">
                  <!--?php echo $this->db->last_query();?-->
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
                      <th>Address Details</th>
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
                            <td><button class="btn btn-primary">View Address</button></td>
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
          
                <div align="right">
                    <?php echo $pagination_links ;?>
                  <div>
             
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


</body>
</html>
