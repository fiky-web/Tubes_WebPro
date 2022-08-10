<?php
defined('BASEPATH') or exit('No direct script access allowed');

class promo_con extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("promo_model");
	}

	public function index()
	{
		$data_promo = $this->promo_model->get_promo();
		$this->load->view('header');
		$this->load->view('page_promo', ['data' => $data_promo]);
		$this->load->view('footer');
	}

	public function add_promo()
	{
		$data = [
			"promo" => $this->input->post('promo', true),
			"potongan" => $this->input->post('potongan', true),
			"durasi" => $this->input->post('durasi', true),
		];
		$this->promo_model->add_promo($data);
		redirect('index.php/promo_con/index');
	}

	public function edit_promo()
	{
		$id_promo = $this->input->post('id_promo', true);
		$data = [
			"promo" => $this->input->post('promo', true),
			"potongan" => $this->input->post('potongan', true),
			"durasi" => $this->input->post('durasi', true),
		];
		$this->promo_model->edit_promo($id_promo, $data);
		redirect('index.php/promo_con/index');
	}

	public function delete_promo($id_promo)
	{
		$this->promo_model->delete_promo($id_promo);
		redirect('index.php/promo_con/index');
	}
}
