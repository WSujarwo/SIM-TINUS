<?php
class usersiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('dashboard');
            redirect($url);
        };
		$this->load->model('m_usersiswa');
		$this->load->library('upload');
	}


	function index(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_usersiswa->get_usersiswa_login($kode);
		$x['data']=$this->m_usersiswa->get_all_usersiswa();
		$this->load->view('admin/v_usersiswa',$x);
	}

	function simpan_usersiswa(){
	            $config['upload_path'] = './assets/img/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/img/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/img/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $nama=$this->input->post('xnama');
	                        $jenkel=$this->input->post('xjenkel');
	                        $username=$this->input->post('xusername');
	                        $password=$this->input->post('xpassword');
                            $konfirm_password=$this->input->post('xpassword2');
                            $email=$this->input->post('xemail');
                            $nohp=$this->input->post('xkontak');
							$level=$this->input->post('xlevel');
     						if ($password <> $konfirm_password) {
     							echo $this->session->set_flashdata('msg','error');
	               				redirect('admin/usersiswa');
     						}else{
	               				$this->m_usersiswa->simpan_usersiswa($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	                    		echo $this->session->set_flashdata('msg','success');
	               				redirect('admin/usersiswa');
	               				
	               			}
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/usersiswa');
	                }
	                 
	            }else{
	            	$nama=$this->input->post('xnama');
	                $jenkel=$this->input->post('xjenkel');
	                $username=$this->input->post('xusername');
	                $password=$this->input->post('xpassword');
                    $konfirm_password=$this->input->post('xpassword2');
                    $email=$this->input->post('xemail');
                    $nohp=$this->input->post('xkontak');
					$level=$this->input->post('xlevel');
	            	if ($password <> $konfirm_password) {
     					echo $this->session->set_flashdata('msg','error');
	               		redirect('admin/usersiswa');
     				}else{
	               		$this->m_usersiswa->simpan_usersiswa_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level);
	                    echo $this->session->set_flashdata('msg','success');
	               		redirect('admin/usersiswa');
	               	}
	            } 

	}

	function update_usersiswa(){
              
              $config['upload_path'] = './assets/img/'; //path folder
              $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
              $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

              $this->upload->initialize($config);
              if(!empty($_FILES['filefoto']['name']))
              {
                  if ($this->upload->do_upload('filefoto'))
                  {
                          $gbr = $this->upload->data();
                          //Compress Image
                          $config['image_library']='gd2';
                          $config['source_image']='./assets/img/'.$gbr['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                          $config['quality']= '60%';
                          $config['width']= 300;
                          $config['height']= 300;
                          $config['new_image']= './assets/img/'.$gbr['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();

                          $gambar=$gbr['file_name'];
                          $kode=$this->input->post('kode');
                          $nama=$this->input->post('xnama');
                      $jenkel=$this->input->post('xjenkel');
                      $username=$this->input->post('xusername');
                      $password=$this->input->post('xpassword');
                        $konfirm_password=$this->input->post('xpassword2');
                        $email=$this->input->post('xemail');
                        $nohp=$this->input->post('xkontak');
              $level=$this->input->post('xlevel');
                            if (empty($password) && empty($konfirm_password)) {
                              $this->m_usersiswa->update_usersiswa_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
                          echo $this->session->set_flashdata('msg','info');
                        redirect('admin/usersiswa');
                }elseif ($password <> $konfirm_password) {
                  echo $this->session->set_flashdata('msg','error');
                        redirect('admin/usersiswa');
                }else{
                        $this->m_usersiswa->update_usersiswa($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
                          echo $this->session->set_flashdata('msg','info');
                        redirect('admin/usersiswa');
                      }
                      
                  }else{
                      echo $this->session->set_flashdata('msg','warning');
                      redirect('admin/usersiswa');
                  }
                  
              }else{
                $kode=$this->input->post('kode');
                $nama=$this->input->post('xnama');
                  $jenkel=$this->input->post('xjenkel');
                  $username=$this->input->post('xusername');
                  $password=$this->input->post('xpassword');
                    $konfirm_password=$this->input->post('xpassword2');
                    $email=$this->input->post('xemail');
                    $nohp=$this->input->post('xkontak');
          $level=$this->input->post('xlevel');
                if (empty($password) && empty($konfirm_password)) {
                        $this->m_usersiswa->update_usersiswa_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
                      echo $this->session->set_flashdata('msg','info');
                    redirect('admin/usersiswa');
            }elseif ($password <> $konfirm_password) {
              echo $this->session->set_flashdata('msg','error');
                    redirect('admin/usersiswa');
            }else{
                    $this->m_usersiswa->update_usersiswa_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
                      echo $this->session->set_flashdata('msg','warning');
                    redirect('admin/usersiswa');
                  }
              }
  }
	            


	function hapus_usersiswa(){
		$kode=$this->input->post('kode');
		$data=$this->m_usersiswa->get_usersiswa_login($kode);
		$q=$data->row_array();
		$p=$q['siswa_poto'];
		$path=base_url().'assets/images/'.$p;
		delete_files($path);
		$this->m_usersiswa->hapus_usersiswa($kode);
	    echo $this->session->set_flashdata('msg','success-hapus');
	    redirect('admin/usersiswa');
	}

	function reset_password(){
   
        $id=$this->uri->segment(4);
        $get=$this->m_usersiswa->getusername($id);
        if($get->num_rows()>0){
            $a=$get->row_array();
            $b=$a['siswa_username'];
        }
        $pass=rand(123456,999999);
        $this->m_usersiswa->resetpass($id,$pass);
        echo $this->session->set_flashdata('msg','show-modal');
        echo $this->session->set_flashdata('uname',$b);
        echo $this->session->set_flashdata('upass',$pass);
	    redirect('admin/usersiswa');
    }
  }