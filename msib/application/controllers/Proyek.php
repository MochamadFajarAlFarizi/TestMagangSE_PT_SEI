<?php
class Proyek extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->model('Lokasi_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['proyek'] = $this->Proyek_model->get_all_proyek(); // Mengambil data proyek
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi(); // Mengambil data lokasi
        $this->load->view('proyek/index', $data); // Mengirimkan data ke view
    }
    

    public function create() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        if (!$data['lokasi']) {
            $data['lokasi'] = [];
        }
        $this->load->view('proyek/create', $data);
    }

    public function store() {
        $data = array(
            'nama_proyek' => $this->input->post('nama_proyek'),
            'client' => $this->input->post('client'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_selesai' => $this->input->post('tgl_selesai'),
            'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
            'keterangan' => $this->input->post('keterangan'),
            'lokasi_id' => $this->input->post('lokasi_id')
        );
        
        $response = $this->Proyek_model->add_proyek($data);
        if ($response) {
            redirect('proyek');
        } else {
            // Handle error
            echo "Failed to add data.";
        }
    }

    public function edit($id) {
        $data['proyek'] = $this->Proyek_model->get_proyek_by_id($id);
        if (!$data['proyek']) {
            $data['proyek'] = [];
        }
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        if (!$data['lokasi']) {
            $data['lokasi'] = [];
        }
        $this->load->view('proyek/edit', $data);
    }

    public function update($id) {
        $data = array(
            'nama_proyek' => $this->input->post('nama_proyek'),
            'client' => $this->input->post('client'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_selesai' => $this->input->post('tgl_selesai'),
            'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
            'keterangan' => $this->input->post('keterangan'),
            'lokasi_id' => $this->input->post('lokasi_id')
        );
        
        $response = $this->Proyek_model->update_proyek($id, $data);
        if ($response) {
            redirect('proyek');
        } else {
            // Handle error
            echo "Failed to update data.";
        }
    }

    public function delete($id) {
        $response = $this->Proyek_model->delete_proyek($id);
        if ($response) {
            redirect('proyek');
        } else {
            // Handle error
            echo "Failed to delete data.";
        }
    }
}
?>
