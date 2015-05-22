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
    function pinjam_sepeda($tanggal_peminjaman,$noktp,$tanggal_pengembalian,$jml_spd_anak,$jml_spd_standar,$jml_spd_gunung,$jml_spd_tandem,$status)
    {
        $data = array(
           'tanggal_peminjaman' => $tanggal_peminjaman ,
           'noktp' => $noktp ,
           'tanggal_pengembalian' => $tanggal_pengembalian,
           'jml_spd_anak' => $jml_spd_anak,
           'jml_spd_standar' =>$jml_spd_standar,
           'jml_spd_gunung' =>$jml_spd_gunung,
           'jml_spd_tandem' =>$jml_spd_tandem,
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