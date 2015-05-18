<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
		$this->load->database();
        $this->load->library('session');
        $this->load->model('petugas_model');
        $this->load->library('grocery_CRUD');

		
	}
	public function index()
	{
		$this->load->view('anggota/pendaftaran');
	}
	public function tambah_petugas()
	{
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
			echo "sukses";
		}
	}
	public function data_petugas()
	{
		$crud= new Grocery_CRUD();
        $crud->set_table('petugas')
            	->required_fields('Nama','No_KTP','Alamat','Telepon','Email');
                
        $output = $crud->render();
		
		$this->load->view('template/header',$output);
		$this->load->view('template/sidebar');
		$this->load->view('admin/data_petugas',$output);
	}

	public function data_anggota()
	{
		$crud= new Grocery_CRUD();
        $crud->set_table('anggota')
            	->required_fields('nama','noktp','alamat','email','telp');
                
        $output = $crud->render();
		
		$this->load->view('template/header',$output);
		$this->load->view('template/sidebar');
		$this->load->view('admin/data_petugas',$output);
	}

	public function cek_login()
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$result=$this->anggota_model->login($email,$password);
		if($result->num_rows()){
			$array = array(
                   'email'  => $email,
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($array);
			redirect('/anggota/riwayat');
		}
		else
		{
			echo "login gagal";
		}
		
	}
	public function log_out(){
		$this->session->sess_destroy();
		redirect('/anggota/masuk');
	}
	public function riwayat()
	{
		
		if($this->session->userdata('logged_in')){
			$this->load->view('anggota/riwayat');	
		}
		else
		{
			redirect('/anggota/masuk');
		}
	}
}
