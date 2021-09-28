<?php
defined('BASEPATH') or exit('no direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cek_login();
	}


	public function index()
	{

		$data['judul'] = 'E-Catering | HOME';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}

	public function menu()
	{
		$data['judul'] = 'E-Catering | LIST MENU';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/footer');
	}

	public function about()
	{
		$data['judul'] = 'E-Catering | ABOUT';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}
	public function profile()
	{
		$data['judul'] = 'E-Catering | My profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('user/footer');
	}
	public function pemesanan()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('bank', 'Bank', 'required', [
			'required' => 'Silahkan isi ini!'
		]);
		$this->form_validation->set_rules('paket', 'Paket', 'required', [
			'required' => 'Silahkan isi ini!'

		]);

		if ($this->form_validation->run() == false) {

			$data['judul'] = 'E-Catering | Pemesanan';

			$this->load->view('user/header', $data);
			$this->load->view('user/pemesanan', $data);
			$this->load->view('user/footer');
		} else {
			$email = $this->session->userdata('email');
			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			$data = [
				'name' => $user['name'],
				'address' => $user['address'],
				'no_telp' => $user['no_telp'],
				'email' =>  $user['email'],
				'pembayaran' => $this->input->post('bank'),
				'paket' => $this->input->post('paket'),
				'date_created' => time()
			];
			// masukkan ke database di table 'pemesanan'
			$this->db->insert('pemesanan', $data);
			$this->session->set_flashdata('message', 'Selamat pesanan anda sedang diproses!');
			redirect('user/pemesanan');
		}
	}
}
