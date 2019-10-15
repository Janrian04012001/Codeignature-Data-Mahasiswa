<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this -> load -> model('data_model');
		
	}

	public function index()
	{
		$data = array(
		
			'title' => 'Data Mahasiswa',
		'mahasiswa'	=> $this->data_model->get_all(),
	);
		$this -> load -> view('list', $data);
	}

	public function tambah()
	{

		$data = array(
			'title' => 'Tambah Data Mahasiswa'
		);

		$this->load->view('new_form', $data);
	}

	public function simpan()
	{
		$data = array(

			'nim' 			=> $this->input->post("nim"),
			'nama' 			=> $this->input->post("nama"),
			'jenis_kelamin' => $this->input->post("jenis_kelamin"),
			'alamat' 		=> $this->input->post("alamat"),
			
		);

		$this->data_model->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan pada database.
			                                    </div>');

		//redirect
		redirect('data/');

	}

	public function edit($id_mh)
	{
		$id_mh = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Mahasiswa',
			'mahasiswa' => $this->data_model->edit($id_mh)

		);

		$this->load->view('edit_form', $data);
	}

	public function hapus($id_mh)
	{
		$id['id_mh'] = $this->uri->segment(3);
		
		$this->data_model->hapus($id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil terhapus dari database.
			                                    </div>');

		//redirect
		redirect('data/');

	}

	public function update()
	{
		$id['id_mh'] = $this->input->post("id_mh");
		$data = array(

			'nim' 			=> $this->input->post("nim"),
			'nama' 			=> $this->input->post("nama"),
			'jenis_kelamin' => $this->input->post("jenis_kelamin"),
			'alamat' 		=> $this->input->post("alamat"),
			
		);

		$this->data_model->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate pada database.
			                                    </div>');

		//redirect
		redirect('data/');

	}

}