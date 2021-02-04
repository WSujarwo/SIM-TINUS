<?php 
  $title ="Info | Sienta";
    $home = "";
  $info = "class='active-menu'";
  $nilai ="";
  $absen = "";
  $uang = "";
  include "header.php";
 ?>

 <?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
                
    ?>

 <div id="page-wrapper" >

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                     <h2>Berita Terbaru</h2>   
                        <h5>Berita  seputar kegiatan akademik dan Non akademik terbaru  SMK Tiara Nusa </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
<div class="row">
                
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                  <?php
                                  $no=0;
                                  foreach ($data->result_array() as $i) :
                                     $no++;
                                     $tulisan_id=$i['tulisan_id'];
                                     $tulisan_judul=$i['tulisan_judul'];
                                     $tulisan_isi=$i['tulisan_isi'];
                                     $tulisan_tanggal=$i['tanggal'];
                                     $tulisan_author=$i['tulisan_author'];
                                     $tulisan_gambar=$i['tulisan_gambar'];
                                     $tulisan_views=$i['tulisan_views'];
                                     $kategori_id=$i['tulisan_kategori_id'];
                                     $kategori_nama=$i['tulisan_kategori_nama'];
                                     
                                  ?>
                                        <tr>
                                            <td >
                                                <div style="" class="thumb"><a href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" target="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>"><img width="156" height="86" src="<?php echo base_url().'assets/images/'.$tulisan_gambar;?>"  alt="" /></a></div>
                                            </td>

                                            <td>
                                                <div class="description">
                                                    <h3><a href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" target="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" class=""><?php echo $tulisan_judul;?></a></h3>
                                                    <?php echo limit_words($tulisan_isi,10).'...'?>
                                                    <div class="">
                                                        <span class="postedby">Di Post Oleh: <?php echo $tulisan_author;?></span>
                                                        <span class="lastupdte"> Tanggal: <i><?php echo $tulisan_tanggal;?></i></span> 
                                                        <a style="float: right;" class="moreinfo" href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" target="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>">Baca Selengkapnya</a>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>
                        <!-- <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Collapsible Group Item #1</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Collapsible Group Item #2</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Collapsible Group Item #3</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                           
                         <!-- Content Heading -->
                                                      
                         <!-- Content Heading -->


               
            </div>

<?php 
include "footer.php";
?>