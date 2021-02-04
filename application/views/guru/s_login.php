<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>LOG IN</title>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/sit.png'?>">
    <meta name="description" content="frequently asked questions using tabs and accordions" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/css/bootstrap.min.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/siwa/font-awesome/4.5.0/css/font-awesome.min.css'?>" />

    <!-- page specific plugin styles -->

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
    <script src="<?php echo base_url().'assets/siwa/js/ace-extra.min.js'?>"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
                
          .ul2{
            margin-left: 20px;
            padding-left: 7px;
            display: flex;
            /*background:#000000;
            border-radius:4px;
            border: #27ae60 1px solid;*/
            float: center;
          }
          .ul2 li{
            list-style: none;
            color:  #484848;
            font-family: arial;
            /*font-size: 2em;*/
            /*letter-spacing: 15px;*/
            animation: ani 2.4s linear infinite;
          }
          @keyframes ani {
            0%{
              color: #484848;
              text-shadow: none;
            }
            90%{
              color: #484848;
              text-shadow: none;
            }
            100%{
              color: #fff900;
              text-shadow: 0 0 7px #fff900,0 0 50px #ff6c00;
            }
          }
          ul li:nth-child(1){
            animation-delay: .2s;
          }
          ul li:nth-child(2){
            animation-delay: .4s;
          }
          ul li:nth-child(3){
            animation-delay: .8s;
          }
          ul li:nth-child(4){
            animation-delay: 1s;
          }
          ul li:nth-child(5){
            animation-delay: 1.2s;
          }
          ul li:nth-child(6){
            animation-delay: 1.4s;
          }
          ul li:nth-child(7){
            animation-delay: 1.6s;
          }
          ul li:nth-child(8){
            animation-delay: 1.8s;
          }
          ul li:nth-child(9){
            animation-delay: 2s;
          }
          ul li:nth-child(10){
            animation-delay: 2.2s;
          }
          ul li:nth-child(11){
            animation-delay: 2.4s;
          }
          ul li:nth-child(12){
            animation-delay: 2.6s;
          }
          ul li:nth-child(13){
            animation-delay: 2.8s;
          }
          ul li:nth-child(14){
            animation-delay: 3s;
          }
          ul li:nth-child(15){
            animation-delay: 3.2s;
          }
          ul li:nth-child(16){
            animation-delay: 3.4s;
          }
          ul li:nth-child(17){
            animation-delay: 3.6s;
          }
          ul li:nth-child(18){
            animation-delay: 3.8s;
          }
          ul li:nth-child(19){
            animation-delay: 4s;
          }
          ul li:nth-child(20){
            animation-delay: 4.2s;
          }
          ul li:nth-child(21){
            animation-delay: 4.4s;
          }
          ul li:nth-child(22){
            animation-delay: 4.6s;
          }
          ul li:nth-child(23){
            animation-delay: 4.8s;
          }
          ul li:nth-child(24){
            animation-delay: 5s;
          }
          ul li:nth-child(25){
            animation-delay: 5.2s;
          }
          ul li:nth-child(26){
            animation-delay: 5.4s;
          }
          ul li:nth-child(27){
            animation-delay: 5.6s;
          }
          ul li:nth-child(28){
            animation-delay: 5.8s;
          }
          ul li:nth-child(29){
            animation-delay: 6s;
          }
          ul li:nth-child(30){
            animation-delay: 6.2s;
          }
          ul li:nth-child(31){
            animation-delay: 6.4s;
          }
          ul li:nth-child(32){
            animation-delay: 6.6s;
          }
          ul li:nth-child(33){
            animation-delay: 6.8s;
          }
          ul li:nth-child(34){
            animation-delay: 7s;
          }

          ul li:nth-child(35){
            animation-delay: 7.2s;
          }

          ul li:nth-child(36){
            animation-delay: 7.4s;
          }

          ul li:nth-child(37){
            animation-delay: 7.6s;
          }

          ul li:nth-child(38){
            animation-delay: 7.8s;
          }
    </style>
  </head>

  <body class="login-layout">
    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h1>
                  <span class="red">Wellcome To</span>
                  <span class="" id="id-text2"><img width="320" height="30" src="<?php echo base_url().'assets/images/sientaa.gif'?>"></span>
                </h1>
                <h4 class="white" id="id-company-text">
                <ul class="ul2">
                    <li>S</li>
                      <li>i</li>
                        <li>s</li>
                          <li>t</li>
                            <li>e</li>
                              <li>m</li>
                              <li> &nbsp;</li>
                    
                    <li>I</li>
                      <li>n</li>
                        <li>f</li>
                          <li>o</li>
                            <li>r</li>
                              <li>m</li>
                                <li>a</li>
                                  <li>s</li>
                                    <li>i</li>
                                    <li> &nbsp;</li>
                    
                    <li>P</li>
                      <li>e</li>
                        <li>n</li>
                          <li>d</li>
                            <li>i</li>
                              <li>d</li>
                                <li>i</li>
                                  <li>k</li>
                                    <li>a</li>
                                      <li>n</li>
                                      <li> &nbsp;</li>
                    
                    <li>T</li>
                      <li>i</li>
                        <li>a</li>
                          <li>r</li>
                            <li>a</li>
                            <li> &nbsp;</li>
                    
                    <li>N</li>
                      <li>u</li>
                        <li>s</li>
                          <li>a</li>
                </ul></h4>
              </div>

              <div class="space-6"></div>
  <div>
   <p><?php echo $this->session->flashdata('msg');?></p>
  </div>
              <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-coffee green"></i>
                        Enter Your Information
                      </h4>

                      <div class="space-6"></div>

                      <form action="<?php echo base_url().'adminsis/auth'?>" method="post">
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" name="username" class="form-control" placeholder="Username" required>
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" name="password" class="form-control" placeholder="Password" required>
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>

                          <div class="space"></div>

                          <div class="clearfix">
                            <label class="inline">
                              <input type="checkbox" class="ace" />
                              <span class="lbl"> Remember Me</span>
                            </label>

                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                              <i class="ace-icon fa fa-key"></i>
                              <span class="bigger-110">Login</span>
                            </button>
                          </div>

                          <div class="space-4"></div>
                        </fieldset>
                      </form>

                      <div class="social-or-login center">
                        <span class="bigger-110">Follow us</span>
                      </div>

                      <div class="space-6"></div>

                      <div class="social-login center">
                        <a class="btn btn-primary">
                          <i class="ace-icon fa fa-facebook"></i>
                        </a>

                        <a class="btn btn-info">
                          <i class="ace-icon fa fa-twitter"></i>
                        </a>

                        <a class="btn btn-danger">
                          <i class="ace-icon fa fa-google-plus"></i>
                        </a>
                      </div>
                    </div><!-- /.widget-main -->

                    <div class="toolbar clearfix">
                      <div>
                        <a href="#" class="forgot-password-link">
                          <i class="ace-icon "></i>
                          Back To Main Site
                        </a>
                      </div>

                      <div>
                        <a href="#"  class="user-signup-link">
                          
                          
                        </a>
                      </div>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.login-box -->
