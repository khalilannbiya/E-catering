<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-Catering | Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password benar atau tidak
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    // cek role_id
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email belum aktif!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email belum di registrasi!</div>');
            redirect('auth');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('nick', 'Nick Name', 'required|trim|max_length[15]', [
            'required' => 'Silahkan di isi!',
            'max_length' => 'Nama Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('address', 'Address', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required|trim|min_length[10]', [
            'required' => 'Silahkan di isi!',
            'min_length' => 'No telepon terlalu pendek!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Silahkan di isi!',
            'is_unique' => 'Email ini sudah ter-registrasi!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Silahkan di isi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu sedikit!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        // jika form validation nya masih false maka akan kembali ke tampilan registration
        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-Catering | Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'nick' => htmlspecialchars($this->input->post('nick', true)),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            // masukkan '$data' ke database di table 'user' 
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda sudah di registrasi. Silahkan Login!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        // memebersihkan session email
        $this->session->unset_userdata('email');
        // membersihkan session role_id
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah Logout! Yuk pesan lagi</div>');
        redirect('auth');
    }
}
