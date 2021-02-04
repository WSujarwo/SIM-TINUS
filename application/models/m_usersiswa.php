<?php
class M_usersiswa extends CI_Model{

  function get_all_usersiswa(){
    $hsl=$this->db->query("SELECT tbl_usersiswa.*,IF(siswa_jenkel='L','Laki-Laki','Perempuan') AS jenkel FROM tbl_usersiswa");
    return $hsl;  
  }

  function simpan_usersiswa($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
    $hsl=$this->db->query("INSERT INTO tbl_usersiswa (siswa_nama,siswa_jenkel,siswa_username,siswa_password,siswa_email,siswa_nohp,siswa_level,siswa_poto) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level','$gambar')");
    return $hsl;
  }

  function simpan_usersiswa_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level){
    $hsl=$this->db->query("INSERT INTO tbl_usersiswa (siswa_nama,siswa_jenkel,siswa_username,siswa_password,siswa_email,siswa_nohp,siswa_level) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level')");
    return $hsl;
  }

  //UPDATE PENGGUNA //
  function update_usersiswa_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
    $hsl=$this->db->query("UPDATE tbl_usersiswa set siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_username='$username',siswa_email='$email',siswa_nohp='$nohp',siswa_level='$level',siswa_poto='$gambar' where siswa_id='$kode'");
    return $hsl;
  }
  function update_usersiswa($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
    $hsl=$this->db->query("UPDATE tbl_usersiswa set siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_username='$username',siswa_password='$password',siswa_email='$email',siswa_nohp='$nohp',siswa_level='$level',siswa_poto='$gambar' where siswa_id='$kode'");
    return $hsl;
  }

  function update_usersiswa_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
    $hsl=$this->db->query("UPDATE tbl_usersiswa set siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_username='$username',siswa_email='$email',siswa_nohp='$nohp',siswa_level='$level' where siswa_id='$kode'");
    return $hsl;
  }
  function update_usersiswa_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
    $hsl=$this->db->query("UPDATE tbl_usersiswa set siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_username='$username',siswa_password='$password',siswa_email='$email',siswa_nohp='$nohp',siswa_level='$level' where siswa_id='$kode'");
    return $hsl;
  }
  //END UPDATE PENGGUNA//

  function hapus_usersiswa($kode){
    $hsl=$this->db->query("DELETE FROM tbl_usersiswa where siswa_id='$kode'");
    return $hsl;
  }
  function getusername($id){
    $hsl=$this->db->query("SELECT * FROM tbl_usersiswa where siswa_id='$id'");
    return $hsl;
  }
  function resetpass($id,$pass){
    $hsl=$this->db->query("UPDATE tbl_usersiswa set siswa_password=md5('$pass') where siswa_id='$id'");
    return $hsl;
  }

  function get_usersiswa_login($kode){
    $hsl=$this->db->query("SELECT * FROM tbl_usersiswa where siswa_id='$kode'");
    return $hsl;
  }


}