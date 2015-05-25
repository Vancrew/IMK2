<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

        $this->load->library('session');
        $this->load->model('anggota_model');

		
	}
	public function index()
	{
		$this->load->view('anggota/index');
	}
	public function sepeda()
	{
		$this->load->view('anggota/sepeda');
	}
	public function pendaftaran()
	{
		$this->load->view('template/header');
		$this->load->view('anggota/pendaftaran');

		// $this->load->view('template/header_petugas');
		// $this->load->view('petugas/petugas_pendaftaran');
		// $this->load->view('template/footer');
	}
	public function daftar()
	{
		$nama=$_POST['nama'];
		$noktp=$_POST['noktp'];
		$alamat=$_POST['alamat'];
		$email=$_POST['email'];
		$telp=$_POST['telp'];
		$password=$_POST['password'];
		$retval=$this->anggota_model->insert_entry($nama,$noktp,$alamat,$email,$telp,$password);
		if($retval){
			$arr = array('status' => "sukses");
			echo json_encode($arr);
		}
		else
		{
			$arr = array('status' => "gagal");
			echo json_encode($arr);
		}
	}
	public function masuk()
	{
		$this->load->view('template/header');
		$this->load->view('anggota/masuk');
	}
	public function cek_login()
	{
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		$result=$this->anggota_model->login($email,$password);
		if($result->num_rows()){
			$array = array(
                   'email'  => $email,
                   'logged_in' => TRUE,
                   'noktp' => $result->result()[0]->noktp,
                   'user' =>$result->result()[0]->nama,
                   'nama' =>$result->result()[0]->nama,
                   'hak' => 'anggota'
               );
			$this->session->set_userdata('logged_in',$array);
			
			redirect('/anggota/riwayat');
		}
		else
		{
			redirect('/anggota/masuk?login=failed');
		}
		
	}
	public function log_out(){
		$this->session->sess_destroy();
		redirect('/anggota/masuk');
	}
	public function riwayat()
	{

		
		if($this->session->userdata('logged_in')){
			
	        $session_data = $this->session->userdata('logged_in');
	        $data['user'] = $session_data['nama'];
	        $data['noktp'] = $session_data['noktp'];
	        
	        $result=$this->anggota_model->riwayat($data['noktp']);
	        $data['riwayat']=$result;
	    
	        $this->load->view('template/header');
	        $this->load->view('template/sidebar');		
			$this->load->view('anggota/riwayat',$data);	
		}
		else
		{
			redirect('/anggota/masuk');
		}
	}
	public function reservasi()
	{
		if($this->session->userdata('logged_in')){

			$session_data = $this->session->userdata('logged_in');
	        $data['user'] = $session_data['nama'];
	        $data['noktp'] = $session_data['noktp'];
	    
	        $this->load->view('template/header');
	        $this->load->view('template/sidebar');		
			$this->load->view('anggota/reservasi',$data);	
		}
		else
		{
			redirect('/anggota/masuk');
		}
	}

	public function booking()
	{
		$id_p['new']=$this->anggota_model->check_id();
		$reservation  = $_POST['reservation'];
		$tanggal = explode(" - ", $reservation);
		
		$t1 = explode("/", $tanggal[0]);
		$t2 = explode("/", $tanggal[1]);

		$id_peminjaman=$id_p['new'];
		$tanggal_peminjaman=$t1[2] . '-' . $t1[0] . '-' . $t1[1];
		$tanggal_pengembalian=$t2[2] . '-' . $t2[0] . '-' . $t2[1];
		$noktp=$_POST['noktp'];
		$jml1=$_POST['jml1'];
		$jml2=$_POST['jml2'];
		$jml3=$_POST['jml3'];
		$jml4=$_POST['jml4'];
		$biaya=$_POST['biaya'];
		$status="booking";
		$retval=$this->anggota_model->booking_sepeda($id_peminjaman,$noktp,$tanggal_peminjaman,$tanggal_pengembalian,$jml1,$jml2,$jml3,$jml4,$biaya,$status);
		if($retval){
			$arr = array('status' => "sukses");
			echo json_encode($arr);
			echo 'id reservasi = ' . $id_peminjaman;
		}
		else
		{
			$arr = array('status' => "gagal");
			echo json_encode($arr);
		}
	}

}
