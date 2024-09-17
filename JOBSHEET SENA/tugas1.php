<?php // Menggunakan bahasa pemrograman PHP
// Membuat Class dan Object
class Dosen {
    // Merupakan Atribut atau Properties
    public $nama;
    public $nip;
    public $mataKuliah;
    // Implementasi Constuctor
    public function __construct($nama,$nip,$mataKuliah)
    {   $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    // Method dan Function
    public function tampilkanDosen() {
        return "Data Dosen<br>
        Nama : $this->nama <br>
        NIP : $this->nip <br>
        Mata Kuliah : $this->mataKuliah <br>";
    }
}
// Instansiasi Objek
$dosen1 = new dosen("Bryan Oxa Chandra","J123A09I20017","Manajemen Pertambangan");
echo $dosen1->tampilkanDosen();
?>