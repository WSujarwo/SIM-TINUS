<?php 
  $title ="Info | Sienta";
  $home = "";
  $info = "class='active'";
  $artikel ="";
  $tables ="";
  $jadwal = "";
  $nilai ="'";
  $absen = "";
  $tagih = "";
  $elearning="";
  include "s_header.php";
 ?>

<?php 
  function limit_words($string, $word_limit){
  $words = explode(" ",$string);
  return implode(" ",array_splice($words,0,$word_limit));
  }
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
                <a href="#">Info</a>
              </li>
              <li class="active">Terbaru</li>
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

            <div class="">
              <div class="col-xs-12">

                <div  class="">
                      <h4 class="blue">
                        <i class="green ace-icon fa fa-user bigger-110"></i>
                        Account Questions
                      </h4>

                      <div class="space-8"></div>
                                <?php
                                  $no=0;
                                  foreach ($data->result_array() as $i) :
                                     $no++;
                                     $id=$i['pengumuman_id'];
                                     $judul=$i['pengumuman_judul'];
                                     $deskripsi=$i['pengumuman_deskripsi'];
                                     $author=$i['pengumuman_author'];
                                     $tanggal=$i['tanggal'];
                                     
                                  ?>

                      <div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-2-1" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;<?php echo $judul;?>
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-2-1">
                            <div class="panel-body">
                              <?php echo $deskripsi ?>
                              <div class="info">
                                  <span class="postedby">Di Post Oleh: <?php echo $author;?></span>
                                  <span class="lastupdte">Tanggal: <i><?php echo $tanggal;?></i></span> 
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php endforeach;?>
                      </div>
                    </div>
</div>
                  </div>
                </div>

                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->

<?php
 include "s_footer.php";
?>