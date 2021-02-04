<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/sit.png'?>">
    <meta name="description" content="frequently asked questions using tabs and accordions" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/css/bootstrap.min.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/font-awesome/4.5.0/css/font-awesome.min.css'?>" />

    <!-- page specific plugin styles -->
    <link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/css/fonts.googleapis.com.css'?>" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style'?>" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/css/ace-skins.min.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/css/ace-rtl.min.css'?>" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <!-- <script src="<?php echo base_url().'assets/siwa/js/ace-extra.min.js'?>"></script> -->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
<?php
  $id_admin=$this->session->userdata('idadmin');
  $q=$this->db->query("SELECT * FROM tbl_usersiswa WHERE siswa_id='$id_admin'");
  $c=$q->row_array();
?>
  </head>

  <body class="no-skin">
    <div style="padding-left: 20px;" class=" navbar-default          ace-save-state">
    <button  type="button" class=" btn-info  btn-block navbar-toggle menu-toggler pull-right" id="menu-toggler" data-target="#sidebar"> <img style="padding-top: 0px;" width="120" src="<?php echo base_url().'assets/images/sientaa.gif'?>">
<i class="fa fa-list fa-2x pull-right"></i>

        </button>
</div></div>
    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>

      <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
          try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
          <!-- <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_usersiswa WHERE siswa_id='$id_admin'");
              $c=$q->row_array();
          ?> -->
<span class="img-circle profile-picture">
                                <img width="100" class="img-circle img-responsive" alt="<?php echo $c['siswa_nama'];?>" src="<?php echo base_url().'assets/img/'.$c['siswa_poto']?>" />
                              </span>
          
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
          <li <?php echo $home; ?>>
            <a href="<?php echo base_url().'teach/home'?>">
              <i class="menu-icon fa fa-tachometer"></i>
              <span class="menu-text"> Home </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li <?php echo $info; ?>>
            <a href="<?php echo base_url().'teach/info'?>">
              <i class="menu-icon fa fa-list-alt"></i>
               Info Terbaru
            </a>

            <b class="arrow"></b>
           </li>

          <li <?php echo $artikel; ?>>
            <a href="<?php echo base_url().'berita_s'?>" >
              <i class="menu-icon fa fa-desktop"></i>
              <span class="menu-text">
                Berita / Artikel
              </span>
            </a>
          </li>

          <li <?php echo $tables; ?>>
            <a  class="dropdown-toggle">
              <i class="menu-icon fa fa-table"></i>
              <span class="menu-text"> Tables </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
              <li <?php echo $jadwal; ?>>
                <a href="<?php echo base_url().'teach/jadwal'?>">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Jadwal Pelajaran
                </a>

                <b class="arrow"></b>
              </li>
              <li <?php echo $absen; ?>>
                <a href="<?php echo base_url().'teach/absen'?>">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Absensi
                </a>

                <b class="arrow"></b>
              </li>

              <li <?php echo $nilai; ?>>
                <a href="<?php echo base_url().'teach/nilai'?>">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Nilai
                </a>

                <b class="arrow"></b>
              </li>
            </ul>
          </li>

          

          <li <?php echo $tagih; ?>>
            <a href="<?php echo base_url().'teach/tagih'?>">
              <i class="menu-icon fa fa-money"></i>
              Tagihan
            </a>

            <b class="arrow"></b>
          </li>

          <li <?php echo $elearning; ?>>
            <a href="<?php echo base_url().'teach/elearning'?>">
              <i class="menu-icon fa fa-book"></i>
              E-Learning
            </a>

            <b class="arrow"></b>
          </li>

          <li>
            <a href="<?php echo base_url().'home/logout'?>">
              <i class="menu-icon fa fa-sign-out"></i>
              Log Out
            </a>

            <b class="arrow"></b>
          </li>


          
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
      </div></ul>