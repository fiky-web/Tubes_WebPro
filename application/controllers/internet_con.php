<?php
defined('BASEPATH') or exit('No direct script access allowed');

class internet_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("internet_model");
    }

    public function index()
    {
        $data_internet = $this->internet_model->get_internet();
        $this->load->view('header');
        $this->load->view('page_internet', ['data' => $data_internet]);
        $this->load->view('footer');
    }

    public function add_internet()
    {
        $data = [
            "layanan" => $this->input->post('layanan', true),
            "jenis_layanan" => $this->input->post('jenis_layanan', true),
            "kategori" => $this->input->post('kategori', true),
            "Durasi" => $this->input->post('Durasi', true)
        ];
        $this->internet_model->add_internet($data);
        redirect('index.php/internet_con/index');
    }

    public function edit_internet()
    {
        $id_internet = $this->input->post('id_internet', true);
        $data = [
            "layanan" => $this->input->post('layanan', true),
            "jenis_layanan" => $this->input->post('jenis_layanan', true),
            "kategori" => $this->input->post('kategori', true),
            "Durasi" => $this->input->post('Durasi', true)
        ];
        $this->internet_model->edit_internet($id_internet, $data);
        redirect('index.php/internet_con/index');
    }

    public function delete_internet($id_internet)
    {
        $this->internet_model->delete_internet($id_internet);
        redirect('index.php/internet_con/index');
    }
}
