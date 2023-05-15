<?php
class mahasiswa {
    // properti
    public $nim;
    public $nama;
    public $jurusan;

    function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }
    
    function tampil_biodata() {
        echo $this->nim;
        echo $this->nama;
        echo $this->jurusan;
    }
}
$mahasiswa = new mahasiswa("223", "Rizaldi", "RPL");
$mahasiswa->tampil_biodata();
?>
