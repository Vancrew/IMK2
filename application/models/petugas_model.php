<?php 
class Petugas_model extends CI_Model {

    var $nama   = '';
    var $noktp = '';
    var $alamat    = '';
    var $email    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry($nama,$noktp,$alamat,$email,$telp,$password)
    {
        $data = array(
           'nama' => $nama ,
           'noktp' => $noktp ,
           'alamat' => $alamat,
           'email' => $email,
           'telp' =>$telp,
           'password' =>$password,
           'status' => 'AKTIF'
        );
        $this->db->insert('anggota', $data);
        return 1;
    }
    function check_id(){
      $q='select id_peminjaman from peminjaman order by id_peminjaman desc limit 1';

      $succ = $this->db->query($q);

      if($succ->num_rows()==1){
        foreach ($succ->result() as $row)
        {
          $id_num_str = substr($row->id_peminjaman,1);
          $id_num = (int)$id_num_str;
          $id_num=$id_num+1;

          if($id_num<10){
            $id_new='P' . '000' . $id_num;
          }
          elseif ($id_num<100) {
            $id_new='P' . '00' . $id_num;
          }
          elseif ($id_num<1000) {
            $id_new='P' . '0' . $id_num;
          }
          elseif ($id_num<10000) {
            $id_new='P' . $id_num;
          }
        }
      } else{
        $id_new='P0001';
      }
      return $id_new;
    }
    function kembali_sepeda($id_peminjaman)
    {
      $data = array(
               'status' => 'kembali'
            );

      $this->db->where('id_peminjaman', $id_peminjaman);
      $this->db->update('peminjaman', $data);
      return $this->db->affected_rows();
    }
     function booking_sepeda($id_peminjaman)
    {
      $data = array(
               'status' => 'pinjam'
            );

      $this->db->where('id_peminjaman', $id_peminjaman);
      $this->db->update('peminjaman', $data);
      return $this->db->affected_rows();
    }
    function tampilkan_data_sepeda($id_peminjaman)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->where('id_peminjaman', $id_peminjaman);

        $query=$this->db->get(); 
        return $query->result_array();
    }
    function pinjam_sepeda($id_peminjaman,$noktp,$tanggal_peminjaman,$tanggal_pengembalian,$jml_spd_anak,$jml_spd_standar,$jml_spd_gunung,$jml_spd_tandem,$biaya,$status)
    {
        $data = array(
           'id_peminjaman' => $id_peminjaman,
           'noktp' => $noktp ,
           'tanggal_peminjaman' => $tanggal_peminjaman ,
           'tanggal_pengembalian' => $tanggal_pengembalian,
           'jml_spd_anak' => $jml_spd_anak,
           'jml_spd_standar' =>$jml_spd_standar,
           'jml_spd_gunung' =>$jml_spd_gunung,
           'jml_spd_tandem' =>$jml_spd_tandem,
           'biaya' =>$biaya,
           'status' => $status
        );
        $this->db->insert('peminjaman', $data);
        return 1;
    }
    function login($username,$password)
    {
        $query = $this->db->get_where('petugas', array('username' => $username,'password' => $password), 1);
        return $query;
    }
    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}

 ?>