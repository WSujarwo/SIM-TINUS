<?php 
  $title ="Keuangan | Sienta";
    $home = "";
  $info = "";
  $nilai ="";
  $absen = "";
  $uang = "class='active-menu'";
  include "header.php";
 ?>
<div id="page-wrapper" >
            <div id="page-inner">
<div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10">
              <div class="invoice-body">
                <div class="pull-left">
                  <h2><?php echo $c['siswa_nama'];?></h2>
                  <address>
                <img width="100" src="<?php echo base_url().'assets/img/'.$c['siswa_poto']?>" class="img-circle img-responsive"/>
              </address>
                </div>
                <!-- /pull-left -->
                <div class="pull-right">
                  <h2>invoice</h2>
                </div>
                <!-- /pull-right -->
                <div class="clearfix"></div>
                <br>
                <div class="row">
                  <div class="col-md-9">
                    <h4>Tata Usaha</h4>
                    <address>
                  <strong>SMK Tiara Nusa</strong><br>
                  Jl. Setu Jatijajar<br>
                  Tapos Depok<br>
                  <abbr title="Phone">P:</abbr> (021) 8791 9619
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> INVOICE NO : </div>
                      <div class="pull-right"> 000283 </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> INVOICE DATE : </div>
                      <div class="pull-right"> 15/03/14 </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left"> Total Due : </div>
                      <div class="pull-right"> 8,000 USD </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /invoice-body -->
                </div>
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-center">QTY</th>
                      <th class="text-left">DESCRIPTION</th>
                      <th style="width:140px" class="text-right">UNIT PRICE</th>
                      <th style="width:90px" class="text-right">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>Flat Pack Heritage</td>
                      <td class="text-right">$429.00</td>
                      <td class="text-right">$429.00</td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>Carry On Suitcase</td>
                      <td class="text-right">$300.00</td>
                      <td class="text-right">$600.00</td>
                    </tr>
                    <tr>
                      <td colspan="2" rowspan="4">
                        <h4>Terms and Conditions</h4>
                        <p>Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.</p>
                        <td class="text-right"><strong>Subtotal</strong></td>
                        <td class="text-right">$1029.00</td>
                    </tr>
                    <tr>
                      <td class="text-right no-border"><strong>Shipping</strong></td>
                      <td class="text-right">$0.00</td>
                    </tr>
                    <tr>
                      <td class="text-right no-border"><strong>VAT Included in Total</strong></td>
                      <td class="text-right">$0.00</td>
                    </tr>
                    <tr>
                      <td class="text-right no-border">
                        <div class="well well-small green"><strong>Total</strong></div>
                      </td>
                      <td class="text-right"><strong>$1029.00</strong></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
              </div>
                    <!--  end  Context Classes  -->
                </div>
