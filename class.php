<?php
class mahasiswa {
    // properti
    public $nim = 01123;
    public $nama = "Rizaldi Ilyas";
    public $jurusan = "Perangkat Lunak";

    function tampil_biodata() {
        echo $this->nim;
        echo $this->nama;
    }
}
$tampil = new mahasiswa();
$tampil->tampil_biodata();
?>