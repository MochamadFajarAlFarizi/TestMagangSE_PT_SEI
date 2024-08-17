class ProyekController extends CI_Controller {
    public function index() {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://localhost:8081/proyek');
        $data['proyek'] = json_decode($response->getBody());
        $this->load->view('proyek/index', $data);
    }
}
