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
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
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
			$this->session->set_userdata('logged_in',$array);
			echo $result->result()[0]->Hak_Akses;
			redirect('/petugas/gudang_sepeda');
		}
		else
		{
			redirect('/petugas/masuk?login=failed');
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
        	->required_fields('NO_ID','Jenis','Status')
        		->columns('NO_ID','Jenis','Status');
         
                
        $output = $crud->render();
		
		$this->load->view('template/header',$output);
		$this->load->view('template/sidebar');
		$this->load->view('petugas/gudang_sepeda',$output);
	}
	public function peminjaman()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('petugas/peminjaman');
	}

	public function pinjam()
	{
		$id_p['new']=$this->petugas_model->check_id();
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
		$status="pinjam";
		$retval=$this->petugas_model->pinjam_sepeda($id_peminjaman,$noktp,$tanggal_peminjaman,$tanggal_pengembalian,$jml1,$jml2,$jml3,$jml4,$biaya,$status);
		if($retval){
			$arr = array('status' => "sukses");
			echo json_encode($arr);
			redirect(site_url().'/petugas/peminjaman?status=sukses&id='.$id_peminjaman);
		}
		else
		{
			$arr = array('status' => "gagal");
			echo json_encode($arr);
			redirect(site_url().'/petugas/peminjaman?status=gagal');
		}
	}

	public function reservasi()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('petugas/reservasi');
	}
	public function pengembalian()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('petugas/pengembalian');
	}
	public function tampilkan_data_sepeda()
	{
		$id_reservasi=$_POST['id_reservasi'];
		$data['mode']=$_POST['mode'];
		//$id=explode("0", $id_reservasi)[count(explode("0", $id_reservasi))-1];
		$result=$this->petugas_model->tampilkan_data_sepeda($id_reservasi);
		$data['result']=$result;
		//$data['mode']='kembali';
		//print_r($result);
		if(count($result)<1){
			if($data['mode']=="kembali"){
				redirect('petugas/pengembalian?status=gagal');
			}
			else {
				redirect('petugas/reservasi?status=gagal');
			}
		}
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('petugas/tampilkan_data_sepeda',$data);
	}
	public function kembali()
	{
		if(isset($_POST['id_reservasi']))
		{
			$id_reservasi=$_POST['id_reservasi'];
			// $id=explode("0", $id_reservasi)[count(explode("0", $id_reservasi))-1];
			$retval=$this->petugas_model->kembali_sepeda($id_reservasi);
			if($retval>0)
			{
				redirect('petugas/pengembalian?status=sukses');
			}
			else
			{
				redirect('petugas/pengembalian?status=gagal');
			}
		}
		else
		{
			redirect('petugas/pengembalian');
		}
	}
	public function booking()
	{
		if(isset($_POST['id_reservasi']))
		{
			$id_reservasi=$_POST['id_reservasi'];
			// $id=explode("0", $id_reservasi)[count(explode("0", $id_reservasi))-1];
			$retval=$this->petugas_model->booking_sepeda($id_reservasi);
			if($retval>0)
			{
				redirect('petugas/reservasi?status=sukses');
			}
			else
			{
				redirect('petugas/reservasi?status=gagal');
			}
		}
		else
		{
			redirect('petugas/reservasi');
		}
	}
	public function masuk()
	{
		$this->load->view('template/header');
		$this->load->view('petugas/masuk');
	}

	public function data_petugas()
	{

		$crud= new Grocery_CRUD();
        $crud->set_table('petugas')	->required_fields('Nama','No_KTP','Alamat','Telepon','Email');
        $crud->change_field_type('Password', 'password');
        $crud->field_type('Hak_Akses','dropdown',
            array('1' => 'petugas', '2' => 'admin'));    	

                
        $output = $crud->render();
		
		$this->load->view('template/header',$output);
		$this->load->view('template/sidebar');
		$this->load->view('admin/menampilkan',$output);
	}
	public function data_anggota()
	{

		$crud= new Grocery_CRUD();
        $crud->set_table('anggota')
            	->required_fields('nama','noktp','alamat','email','telp','password');
        $crud->change_field_type('password', 'password');        
        $output = $crud->render();
		
		$this->load->view('template/header',$output);
		$this->load->view('template/sidebar');
		$this->load->view('admin/menampilkan',$output);
	}

	public function report_peminjaman()
	{
		$crud= new Grocery_CRUD();
        $crud->set_table('peminjaman')->required_fields('id_peminjaman','noktp','tanggal_peminjaman','tanggal_pengembalian','jml_spd_anak','jml_spd_standar','jml_spd_gunung','jml_spd_tandem','biaya','status');
                
        $output = $crud->render();
		
		$this->load->view('template/header',$output);
		$this->load->view('template/sidebar');
		$this->load->view('admin/report_peminjaman',$output);
	}
}
