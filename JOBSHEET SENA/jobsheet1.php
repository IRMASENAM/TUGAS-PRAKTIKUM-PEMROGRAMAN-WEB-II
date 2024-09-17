<?php // Menggunakan bahasa pemrograman PHP
// Membuat Class dan Object
class Mahasiswa {
    // Merupakan Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;
    // Implementasi Constuctor
    public function __construct($nama,$nim,$jurusan)
    {   $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // Method dan Function
    public function tampilkanData() {
        return "Data Mahasiswa : <br>
        Nama : $this->nama <br>
        NIM : $this->nim <br>
        Jurusan : $this->jurusan <br>";
    }
    // Membuat Metode Tambahan
    public function updateJurusan() {
        $this->jurusan = "Teknik Informatika ";
        return "Data Mahasiswa : <br>
        Nama : $this->nama <br>
        NIM : $this->nim <br>
        Jurusan : $this->jurusan <br>";
    }
    // Membuat Ubah Nilai NIM dengan metode Setter
    public function setNim() {
        $this->nim = "220102082" ;
        return "Data Mahasiswa : <br>
        Nama : $this->nama <br>
        NIM : $this->nim <br>
        Jurusan : $this->jurusan ";
    }
}
// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Irma Sena Marliyana","230202084","Komputer dan Bisnis");
echo "<b>1. Data Sebelum Update</b><br>";
echo $mahasiswa1->tampilkanData();

// Instansiasi Objek setelah Perubahan Data Jurusan
echo "<br><b>2. Setelah Update Jurusan</b><br>";
echo $mahasiswa1->updateJurusan();

// Instansiasi Objek setelah Perubahan NIM dengan metode Setter
echo "<br><b>3. Setelah Update Nim</b><br>";
echo $mahasiswa1->setNim();
?>