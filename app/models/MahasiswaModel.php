<?php 
class MahasiswaModel {
    private $mhs = [
        [
            "nrp" => "202111012",
            "nama" => "Abdi Setiawan",
            "email" => "abdi@abdi",
            "jurusan" => "Teknik Informatika",
        ],
        [
            "nrp" => "202111013",
            "nama" => "naruto",
            "email" => "naruto@naruto",
            "jurusan" => "Teknik Informatika",
        ],
    ];
    public function getAllMahasiswa() {
        return $this->mhs;
    }
}

?>