<?php
defined('BASEPATH') or exit('No direct script access allowed');

class wifi_con extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("wifi_model");
	}

	public function index()
	{
		$data_wifi = $this->wifi_model->get_wifi();
		$this->load->view('header');
		$this->load->view('page_wifi', ['data' => $data_wifi]);
		$this->load->view('footer');
	}

	public function add_wifi()
	{
		$data = [
			"layanan" => $this->input->post('layanan', true),
			"jenis_layanan" => $this->input->post('jenis_layanan', true),
			"kategori" => $this->input->post('kategori', true),
			"Durasi" => $this->input->post('durasi', true)
		];
		$this->wifi_model->add_wifi($data);
		redirect('index.php/internet_con/index');
	}

	public function edit_wifi()
	{
		$id_wifi = $this->input->post('id_wifi', true);
		$data = [
			"layanan" => $this->input->post('layanan', true),
			"jenis_layanan" => $this->input->post('jenis_layanan', true),
			"kategori" => $this->input->post('kategori', true),
			"Durasi" => $this->input->post('durasi', true)
		];
		$this->wifi_model->edit_wifi($id_wifi, $data);
		redirect('index.php/wifi_con/index');
	}

	public function delete_wifi($id_wifi)
	{
		$this->wifi_model->delete_wifi($id_wifi);
		redirect('index.php/wifi_con/index');
	}
}
