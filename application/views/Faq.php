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
        <h3><!--i class="fa fa-angle-right"></i-->FAQ</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="row content-panel">
            <h2 class="centered">Frequently Asked Questions</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em> How to find a payment if I do not see it in History?
                      </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      <p>All your payments, service and card payments can be seen in Statement. To keep your payment in History for longer, mark a payment in History as Defined.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How to print details of a payment that is not in History?
                      </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>Save needed payment as “Template” in old internet bank and within 1 day it will appear in History of new internet bank. Now you can view, print or make a new payment based on this transaction on any moment from History. Migrated payment will stay in History as long as you do not unmark in in tick-box “Defined”.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em> Which transactions need SMS confirmation?
                      </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>All transactions are confirmed with SMS, except payments between your own accounts and currency exchange. Adding funds to existing deposits are also considered as transaction between own accounts and do not need SMS confirmation.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>What is the difference between Balance and Available amounts?
                      </a>
                  </div>
                  <div id="collapseFour" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>Balance is the amount of money on your bank account. Available – amounts available to you, including credits, minus reserved amounts.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>What are reserved amounts?
                      </a>
                  </div>
                  <div id="collapseFive" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>LReserved amounts perform card(s) transactions that haven’t been yet reflected on your bank account(s). Thereby, you can see this funds in Internet bank, but cannot use.</p>
                    </div>
                  </div>
                </div>

                  <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSix">
                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Where are my defined payments?
                      </a>
                  </div>
                  <div id="collapseSix" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>Your defined payments are in menu Payments - History.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSeven">
                      <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em> How to create a defined payment?
                      </a>
                  </div>
                  <div id="collapseSeven" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>Mark any payment in History as Defined.</p>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end accordion -->
          </div>
          <!-- col-md-10 -->
 
    </section>
      <!-- /wrapper -->
  </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->


</body>

</html>
