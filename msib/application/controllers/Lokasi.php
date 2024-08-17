<?php
class Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        if (!$data['lokasi']) {
            $data['lokasi'] = [];
        }
        $this->load->view('lokasi/index', $data);
    }

    public function create() {
        $this->load->view('lokasi/create');
    }

    public function store() {
        $data = array(
            'nama_lokasi' => $this->input->post('nama_lokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota')
        );
        $this->Lokasi_model->add_lokasi($data);
        redirect('lokasi');
    }

    public function edit($id) {
        $data['lokasi'] = $this->Lokasi_model->get_lokasi_by_id($id);
        $this->load->view('lokasi/edit', $data);
    }    

    public function update($id) {
        $data = array(
            'nama_lokasi' => $this->input->post('nama_lokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota')
        );
        $this->Lokasi_model->update_lokasi($id, $data);
        redirect('lokasi');
    }

    public function delete($id) {
        $this->Lokasi_model->delete_lokasi($id);
        redirect('lokasi');
    }
}
?>
