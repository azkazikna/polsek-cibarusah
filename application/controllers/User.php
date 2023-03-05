<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Beranda",
			'profile_user' => $this->web->profile($this->session->userdata('id_user2')),
		);
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/index');
		$this->load->view('user/_partials/footer');
	}
	
	public function laporan_pengaduan() {
		if (!$this->session->userdata('id_user2')) {
			redirect('auth');
		} else {
			$data = array(
				'title' => "Laporan Pengaduan",
				'profile_user' => $this->web->profile($this->session->userdata('id_user2')),
			);
			$this->load->view('user/_partials/header', $data);
			$this->load->view('user/form_laporan_pengaduan');
			$this->load->view('user/_partials/footer');
		}
	}

	public function add_laporan_pengaduan() {
		$this->form_validation->set_rules('judul', 'Judul Laporan', 'required');
		$this->form_validation->set_rules('isi', 'Isi Laporan', 'required');
		$this->form_validation->set_rules('foto_ktp', 'Foto KTP');
		$this->form_validation->set_rules('foto_bukti', 'Foto Bukti');
        if($this->form_validation->run() == FALSE) {
            $this->laporan_pengaduan();
        } else {

            $foto_ktp = $_FILES['foto_ktp']['name'];
            $foto_bukti = $_FILES['foto_bukti']['name'];

			if($foto_ktp != NULL) {
				$config['upload_path'] = FCPATH . "upload/foto_ktp/";
				$config['allowed_types'] = 'jpg|jpeg|png|tiff|webp|pdf';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
	
				if (!$this->upload->do_upload('foto_ktp')) {
					echo "Upload image failed";
				} else {
					$foto_ktp = $this->upload->data('file_name');
				}
			}
			
			if($foto_bukti != NULL) {
				$config['upload_path'] = FCPATH . "upload/foto_bukti/";
				$config['allowed_types'] = 'jpg|jpeg|png|tiff|webp|pdf';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
	
				if (!$this->upload->do_upload('foto_bukti')) {
					echo "Upload image failed";
				} else {
					$foto_bukti = $this->upload->data('file_name');
				}
			}

            $data = array(
                'id_user' => $this->input->post('id_user'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'foto_ktp' => $foto_ktp,
                'foto_bukti' => $foto_bukti,
				'tanggal' => date("Y-m-d H:i:s"),
                'status' => "masuk",
            );

            $this->web->insert_data($data, 'laporan_pengaduan');
            $this->session->set_flashdata('msg', 'Laporan Pengaduan Anda telah diterima! Mohon untuk menunggu 1x24 jam');
            redirect('user');
        }
	}
	
	public function skck() {
		$data = array(
			'title' => "SKCK",
			'profile_user' => $this->web->profile($this->session->userdata('id_user2')),
		);
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/form_skck');
		$this->load->view('user/_partials/footer');
	}
	
	public function informasi() {
		$data = array(
			'title' => "Informasi",
			'profile_user' => $this->web->profile($this->session->userdata('id_user2')),
		);
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/informasi');
		$this->load->view('user/_partials/footer');
	}

	public function riwayat($id) {
		if (!$this->session->userdata('id_user2')) {
			redirect('auth');
		} else {
			if($this->session->userdata('id_user2') == $id) {
				$data = array(
					'title' => "Informasi",
					'profile_user' => $this->web->profile($this->session->userdata('id_user2')),
					'riwayat' => $this->db->query("SELECT * FROM laporan_pengaduan WHERE id_user = $id ORDER BY tanggal DESC")->result(),
				);

				$this->load->view('user/_partials/header', $data);
				$this->load->view('user/riwayat');
				$this->load->view('user/_partials/footer');
			} else {
				echo 'swiper jangan mencuri';
			}
		}
	}

}