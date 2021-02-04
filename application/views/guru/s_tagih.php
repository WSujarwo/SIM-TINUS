<?php 
  $title ="Keuangan | Sienta";
  $home = "";
  $info = "";
  $artikel ="";
  $tables ="";
  $jadwal = "";
  $nilai ="";
  $absen = "";
  $tagih = "class='active'";
  $elearning="";
  include "s_header.php";
 ?>


      <div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
              </li>

              <li>
                <a href="#">Administrasi </a>
              </li>

              <li class="active">Keuangan</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
              <form class="form-search">
                <span class="input-icon">
                  <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                  <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
              </form>
            </div><!-- /.nav-search -->
          </div>

          <div class="page-content">
            
<div class="row">
                  <div class="col-md-12 ">
                    <div class="widget-box transparent">
                      <div class="widget-header widget-header-large">
                        <h3 class="widget-title grey lighter">
                          <i class="ace-icon fa fa-money green"></i>
                          Bill Informastion / Informasi Tagihan
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
<div class="space"></div>
                      <div class="widget-body ">
                        <div class="widget-main padding-24">

                          <div class="table-responsive">
                            <h4 class="red"><?php echo $c['siswa_nama'];?></h4>
                            <table style="border: 1px solid #dddddd; border-right:0px; border-left:0px;" width="100%" class="table-condensed table-hover ">
                              <thead>
                                <tr>
                                  <th class="center">#</th>
                                  <th>Product</th>
                                  <th class="hidden-xs">Description</th>
                                  <th class="hidden-480">Discount</th>
                                  <th>Total</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td class="center">1</td>

                                  <td>
                                    <a href="#">google.com</a>
                                  </td>
                                  <td class="hidden-xs">
                                    1 year domain registration
                                  </td>
                                  <td class="hidden-480"> --- </td>
                                  <td align="right">Rp. 10.000</td>
                                </tr>

                                <tr>
                                  <td class="center">2</td>

                                  <td>
                                    <a href="#">yahoo.com</a>
                                  </td>
                                  <td class="hidden-xs">
                                    5 year domain registration
                                  </td>
                                  <td class="hidden-480"> 5% </td>
                                  <td align="right">Rp. 45.000</td>
                                </tr>

                                <tr>
                                  <td class="center">3</td>
                                  <td>Hosting</td>
                                  <td class="hidden-xs"> 1 year basic hosting </td>
                                  <td class="hidden-480"> 10% </td>
                                  <td align="right">Rp. 90.000</td>
                                </tr>

                                <tr>
                                  <td class="center">4</td>
                                  <td>Design</td>
                                  <td class="hidden-xs"> Theme customization </td>
                                  <td class="hidden-480"> 50% </td>
                                  <td align="right">Rp. 250.000</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
<div class="space"></div>

                          <div class="row">
                            <div class="col-sm-12 pull-right">
                              <h4 class="pull-right">
                                Total amount :
                                <span class="red">Rp. 395.000</span>
                              </h4>
                            </div>
                          </div>

                          <div class="space-6"></div>
                          <div class="well">
                            <ul type="">
                              <li>Pembayaran SPP dilakukan paling lambat tanggal 10 setiap bulannya</li>
                              <li>Demi Kelancaran Kegiatan belajar mengajar, mohon segera lunasi tagihan biaya pendidikan anda. </li>
                              <li><em><small>Abaikan jika sudah dilunasi</small></em></li>
                          </ul>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


          </div>
        </div><!---main-content-->
      </div>

<?php
 include "s_footer.php";
?>