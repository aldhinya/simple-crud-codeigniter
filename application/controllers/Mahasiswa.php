<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		$data["mhs"] = $this->Mahasiswa_model->getAll();
		$this->load->view('mahasiswa', $data);
	}

	public function tambah()
	{
		$this->load->view('register');
	}

	public function simpan()
	{
		$data = array(
			'npm' => $this->input->post('npm'),
			'nama' => $this->input->post('nama')
		);

		$this->Mahasiswa_model->add($data);

		redirect(base_url('mahasiswa'));
	}


	public function edit()
	{
		$id = $this->uri->segment(3);

		$where = array('id' => $id);
		$data['mhs'] = $this->Mahasiswa_model->edit_data($where);
		$this->load->view('edit', $data);
	}

	public function update()
	{
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');

		$data = array(
			'npm' => $npm,
			'nama' => $nama
		);
		$id = $this->uri->segment(3);

		$where = array('id' => $id);

		$this->Mahasiswa_model->update($where, $data);
		redirect(base_url('mahasiswa'));
	}

	public function hapus()
	{
		$id = $this->uri->segment(3);

		$where = array('id' => $id);

		$this->Mahasiswa_model->delete($where);
		redirect(base_url('mahasiswa'));
	}


}
