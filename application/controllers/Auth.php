<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
        $sess_admin = $this->session->userdata('id_admin');
        $sess_user = $this->session->userdata('id_user');
		if ($sess_admin) {
			redirect('admin');
        } elseif($sess_user) {
            redirect('user');
        } else {
            $data = array(
                'title' => "Login",
                'profile_user' => $this->web->profile($this->session->userdata('id_user')),
            );
            $this->load->view('user/_partials/header', $data);
            $this->load->view('user/login');
            $this->load->view('user/_partials/footer');
        }
	}

    public function login_action() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
            if (password_verify($password, $user['password'])) {
                if($user['role'] == 'admin') {
                    $data = array(
                        'id_admin' => $user['email'],
                        'role' => $user['role'],
                        'nama_depan' => $user['nama_depan'],
                        'id_user2' => $user['id_user'],
                    );
                } elseif($user['role'] == 'user') {
                    $data = array(
                        'id_user' => $user['email'],
                        'role' => $user['role'],
                        'nama_depan' => $user['nama_depan'],
                        'id_user2' => $user['id_user'],
                    );
                }

                if($user['role'] == 'admin') {
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('msglogin', 'Kamu login sebagai Admin!');
                    redirect('admin');
                }
                if($user['role'] == 'user') {
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('msglogin', 'Kamu login sebagai Pengguna!');
                    redirect('user');
                }
                
            } else {
                $this->session->set_flashdata('message', '<div class="w-full bg-red-500 text-white font-semibold text-sm md:text-base p-4 rounded-md">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="w-full bg-red-500 text-white font-semibold text-sm md:text-base p-4 rounded-md">Email tidak terdaftar!</div>');
            redirect('auth');
        }    
    }
	
    public function daftar() {
		$data = array(
			'title' => "Daftar",
			'profile_user' => $this->web->profile($this->session->userdata('id_user')),
		);
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/daftar');
		$this->load->view('user/_partials/footer');
	}

    public function daftar_action() {
        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini telah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password]');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('no_wa', 'Nomor Whatsapp');
        if($this->form_validation->run() == false) {
            $this->daftar();
        } else {
            $data = array(
                'nama_depan' => htmlspecialchars($this->input->post('nama_depan', true)),
                'nama_belakang' => htmlspecialchars($this->input->post('nama_belakang', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'no_wa' => htmlspecialchars($this->input->post('no_wa', true)),
                'role' => 'user',
                'tanggal_buat' => time()
            );

            $this->db->insert('user', $data);
            $this->session->set_flashdata('msg', 'Sekarang kamu telah terdaftar di aplikasi ini!');
            redirect('user');
        }
    }

    public function logout() {
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('id_user2');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('nama_depan');

        $this->session->set_flashdata('message', '<div class="w-full bg-green-500 text-white font-semibold text-sm md:text-base p-4 rounded-md">Kamu berhasil Logout!</div>');
        redirect('auth');
    }

}