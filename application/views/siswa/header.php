<!DOCTYPE html>
<html lang="en">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
  <!-- BOOTSTRAP STYLES-->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/sit.png'?>">
  <link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url().'assets/js/morris/morris-0.4.3.min.css'?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url().'assets/css/custom.css'?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="<?php echo base_url().'http://fonts.googleapis.com/css?family=Open+Sans'?>" rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <!-- <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img width="200" src="<?php echo base_url().'assets/images/sienta5.gif'?>"></a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Nama Siswa &nbsp;<a href="<?php echo base_url().'administrator/logout'?>" class="fa fa-sign-out btn btn-danger circle-btn-adjust">Logout</a> </div> -->
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_usersiswa WHERE siswa_id='$id_admin'");
              $c=$q->row_array();
          ?>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <!-- <?php echo base_url().'assets/images/'.$c['pengguna_photo'];?> -->
                    <img src="<?php echo base_url().'assets/img/'.$c['siswa_poto']?>" class="user-image img-responsive"/>
          </li>
          <li><img width="250" src="<?php echo base_url().'template/images/sienta5.gif'?>" alt=""></li>
                  
                    <li >
                        <a <?php echo $home; ?> href="<?php echo base_url().'murid/dashboard'?>"><i class="fa fa-home "></i> Home</a>
                    </li>
                    <li >
                        <a <?php echo $info; ?> href="<?php echo base_url().'murid/info'?>"><i class="fa fa-desktop "></i> Info Terbaru</a>
                    </li>
                    <li  >
                        <a <?php echo $nilai; ?> href="<?php echo base_url().'Nilai/ponten'?>"><i class="fa fa-table "></i> Nilai</a>
                    </li>
                    <li  >
                        <a <?php echo $absen; ?> href="<?php echo base_url().'Absensi/absen'?>"><i class="fa fa-qrcode "></i> Absensi</a>
                    </li>
                    <li >
                        <a  <?php echo $uang; ?> href="<?php echo base_url().'Keuangan/uang'?>"><i class="fa fa-bar-chart-o "></i> Administrasi Keuangan </a>
                    </li>
                  <li  >
                        <a  href="<?php echo base_url().'administrator/logout'?>"><i class="fa fa-sign-out "></i> Logout</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->