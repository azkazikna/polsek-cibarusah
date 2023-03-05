<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$sess = $this->session->userdata('id_admin');
		if (!$sess) {
			redirect('auth');
		} else {
			$data = array(
				'title' => "Dashboard"
			);
			$this->load->view('admin/_partials/header', $data);
			$this->load->view('admin/index');
			$this->load->view('admin/_partials/footer');
		}
	}
	
	public function laporan_pengaduan() {
		$sess = $this->session->userdata('id_admin');
		if (!$sess) {
			redirect('auth');
		} else {
			$data = array(
				'title' => "Pengaduan Masuk",
				'pengaduan_masuk' => $this->db->query("SELECT * FROM laporan_pengaduan INNER JOIN user ON user.id_user = laporan_pengaduan.id_user WHERE status = 'masuk' ORDER BY id_pengaduan DESC")->result(),
				'pengaduan_diproses' => $this->db->query("SELECT * FROM laporan_pengaduan INNER JOIN user ON user.id_user = laporan_pengaduan.id_user WHERE status = 'diproses' ORDER BY id_pengaduan DESC")->result(),
				'pengaduan_selesai' => $this->db->query("SELECT * FROM laporan_pengaduan INNER JOIN user ON user.id_user = laporan_pengaduan.id_user WHERE status = 'selesai' ORDER BY id_pengaduan DESC")->result(),
				'pengaduan_ditolak' => $this->db->query("SELECT * FROM laporan_pengaduan INNER JOIN user ON user.id_user = laporan_pengaduan.id_user WHERE status = 'ditolak' ORDER BY id_pengaduan DESC")->result(),
			);
			$this->load->view('admin/_partials/header', $data);
			$this->load->view('admin/laporan_pengaduan');
			$this->load->view('admin/_partials/footer');
		}
	}
	
	public function lihat_pengaduan($id) {
		$sess = $this->session->userdata('id_admin');
		if (!$sess) {
			redirect('auth');
		} else {
			$data = array(
				'title' => "Lihat Pengaduan",
				'pengaduan' => $this->db->query("SELECT * FROM laporan_pengaduan INNER JOIN user ON user.id_user = laporan_pengaduan.id_user WHERE id_pengaduan = $id")->row(),
			);

			$this->load->view('admin/_partials/header', $data);
			$this->load->view('admin/lihat_pengaduan');
			$this->load->view('admin/_partials/footer');
		}
	}

	public function tinjau_pengaduan($id) {
		$sess = $this->session->userdata('id_admin');
		if (!$sess) {
			redirect('auth');
		} else {
			$data = array(
				'title' => "Tinjau Pengaduan",
				'pengaduan' => $this->db->query("SELECT * FROM laporan_pengaduan INNER JOIN user ON user.id_user = laporan_pengaduan.id_user WHERE id_pengaduan = $id")->row(),
			);

			$this->load->view('admin/_partials/header', $data);
			$this->load->view('admin/lihat_pengaduan');
			$this->load->view('admin/_partials/footer');
		}
	}

	public function laporan_pengaduan_action($id) {
		$data = array(
			'status' => $this->input->post('status'),
			'tanggapan' => $this->input->post('tanggapan'),
		);

		$where = array(
			'id_pengaduan' => $id
		);

		$this->web->update_data('laporan_pengaduan', $data, $where);
        $this->session->set_flashdata('msg', 'Laporan Pengaduan Berhasil Ditanggapi!');
        redirect('admin/laporan_pengaduan/');
	}
	
	public function selesai_pengaduan($id) {
		$sess = $this->session->userdata('id_admin');
		if (!$sess) {
			redirect('auth');
		} else {
			$data = array(
				'status' => 'selesai'
			);

			$where = array(
				'id_pengaduan' => $id
			);

			$this->web->update_data('laporan_pengaduan', $data, $where);
			$this->session->set_flashdata('msg', 'Laporan Pengaduan Selesai!');
			redirect('admin/laporan_pengaduan/');
		}
	}

}