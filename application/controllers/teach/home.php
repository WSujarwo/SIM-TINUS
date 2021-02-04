<?php
class Home extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('adminsis');
            redirect($url);
        };
    $this->load->model('m_pengunjung');
  }
  function index(){
    if($this->session->userdata('akses')=='1'){
      $x['visitor'] = $this->m_pengunjung->statistik_pengujung();
      $this->load->view('guru/s_home',$x);
    }else{
      redirect('administrator');
    }

  }

  // function update_usersiswa(){
              
  //             $config['upload_path'] = './assets/img/'; //path folder
  //             $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
  //             $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

  //             $this->upload->initialize($config);
  //             if(!empty($_FILES['filefoto']['name']))
  //             {
  //                 if ($this->upload->do_upload('filefoto'))
  //                 {
  //                         $gbr = $this->upload->data();
  //                         //Compress Image
  //                         $config['image_library']='gd2';
  //                         $config['source_image']='./assets/img/'.$gbr['file_name'];
  //                         $config['create_thumb']= FALSE;
  //                         $config['maintain_ratio']= FALSE;
  //                         $config['quality']= '60%';
  //                         $config['width']= 300;
  //                         $config['height']= 300;
  //                         $config['new_image']= './assets/img/'.$gbr['file_name'];
  //                         $this->load->library('image_lib', $config);
  //                         $this->image_lib->resize();

  //                         $gambar=$gbr['file_name'];
  //                         $kode=$this->input->post('kode');
  //                         $nama=$this->input->post('xnama');
  //                     $jenkel=$this->input->post('xjenkel');
  //                     $username=$this->input->post('xusername');
  //                     $password=$this->input->post('xpassword');
  //                       $konfirm_password=$this->input->post('xpassword2');
  //                       $email=$this->input->post('xemail');
  //                       $nohp=$this->input->post('xkontak');
  //             $level=$this->input->post('xlevel');
  //                           if (empty($password) && empty($konfirm_password)) {
  //                             $this->m_usersiswa->update_usersiswa_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
  //                         echo $this->session->set_flashdata('msg','info');
  //                       redirect('teach/home');
  //               }elseif ($password <> $konfirm_password) {
  //                 echo $this->session->set_flashdata('msg','error');
  //                       redirect('teach/home');
  //               }else{
  //                       $this->m_usersiswa->update_usersiswa($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
  //                         echo $this->session->set_flashdata('msg','info');
  //                       redirect('teach/home');
  //                     }
                      
  //                 }else{
  //                     echo $this->session->set_flashdata('msg','warning');
  //                     redirect('teach/home');
  //                 }
                  
  //             }else{
  //               $kode=$this->input->post('kode');
  //               $nama=$this->input->post('xnama');
  //                 $jenkel=$this->input->post('xjenkel');
  //                 $username=$this->input->post('xusername');
  //                 $password=$this->input->post('xpassword');
  //                   $konfirm_password=$this->input->post('xpassword2');
  //                   $email=$this->input->post('xemail');
  //                   $nohp=$this->input->post('xkontak');
  //         $level=$this->input->post('xlevel');
  //               if (empty($password) && empty($konfirm_password)) {
  //                       $this->m_usersiswa->update_usersiswa_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
  //                     echo $this->session->set_flashdata('msg','info');
  //                   redirect('teach/home');
  //           }elseif ($password <> $konfirm_password) {
  //             echo $this->session->set_flashdata('msg','error');
  //                   redirect('teach/home');
  //           }else{
  //                   $this->m_usersiswa->update_usersiswa_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
  //                     echo $this->session->set_flashdata('msg','warning');
  //                   redirect('teach/home');
  //                 }
  //             }
  // }
  
}