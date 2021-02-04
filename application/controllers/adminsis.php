<?php
class adminsis extends CI_Controller{
  function __construct(){
    parent::__construct();
        $this->load->model('m_log_in');

  }
  function index(){
    $this->load->view('guru/s_login');
  }

     function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_log_in->cekadmin($u,$p);
        if($cadmin->num_rows > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcadmin=$cadmin->row_array();
         if($xcadmin['siswa_level']=='1')
            $this->session->set_userdata('akses','1');
            $idadmin=$xcadmin['siswa_id'];
            $user_nama=$xcadmin['siswa_nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
         if($xcadmin['siswa_level']=='2'){
             $this->session->set_userdata('akses','2');
             $idadmin=$xcadmin['siswa_id'];
             $user_nama=$xcadmin['siswa_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
         } //Front Office
           
         
        }
        
        if($this->session->userdata('masuk')==true){
            redirect('adminsis/berhasillogin');
        }else{
            redirect('adminsis/gagallogin');
        }
    }
        function berhasillogin(){
            redirect('teach/home/index');
        }
        function gagallogin(){
            $url=base_url('adminsis');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            redirect($url);
        }
        function logout(){
            $this->session->sess_destroy();
            $url=base_url('adminsis');
            redirect($url);
        }
}