<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

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
		$this->load->view('petugas/peminjaman');
		
	// 	$this->load->view('template/header_petugas');
	// 	$this->load->view('petugas/petugas_pembayaran');
	// 	$this->load->view('template/footer');
	}
	
	public function cek_login()
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$result=$this->petugas_model->login($username,$password);
		if($result->num_rows()){
			
			$array = array(
                   'user'  => $username,
                   'logged_in' => TRUE,
                   'hak' => $result->result()[0]->Hak_Akses
               );
			$this->session->set_userdata($array);
			
			redirect('/petugas/gudang_sepeda');
		}
		else
		{
			echo "login gagal";
		}
		
	}
	public function home()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
	}
	public function log_out(){
		$this->session->sess_destroy();
		redirect('/petugas/masuk');
	}
	public function gudang_sepeda()
	{
		$crud=new Grocery_CRUD();
        $crud->set_table('sepeda')
            	->required_fields('NO_ID','Jenis','Status');
                
        $output = $crud->render();
		
		$this->load->view('template/header',$output);
		$this->load->view('template/sidebar');
		$this->load->view('petugas/gudang_sepeda',$output);
	}
	public function peminjaman()
	{
		$this->load->view('petugas/peminjaman');
	}
	public function pendaftaran()
	{
		$this->load->view('petugas/pendaftaran');
	}
	public function pengembalian()
	{
		$this->load->view('petugas/pengembalian');
	}
	public function masuk()
	{

		$this->load->view('petugas/masuk');
	}
}
