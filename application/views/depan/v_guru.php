<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guru</title>
<!-- Stylesheet -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
<link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/ddsmoothmenu.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/log.css'?>" />
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
<?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
                
    ?>
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
                                          <li><a class="selected" href="<?php echo base_url().'guru'?>">Guru</a> </li>
                                          <li><a href="#">Kesiswaan</a>
                                              <ul>
                                                  <li><a href="<?php echo base_url().'siswa'?>">Data Siswa</a></li>
                                                  <li><a href="<?php echo base_url().'prestasi_siswa'?>">Prestasi Siswa</a></li>
                                              </ul>     
                                          </li>
                                          <li><a href="<?php echo base_url().'berita'?>">Berita</a> </li>
                                          <li><a href="<?php echo base_url().'agenda'?>">Agenda</a></li>
                                          <li><a href="<?php echo base_url().'galeri'?>">Gallery</a> </li>
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
        		
                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                    	<!-- Banner -->
                        	<div id="banner1">
									<a href="#"><img src="<?php echo base_url().'template/images/guru.png'?>" alt="" /></a>
                                <div class="heading">
                                	<h1>Guru dan Staff Tiara Nusa</h1>
                                </div>
                           </div>
                         
                         <!-- Content Heading -->
                         	<div id="content2">	
                                <h2 class="pad8">Data Guru</h2>
                                <!-- Blog Listing -->
                                <ul class="listing">
                                <?php
                                  $no=0;
                                  foreach ($data->result_array() as $i) :
                                     $no++;
                                     $id=$i['guru_id'];
                                     $nip=$i['guru_nip'];
                                     $nama=$i['guru_nama'];
                                     $jenkel=$i['guru_jenkel'];
                                     $tmp_lahir=$i['guru_tmp_lahir'];
                                     $tgl_lahir=$i['guru_tgl_lahir'];
                                     $mapel=$i['guru_mapel'];
                                     $photo=$i['guru_photo'];
                                    
                                  ?>
                                	<li>
                                		<div class="thumb">
                                    <?php if(empty($photo)):?>
                                    <img width="100" height="100" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" />
                                    <?php else:?>
                                    <img width="100" height="100" src="<?php echo base_url().'assets/images/'.$photo;?>"  alt="" />
                                    <?php endif;?>
                                    </div>
                                        <div class="description">
                                        	<table style="font-size:12px;">
                                              <tr>
                                                <td>NIP</td>
                                                <td>:</td>
                                                <td><?php echo $nip;?></td>
                                              </tr>
                                              <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td><?php echo $nama;?></td>
                                              </tr> 
                                              <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <?php if($jenkel=='L'):?>
                                                <td>Laki-Laki</td>
                                                <?php else:?>
                                                <td>Perempuan</td>
                                                <?php endif;?>
                                              </tr> 
                                              <tr>
                                                <td>Kelahiran</td>
                                                <td>:</td>
                                                <td><?php echo $tmp_lahir.', '.$tgl_lahir;?></td>
                                              </tr>
                                              <tr>
                                                <td>Guru Mata Pelajaran</td>
                                                <td>:</td>
                                                <td><?php echo $mapel;?></td>
                                              </tr>
                                          </table>
                                         </div>
                                         <div class="clear"></div>
                                	</li>
                                <?php endforeach;?>
                                   
                                </ul>
                                <div class="clear"></div>
                                <!-- pagination Listing -->
                               	 	  <div class="pginaiton pad9">
                                    	<ul>
                                   			<li><?php echo $page;?></li>
                                            
                                        </ul>
                                    </div>
                            	<div class="clear"></div>    
                           </div>		   
                         <div class="clear"></div>
                   	 </div>
               <!-- Col2 -->
                	<div class="col2">
                    	<div class="ads">
<div class="box2">
 <div> <p><?php echo $this->session->flashdata('msg');?></p></div>
<h2 align="center">Login Ruang Siswa</h2>
<br>
<form action="<?php echo base_url().'coming'?>" method="post">
<div><input type="text" name="username" placeholder="Username" class="email" required="">
</div>
<div>  
<input type="password" name="password" class="email" placeholder="Password" required>
</div>
<div>
<button type="submit" class="btn2">Sign In</button> <!-- End Btn -->
</div>
</form>
</div>
 <!-- End Box -->
<div class="box3">
 <img width="230"  src="<?php echo base_url().'template/images/sienta2.gif'?>"  alt=" " />
    <ul class="ul2">
        <li>Sistem &nbsp</li>
        <li></li>
        <li>Informasi &nbsp</li>
        <li></li>
        <li>Pendidikan &nbsp</li>
        <li></li>
        <li>Tiara &nbsp</li>
        <li></li>
        <li>Nusa</li>
    </ul>
</div>
                        </div>
                      <!-- Blog guru dan Siswa Baru -->


                               <!-- Post New  Blog  -->
                                 <div class="course_right">
                                  <div class="crheading" style="background-color:#92cc47;">
                                        <h5 style="margin-left: 20px;">Post Terbaru</h5>
                                  </div>
                                    <ul>
                                      <?php 
                                          $query=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_img_slider='0' ORDER BY tulisan_id DESC limit 7");
                                          foreach ($query->result_array() as $n) :
                                          $berita_id=$n['tulisan_id'];
                                          $berita_judul=$n['tulisan_judul'];
                                          $berita_isi=$n['tulisan_isi'];
                                          $berita_tgl=$n['tanggal'];
                                          $berita_kategori=$n['tulisan_kategori_nama'];
                                          $berita_gambar=$n['tulisan_gambar'];
                                          $berita_author=$n['tulisan_author'];
                                                      
                                        ?>
                                      <li>
                                          <div class="thumb"><a href="<?php echo base_url().'berita/berita_detail/'.$berita_id;?>"><img width="32" height="32" src="<?php echo base_url().'assets/images/'.$berita_gambar;?>"  alt="" /></a></div> 
                                            <div class="description">
                                              <h6 style="margin-left: 5px;"><a href="<?php echo base_url().'berita/berita_detail/'.$berita_id;?>"><?php echo $berita_judul;?></a></h6>
                                                <a class="gray1" href="#" style="margin-left: 5px;"><?php echo $berita_tgl;?> </a>
                                         </div> 
                                        </li>
                                      <?php endforeach;?>

                                    </ul>
                                </div>

                            <div class="clear"></div>

 						<!--col2 ends -->			
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