<?php
class shome extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('m_pengumuman');

    if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Dashboard');
            redirect($url);
        };
    $this->load->model('m_pengunjung');
  }
  function log(){
    if($this->session->userdata('akses')=='1'){
      $x['visitor'] = $this->m_pengunjung->statistik_pengujung();
      $this->load->view('siswa/dashboard',$x);
    }else{
      redirect('dashboard');
    }
  }
   function index(){ 
    $jum=$this->m_pengumuman->pengumuman();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'shome/info/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
    $x['data']=$this->m_pengumuman->pengumuman_perpage($offset,$limit);
    //$x['brt']=$this->berita->beritaasc();
    $this->load->view('siswa/dashboard',$x);
  }
  // function dashboard_info(){
  //   $kode=$this->uri->segment(3);
  //       $this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
  //   $x['data']=$this->m_pengumuman->get_pengumuman_by_kode($kode);
  //   $this->load->view('siswa/dashboard_info',$x);
  // }
}