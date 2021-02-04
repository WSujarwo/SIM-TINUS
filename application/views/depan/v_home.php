<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
                                  	      <li class="first"><a class="selected" href="<?php echo base_url().''?>">Home</a></li>
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
                                                  <li><a href="<?php echo base_url().'coming'?>">Prestasi Siswa</a></li>
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
        		<!-- News Updates -->
            		
                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                    	<!-- Banner -->
                          <div id="banner">
								                <div id="slider2">
                                  <?php 
                                      foreach ($brt->result_array() as $br) {
                                        $berita_id=$br['tulisan_id'];
                                        $berita_judul=$br['tulisan_judul'];
                                        $berita_isi=$br['tulisan_isi'];
                                        $berita_kategori=$br['tulisan_kategori_nama'];
                                        $berita_gambar=$br['tulisan_gambar'];
                                        $berita_author=$br['tulisan_author'];
                                  ?>
                               		 
                                   <div class="contentdiv">
                                    	<a href="#"><img src="<?php echo base_url().'assets/images/'.$berita_gambar;?>" alt="" /></a>
                                        <div class="banner_des">
                                        	<h4><?php echo $berita_judul;?> </h4>
                                        	<?php echo limit_words($berita_isi,15).'...';?>
                                        </div>
                                    </div> 
                                      <?php } ?>
                                    
                                  
                                </div> 
                                <div id="paginate-slider2" class="pagination">
									              </div>
                       			    <script type="text/javascript" src="<?php echo base_url().'template/js/slider.js'?>" ></script>
                              
							 </div>
                         
                         <!-- Content Heading -->
                          <div class="content_heading">
                            	<div class="heading"><img width="700" src="<?php echo base_url().'template/images/sistem2.gif'?>"> </div>
                          
                            </div >
                             <p style="font-size: 20px; text-anchor: center;" class="red" >
                                 Dibangun untuk sebagai penunjang transparasi informasi dan promosi sekolah.  
                                 </p>

<div id="content2"> 
                                <h2 class="pad8">Pengumuman Terbaru</h2><hr>
                                <!-- Blog Listing -->
                                <ul class="listing">
                                <?php
                                  $no=0;
                                  foreach ($data->result_array() as $i) :
                                     $no++;
                                     $id=$i['pengumuman_id'];
                                     $judul=$i['pengumuman_judul'];
                                     $deskripsi=$i['pengumuman_deskripsi'];
                                     $link=$i['pengumuman_link'];
                                     $author=$i['pengumuman_author'];
                                     $tanggal=$i['tanggal'];
                                     
                                  ?>
                                  <li>
                                    <div class="thumb"><a href=""><iframe width="126" height="106" src="<?php echo $link;?>"  alt="" /></iframe></a></div>
                                        <div class="description">
                                          <h6><a href="<?php echo base_url().'home/pengumuman_detail'?>" class="colr"><?php echo $judul;?></a></h6>
                                            <?php echo $deskripsi;?>
                                            <div class="clear"></div>
                                            <div class="info">
                                              <span class="postedby">Di Post Oleh: <?php echo $author;?></span>
                                                <span class="lastupdte">Tanggal: <i><?php echo $tanggal;?></i></span> 
                
                                            </div>
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


                             <!-- Content Block -->
                             	
                    		<!-- col1 ends -->	
                    </div>
               <!-- Col2 -->
                	<div class="col2">
                        <div class="ads">
 
<div class="box2">
 <div> <p><?php echo $this->session->flashdata('msg');?></p></div>
<h2 align="center">Login Ruang Siswa</h2>
<br>
<form action="<?php echo base_url().'coming'?>" method="post">
<!-- <form action="<?php echo base_url().'adminsis/auth'?>" method="post"> -->
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
        <li>Sistem &nbsp;</li>
        <li></li>
        <li>Informasi &nbsp;</li>
        <li></li>
        <li>Pendidikan &nbsp;</li>
        <li></li>
        <li>Tiara &nbsp;</li>
        <li></li>
        <li>Nusa</li>
    </ul>
