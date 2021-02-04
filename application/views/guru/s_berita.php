<?php 
  $title ="Berita | Sienta";
  $home = "";
  $info = "";
  $artikel ="class='active'";
  $tables ="'";
  $jadwal = "";
  $nilai ="";
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
                <a href="#">Berita & </a>
              </li>
              <li class="active"> Artikel</li>
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
            <div class="page-header">
              <h1>
                Artikel dan Berita Seputar Kegiatan Tiara Nusa
                
              </h1>
            </div><!-- /.page-header -->


                        <div class="">
                      <!-- Banner -->

                         <!-- Content Heading -->
                          <div id=""> 
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
                                  <li>
                                    <div style="width:55px;  padding-top:0px;  float:left;" ><a href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" target="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>"><img style="border: solid 1px #d5d5d5;" width="186" height="96" src="<?php echo base_url().'assets/images/'.$tulisan_gambar;?>" target="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" alt="" /></a></div>
                                        <div style="margin-left: 200px;">
                                          <h6 style="font-size:11px;  padding-bottom:0px;  color:#3a5998;  font-weight:bold;"><a style="color:#08387f;" href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" target="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" class=""><?php echo $tulisan_judul;?></a></h6>
                                            <?php echo limit_words($tulisan_isi,20).'...'?>
                                            <hr>
                                            
                                            <div style="padding-top: 0px;" class="">
                                              <span style="padding-right:21px;float:left;" >Di Post Oleh: <?php echo $tulisan_author;?></span>
                                                <span style="padding-right:29px;float:left;" > Tanggal:<i><?php echo $tulisan_tanggal;?></i></span> 
                                                <span class="comments">Dibaca: <strong><?php echo $tulisan_views;?></strong> Kali</span> 
                                                <a class="moreinfo" style=" padding-right:2px;  color:#89ab20;  font-size:10px;"  href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" target="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>">Baca Selengkapnya</a>
                                            </div>
                                         </div>

                                         <div class="clear"></div>
                                  </li>
                                   <hr>
                                <?php endforeach;?>
                                </ul>
                                <div class="clear"></div>
                                <!-- pagination Listing -->
                                    <div style="background-color:#e7f1ff;   width:100%;  height:23px;   margin-bottom:8px;   border-bottom:solid 1px #89ab20;" class="">
                                      <ul>
                                        <li style="float:left;   color:#747474;   padding-top:0px;   padding-right:6px;font-size: 15px"><?php echo $page;?></li>
                                            
                                        </ul>
                                    </div></div>
                              <div class="clear"></div>    
                           </div>      
                         <div class="clear"></div>
                     </div>
</div>
</div>
<?php
 include "s_footer.php";
?>