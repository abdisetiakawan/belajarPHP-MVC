<?php 
class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}


?>