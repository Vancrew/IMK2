<?php 
class Anggota_model extends CI_Model {

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
        // if ($this->db->_error_message())
        // {
        //     return 0;
        // }
        return 1;
    }
    
    function riwayat($noktp)
    {
       
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.noktp = peminjaman.noktp');
        $this->db->where('anggota.noktp', $noktp);
        $query=$this->db->get(); 
        return $query->result_array();
    }

    function login($email,$password)
    {
        $query = $this->db->get_where('anggota', array('email' => $email,'password' => $password), 1);
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