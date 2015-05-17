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

        $this->load->library('session');

		
	}
	public function index()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pembayaran');
		$this->load->view('template/footer');
	}
	public function registrasi()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pendaftaran');
		$this->load->view('template/footer');
	}
	public function pembayaran()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pembayaran');
		$this->load->view('template/footer');
	}
	public function pembayaran2()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pembayaran2');
		$this->load->view('template/footer');
	}
	public function pembatalan()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pembatalan');
		$this->load->view('template/footer');
	}
	public function pembatalan2()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pembatalan2');
		$this->load->view('template/footer');
	}
	public function peminjaman()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_peminjaman');
		$this->load->view('template/footer');
	}
	public function peminjaman2()
	{

		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_peminjaman2');
		$this->load->view('template/footer');
	}
	public function pengembalian()
	{
		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pengembalian');
		$this->load->view('template/footer');
	}
	public function pengembalian2()
	{
		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pengembalian2');
		$this->load->view('template/footer');
	}
	public function pengembalian3()
	{
		$this->load->view('template/header_petugas');
		$this->load->view('petugas/petugas_pengembalian3');
		$this->load->view('template/footer');
	}
}
