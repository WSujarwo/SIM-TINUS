<?php
class M_log_in extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("select*from tbl_usersiswa where siswa_username='$u'and siswa_password=md5('$p')");
        return $hasil;
    }
  
}
