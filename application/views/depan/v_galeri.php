<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeri</title>
<!-- Stylesheet -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
<link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/ddsmoothmenu.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/jquery.fancybox-1.3.4.css'?>" media="screen" />
<!-- Javascript -->
<script src="<?php echo base_url().'template/js/jquery.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'template/js/ddsmoothmenu.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'template/js/contentslider.js'?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jcarousellite_1.0.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.easing.1.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/cufon-yui.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/DIN_500.font.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/menu.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/tabs.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.mousewheel-3.0.4.pack.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.fancybox-1.3.4.pack.js'?>"></script>
</head>
<body>
<div id="bg">
<!-- Wapper Sec -->
	<div id="wrapper_sec">
		 <!-- masterhead -->
			<div id="masterhead">
				<!-- Logo -->
                	<div class="logo"><a href="<?php echo base_url().''?>">&nbsp;&nbsp;<img height="50" width="70" src="<?php echo base_url().'template/images/tinus.png'?>" alt="" />&nbsp;&nbsp;&nbsp;<img width="380" height="50" src="<?php echo base_url().'template/images/msie.gif'?>" alt="" /></a>
                    <br><img width="460" src="<?php echo base_url().'template/images/sistem5.png'?>" alt="" /></div>
                  <!-- masterhead Right Section -->
                      <div class="topright_sec">
                        <!-- top navigation -->
                          <div class="topnavigation">
                                  <button class="btn btn-success" href="<?php echo base_url().'s_home'?>">
                                    <ul>
                                          <li class=" ">&nbsp;</li>
                                          <li class=""><a href="<?php echo base_url().'Administrator'?>" target="<?php echo base_url().'Administrator'?>">LOGIN </a></li>
                                          <li><a href="<?php echo base_url().'administrator'?>" target="<?php echo base_url().'s_home'?>">ADMIN</a></li>
                                          <li class="">&nbsp;</li>
                                    </ul>
                                  </button>
                                </div>
                                <div class="clear"></div>
                          <!-- top search -->
                                  <div class="top_search">
                                      <div class="advance_search"><a href="#"></a></div>
                                      <form action="<?php echo base_url().'berita/search'?>" method="post">
                                        <ul>
                                          <li><input name="textcari" type="text" placeholder="Pencarian" /></li>
                                            <li><button class="search" type="submit">Search</button></li>
                                         </ul>
                                      </form>
                                        
                                    </div>
                          <div class="clear"> </div>        
                      </div>
                    <div class="clear"></div>
                    	  <!-- Navigation -->
                              <div class="navigation">
                                  <div id="smoothmenu1" class="ddsmoothmenu">
                                      <ul>
                                          <li class="first"><a href="<?php echo base_url().''?>">Home</a></li>
                                          <li><a href="#">Profil</a> 
                                              <!-- Sub Menu level 1 -->    
                                                  <ul>
                                                      <li><a href="<?php echo base_url().'kata_sambutan'?>">Kata Sambutan</a></li>
                                                      <li><a href="<?php echo base_url().'profil'?>">Profil Sekolah</a></li>
                                                      <li><a href="<?php echo base_url().'visi_misi'?>">Visi Misi</a></li>
                                                      
                                                  </ul>     
                                          </li>
                                          <li><a href="<?php echo base_url().'guru'?>">Guru</a> </li>
                                          <li><a href="#">Kesiswaan</a>
                                              <ul>
                                                  <li><a href="<?php echo base_url().'siswa'?>">Data Siswa</a></li>
                                                  <li><a href="<?php echo base_url().'prestasi_siswa'?>">Prestasi Siswa</a></li>
                                              </ul>     
                                          </li>
                                          <li><a href="<?php echo base_url().'berita'?>">Berita</a> </li>
                                          <li><a href="<?php echo base_url().'agenda'?>">Agenda</a></li>
                                          <li><a class="selected" href="<?php echo base_url().'galeri'?>">Gallery</a> </li>
                                          <li><a href="<?php echo base_url().'download'?>">Download</a> </li>
                                          <li><a href="<?php echo base_url().'pengumuman'?>">Pengumuman</a></li>
                                          <li><a href="<?php echo base_url().'kontak'?>" class="last">Hubungi Kami</a></li>
                                          
                                      </ul>       
                                  </div>
                           <!-- navigation ends -->       		                            
             	     <div class="clear"></div>	
                 </div>    
		    </div>
		<!-- Content Seciton -->
        	<div id="content_section">
           		<!-- News Updates -->
            		
                    <div class="clear"></div>
				<!-- Gallery -->
                	<div class="gallery">
                    	<div class="gallery_top">
                        	<div class="gallery_heading">
                            	<h2>Gallery Photo</h2>
                            </div>
                            <div class="select_gallery">
                            	
                            </div>
                            <div class="clear"></div>
                        </div>
                    	<!-- Col1 -->
                        	<div class="categorydiv">
                            	<ul>
                                	  <li><a class="selected" href="#">Semua</a></li>
                                    <?php 
                                      foreach ($alb->result_array() as $i) {
                                        $alb_id=$i['album_id'];
                                        $alb_nama=$i['album_nama'];
                                      
                                    ?>
                                    <li><a href="<?php echo base_url().'galeri/album/'.$alb_id;?>"><?php echo $alb_nama;?></a></li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                    		<div class="thumbdiv">
                            	<ul>
                                  <?php
                                    foreach ($all_galeri->result_array() as $a) {
                                      $id=$a['galeri_id'];
                                      $judul=$a['galeri_judul'];
                                      $gambar=$a['galeri_gambar'];
                                      
                                  ?>
                                	  <li><a href="<?php echo base_url().'assets/images/'.$gambar?>" rel="galleryimg" class="galleryimg" title="<?php echo $judul;?>" ><img width="108" height="101" src="<?php echo base_url().'assets/images/'.$gambar?>"  alt="" /></a></li>
                                  <?php } ?>
                              </ul>
                            <div class="hdiv">&nbsp;</div>
                            </div>
                            
                    </div>    	
                <div class="clear"></div>
		    </div>	
		<div class="clear"></div>
	</div>
</div>    
<!-- Footer Section -->
<?php $this->load->view('depan/v_footer');?>
</body>
</html>