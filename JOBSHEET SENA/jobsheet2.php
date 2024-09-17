<?php
// membuat definisi kelas dan objek
class Mahasiswa {
// atribut atau properties
    // public $nama; 
    // public $nim;
    // public $jurusan;

// Encapsulation
// merubah atribut menjadi private
    private $nama; 
    private $nim;
    private $jurusan;
    
    // constructor
    public function __construct($nama,$nim,$jurusan)
    {   $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // methode dan function
    public function tampilkanData() {
    return "Data Mahasiswa <br> 
    Nama : $this->nama <br>
    NIM : $this->nim <br>
    Jurusan : $this->jurusan <br>";
    }

// Encapsulation : menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu
// metode getter dan setter pada atribut 
    public function getNama() {
    return $this->nama;
    }
    public function setNama($nama) {
    $this->nama = $nama;
    }
    // metode getter dan setter pada atribut nim
    public function getNim() {
    return $this->nim;
    }
    public function setNim($nim) {
    $this->nim = $nim;
    }
    // metode getter dan setter pada atribut jurusan
    public function getjurusan() {
    return $this->jurusan;
    }
    public function setjurusan($jurusan) {
    $this->jurusan = $jurusan;
    }
}
// Inheritance : kelas dapat mewarisi properti dan metode dari kelas lain.
class Pengguna {
    protected $nama;
    // constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }
    // methode dan function
    public function getNama() {
        return $this->nama;
    }
}
// definisi class yang diwarisi dengan kelas lain
class Dosen extends Pengguna {
    private $mataKuliah;
    // construct
    public function __construct($nama,$mataKuliah) {
        parent ::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    // method dan function
    public function getMataKuliah() {
    return $this->mataKuliah;
    }
    public function tampilkanData() {
        echo "Data Dosen <br>
        Nama : {$this->getNama()}<br> 
        Mata Kuliah : {$this->getMataKuliah()}<br>";
    }
}
// Polymorphisme : metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
// menambahkan metode akses fitur
class Pengguna2 {
    public function aksesFitur() {
        echo "Pengguna dapat Mengakses Fitur.<br>";
    }
}
// Class Mahasiswa mewarisi class Pengguna
class Mahasiswa2 extends Pengguna2 {
    public function aksesFitur() {
        echo "Mahasiswa dapat mengakses fitur melihat data pada e-KHS.<br>";
    }
}
// Class Dosen mewarisi class Pengguna
class Dosen2 extends Pengguna2 {
    public function aksesFitur() {
        echo "Dosen dapat mengakses fitur input nilai dan passing grade pada e-KHS.<br>";
    }
}
// Abstraction : menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
//membuat class abstrak 
abstract class Pengguna3 {
    abstract public function aksesFitur();
}
// Class Mahasiswa mewarisi class Pengguna
class Mahasiswa3 extends Pengguna3 {
    public function aksesFitur() {
        echo "Mahasiswa dapat mengakses fitur melihat data pada e-KHS.<br>";
    }
}
// Class Dosen mewarisi class Pengguna
class Dosen3 extends Pengguna3 {
    public function aksesFitur() {
        echo "Dosen dapat mengakses fitur input nilai dan passing grade pada e-KHS.<br>";
    }
}

// Tahap 1. Membuat class dan objek
// instansiasi objek
$mahasiswa1 = new Mahasiswa("Senapati","120929238","Teknik Mesin");
echo "<b>1. Membuat Class dan Object</b><br>";
echo $mahasiswa1->tampilkanData();

// Tahap 2. Encapsulation : menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu
// instansiasi objek dengan metode getter dan setter
$mahasiswa1->setNama("Sennul Marlina");
$mahasiswa1->setNim("2300120012");
$mahasiswa1->setjurusan("Teknik Listrik");
echo "<br><b>2. Encapsulation : Instansiasi Objek dengan Metode Getter dan Setter</b><br>";
echo $mahasiswa1->tampilkanData();

// Tahap 3. Inheritance : kelas dapat mewarisi properti dan metode dari kelas lain.
// instansiasi objek dari class dosen
$dosen1 = new Dosen("Pak Andi Reswala S.T., M.Kom","Front End Development");
echo "<br><b>3. Inheritance : Instansiasi Data Dosen dengan Metode getNama</b><br>";
echo $dosen1->tampilkanData();

// Tahap 4. Polymorphism : metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
// instansiasi objek dengan metode aksesFitur
$mahasiswa1 = new Mahasiswa2();
$dosen1 = new Dosen2();
// memanggil metode aksesFitur
echo "<br><b>4. Polymorphism : Instansi Objek dengan Metode Akses Fitur</b><br>";
$mahasiswa1->aksesFitur();
$dosen1->aksesFitur();

// Tahap 5. Abstraction : menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
// instansiasi objek dengan metode aksesFitur
$mahasiswa1 = new Mahasiswa3();
$dosen1 = new Dosen3();
// memanggil metode aksesFitur
echo "<br><b>5. Abstraction : Instansi Objek dengan Metode Akses Fitur</b><br>";
$mahasiswa1->aksesFitur();
$dosen1->aksesFitur();
?>