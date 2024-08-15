<?php 
class About {
    public function index($nama = 'Abdi', $pekerjaan = 'Gamer') {
        echo "halo, saya {$nama} pekerjaan {$pekerjaan}";
    }
    public function page() {
        echo 'ini adalah halaman page yang ada di ' .  __METHOD__;
    }
}
?>