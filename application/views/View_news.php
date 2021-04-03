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
  <section id="container">
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><!--i class="fa fa-angle-right"></i-->News</h3>
        <div class="row mb">
          <!-- page start-->
           <div class="form-panel">
            <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><h4>News</h4></label>
            </div>

              <div class="content-panel">

                 <?php if($this->session->flashdata('message')){?>
                      <div class="alert alert-success">      
                        <?php echo $this->session->flashdata('message')?>
                      </div>
                    <?php } ?>

                <div class="adv-table">
                  <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                      <tr class="gradeX">
                        <!--th>Sr no.</th-->
                        <th>Date</th>
                        <th>News</th>
                        <th>Delete</th>
              
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if($fetch_news->num_rows() > 0)
                        {
                          foreach($fetch_news->result() as $rows) { ?>
                            <tr>
                              <!--td><?php //echo $rows->sr_no;?></td-->
                              <td><?php echo $rows->date;?></td>
                              <td><?php echo "<b>".$rows->news_headline."</b>" ,"<br>".$rows->news;?></td>

                              <td><a href="<?php echo site_url('Main/delete_news/' . $rows->sr_no)?>" class="btn btn-danger fa fa-trash-o" onclick="return confirm('Are you sure you want to delete this?')"   name="delete_news_data"></a></td>
                            </tr>
                           <?php }
                      }
                        else
                      {?>
                          <tr>
                            <td colspan="3">No Data Found</td>
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







