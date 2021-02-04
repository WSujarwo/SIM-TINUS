<?php 
  $title ="Home | Sienta";
  $home = "class='active'";
  $info = "";
  $artikel ="";
  $tables ="";
  $jadwal = "";
  $nilai ="";
  $absen = "";
  $tagih = "";
  $elearning="";
  include "s_header.php";
 ?>
<?php
$id_admin=$this->session->userdata('idadmin');
$q=$this->db->query("SELECT * FROM tbl_usersiswa WHERE siswa_id='$id_admin'");
$c=$q->row_array(); ?>



<div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
              </li>

              <li>
                <a href="#">User</a>
              </li>
              <li class="active">Profile</li>
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
                Profile Pengguna
                
              </h1>
            </div><!-- /.page-header -->

            <div >
                  <div class="user-profile">
                    <div class="tabbable">
                      <ul class="nav nav-tabs padding-18">
                        <li class="active">
                          <a data-toggle="tab" href="#home">
                            <i class="green ace-icon fa fa-user bigger-120"></i>
                            Profile
                          </a>
                        </li>

                        <li>
                          <a data-toggle="tab" href="#aboutme">
                            <i class="orange ace-icon fa fa-link bigger-120"></i>
                            About Me
                          </a>
                        </li>

                        <li>
                          <a data-toggle="tab" href="#pictures">
                            <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                            Pictures
                          </a>
                        </li>
                      </ul>

                      <div class="tab-content no-border padding-24">
                        <div id="home" class="tab-pane in active">
                          <div class="row">
                            <div class="col-xs-12 col-sm-3 center">
                              <span class="profile-picture">
                                <img class="editable img-responsive" alt="<?php echo $c['siswa_nama'];?>" src="<?php echo base_url().'assets/img/'.$c['siswa_poto']?>" />
                              </span>

                              <div class="space space-4"></div>

                              <a href="#" class=" btn-sm btn-block btn-success" data-toggle="modal" data-target="#ModalEdit" >
                                
                                <span class="bigger-110">Ganti Photo Profil</span>
                              </a>

                              <a href="#" class=" btn-sm btn-block btn-primary" data-toggle="modal" data-target="#ModalEditbio">
                                
                                <span class="bigger-110">Edit Biodata</span>
                              </a>
                            </div><!-- /.col -->
  
                            <div class="col-xs-12 col-sm-9">
                              <h4 class="blue">
                                <span class="middle"><?php echo $c['siswa_nama'];?></span>

                                <span class="label label-purple arrowed-in-right">
                                  <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                  online
                                </span>
                              </h4>

                              <div class="profile-user-info">
                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Username </div>

                                  <div class="profile-info-value">
                                    <span><?php echo $c['siswa_username'];?></span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Location </div>

                                  <div class="profile-info-value">
                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                    <span>Netherlands</span>
                                    <span>Amsterdam</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Age </div>

                                  <div class="profile-info-value">
                                    <span>38</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Joined </div>

                                  <div class="profile-info-value">
                                    <span>2010/06/20</span>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Last Online </div>

                                  <div class="profile-info-value">
                                    <span>3 hours ago</span>
                                  </div>
                                </div>
                              </div>

                              <div class="hr hr-8 dotted"></div>

                              <div class="profile-user-info">
                                <div class="profile-info-row">
                                  <div class="profile-info-name"> Website </div>

                                  <div class="profile-info-value">
                                    <a href="#" target="_blank">www.alexdoe.com</a>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name">
                                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                  </div>

                                  <div class="profile-info-value">
                                    <a href="#">Find me on Facebook</a>
                                  </div>
                                </div>

                                <div class="profile-info-row">
                                  <div class="profile-info-name">
                                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                  </div>

                                  <div class="profile-info-value">
                                    <a href="#">Follow me on Twitter</a>
                                  </div>
                                </div>
                              </div>
                            </div><!-- /.col -->
                          </div><!-- /.row -->

                          <div class="space-20"></div>

                          
                        </div><!-- /#home -->

                        <div id="aboutme" class="tab-pane">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <div class="widget-box transparent">
                                <div class="widget-header widget-header-small">
                                  <h4 class="widget-title smaller">
                                    <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                    Little About Me
                                  </h4>
                                </div>

                                <div class="widget-body">
                                  <div class="widget-main">
                                    <p>
                                      My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                    </p>
                                    <p>
                                      Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                    </p>
                                    <p>
                                      The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                    </p>
                                    <p>
                                      Thanks for visiting my profile.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <div class="widget-box transparent">
                                <div class="widget-header widget-header-small header-color-blue2">
                                  <h4 class="widget-title smaller">
                                    <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                    My Hoby
                                  </h4>
                                </div>

                                <div class="widget-body">
                                  <div class="widget-main padding-16">

                                    <div class="profile-skills">
                                      <div class="progress">
                                        <div class="progress-bar" style="width:80%">
                                          <span class="pull-left">Futsal</span>
                                          <span class="pull-right">80%</span>
                                        </div>
                                      </div>

                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width:50%">
                                          <span class="pull-left">Marawis</span>

                                          <span class="pull-right">50%</span>
                                        </div>
                                      </div>

                                      <div class="progress">
                                        <div class="progress-bar progress-bar-purple" style="width:70%">
                                          <span class="pull-left">Hadroh</span>

                                          <span class="pull-right">70%</span>
                                        </div>
                                      </div>

                                      <div class="progress">
                                        <div class="progress-bar progress-bar-warning" style="width:72%">
                                          <span class="pull-left">Musik / Band</span>

                                          <span class="pull-right">72%</span>
                                        </div>
                                      </div>

                                      <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width:100%">
                                          <span class="pull-left">Potografi</span>

                                          <span class="pull-right">100%</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- /#feed -->

                        

                        <div id="pictures" class="tab-pane">
                          <ul class="ace-thumbnails">
                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-1.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>

                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-2.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>

                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-3.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>

                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-4.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>

                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-5.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>

                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-6.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>

                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-1.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>

                            <li>
                              <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="<?php echo base_url().'assets/siwa/images/gallery/thumb-2.jpg'?>" />
                                <div class="text">
                                  <div class="inner">Sample Caption on Hover</div>
                                </div>
                              </a>

                              <div class="tools tools-bottom">
                                <a href="#">
                                  <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                  <i class="ace-icon fa fa-times red"></i>
                                </a>
                              </div>
                            </li>
                          </ul>
                        </div><!-- /#pictures -->
                      </div>
                    </div>
                  </div>
                </div>

            
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
  <!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/usersiswa/update_usersiswa'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto"/>
                                        </div>
                                    </div>
                               

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

  <div class="modal fade" id="ModalEditbio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/usersiswa/update_usersiswa'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                        <div class="col-sm-7">
                      <input type="hidden" name="kode" value=""/> 
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" value="" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-7">
                                            <input type="email" name="xemail" class="form-control" value="" id="inputEmail3" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                    
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                    

                    
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xusername" class="form-control" value="" id="inputUserName" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-4 control-label">Ulangi Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkontak" class="form-control" value="<?php echo $siswa_nohp;?>" id="inputUserName" placeholder="Kontak Person" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Level</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="xlevel" required>
                      <?php if($siswa_level=='1'):?>
                                                <option value="1" selected>Siswa</option>
                                                <option value="2">Alumni</option>
                      <?php else:?>
                        <option value="1">Siswa</option>
                                                <option value="2" selected>Alumni</option>
                      <?php endif;?>
                                            </select>
                                        </div>
                                    </div>
                                                                        <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="filefoto"/>
                                        </div>
                                    </div>
                               

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
      </div><!-- /.main-content -->

<?php
 include "s_footer.php";
?>