</div>
</div>
                          <!-- Blog Info terbaru -->  
                        		<div class="rtab">
                                	<div class="college_gallery">
                                  <div style="background-color:#92cc47;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;">Informasi Terbaru</h4></div>
                                    <div class="rtab_content" id="rtab1" style="display:none;">
                                    	<ul>
                                                    <?php
                                                      $no=0;
                                                      foreach ($agenda->result_array() as $g) :
                                                         $no++;
                                                         $agenda_id=$g['agenda_id'];
                                                         $agenda_nama=$g['agenda_nama'];
                                                         // $agenda_deskripsi=$g['agenda_deskripsi'];
                                                         // $agenda_mulai=$g['agenda_mulai'];
                                                         // $agenda_selesai=$g['agenda_selesai'];
                                                         // $agenda_tempat=$g['agenda_tempat'];
                                                         // $agenda_waktu=$g['agenda_waktu'];
                                                         // $agenda_keterangan=$g['agenda_keterangan'];
                                                         // $agenda_author=$g['agenda_author'];
                                                         // $tanggal=$g['tanggal'];
                                                       
                                                    ?>
                                                    <li>
                                                      <div class="thumb">
                                                          <a href="<?php echo base_url().'agenda'?>"><img width="35" height="40" src="<?php echo base_url().'template/images/agenda.png'?>"  alt=" " /></a>
                                                         </div>
                                                         <div class="descripton">
                                                          <h6><a href="<?php echo base_url().'agenda'?>"><?php echo $agenda_nama;?></a></h6>
                                                            <!-- <em>(Posted on <?php echo $tanggal;?>)</em>
                                                            <p><?php echo limit_words($agenda_deskripsi,10).'...'?></p> -->
                                                        
                                                        </div>
                                                    </li>
                                                  <?php endforeach;?>
                                                    <li>
                                                    
                                                </ul>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    
                                    
                                </div>
                    		<!-- Our College Gallery -->	
                                <div class="college_gallery">
                                	<div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;">Gallery Photo</h4></div>
                                	<ul>
                                    	  <?php 
                                              foreach ($galeri->result_array() as $g) {
                                                   $galeri_id=$g['galeri_id'];
                                                   $galeri_judul=$g['galeri_judul'];
                                                   $galeri_tanggal=$g['tanggal'];
                                                   $galeri_author=$g['galeri_author'];
                                                   $galeri_gambar=$g['galeri_gambar'];
                                                   $galeri_album_id=$g['galeri_album_id'];
                                                   $galeri_album_nama=$g['album_nama'];
                                              
                                          ?>
                                       <li>
                                        	<div class="thumb"><a href="<?php echo base_url().'galeri'?>"><img width="40" height="40" src="<?php echo base_url().'assets/images/'.$galeri_gambar;?>"  alt="" /></a></div> 
                                            <div class="description">
                                            	<h6><a href="<?php echo base_url().'galeri'?>"><?php echo $galeri_judul;?></a></h6>
                                                <a class="gray" href="#"><em><?php echo 'Tanggal '.$galeri_tanggal;?></em></a>
                                            </div> 
                                        </li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                    		<div class="clear"></div>	
 						<!--col2 ends -->			
              		</div>
                <div class="clear"></div>
              </div>

            </div>
			<!-- Slder -->	
      <p></p>
      <br><br>
      <br><br>

                                <!-- <button class="btn-block">
                                  <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;">PARTNER OFF TIARA NUSA</h4></div> -->
      <p class="heading"><h2>PARTNER OFF TIARA NUSA</h2></p><br>
            	<div class="image_scroll">
                	<a class="leftarrow" href="#"><img src="<?php echo base_url().'template/images/left_arrow.gif'?>"  alt="" /></a>
                    	<div class="slider1">
                        	<ul>
                    			    <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/xacti.jpg'?>"  alt="" /></a></li>
                    			    <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/toplight.jpg'?>"  alt="" /></a></li>
                    			    <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/lp3i.png'?>"  alt="" /></a></li>
                    			    <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/bnn.jpg'?>"  alt="" /></a></li>
                              <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/lapan.png'?>"  alt="" /></a></li>
                              <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/unnindra.png'?>"  alt="" /></a></li>
                               <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/bonet.jpg'?>"  alt="" /></a></li>
                                <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/btn.jpg'?>"  alt="" /></a></li>
                                 <li><a href="http://mfikri.com/"><img src="<?php echo base_url().'template/images/gip.jpg'?>"  alt="" /></a></li>

                    		</ul>
                        </div>  
                    <a class="rightarrow" href="#"><img src="<?php echo base_url().'template/images/right_arrow.gif'?>"  alt="" /></a>
                </div>
            </div>	
		<div class="clear"></div>
	</div>
</div>    
<br>
<?php $this->load->view('depan/v_footer');?>

</body>
</html>
