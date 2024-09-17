<?php
// definisi class dan object
// class person sebagai induk dari Dosen dan Mahasiswa
class Person {
    // atribut atau properties
    //menggunakan kosep Inheritance
    protected $nama;
    // constructor
    public function __construct($nama){   
        $this->nama = $nama;
    }
    // methode dan function
    public function getNama() {
        return $this->nama;
    }
// menerapkan konsep polymorphism dengan metode getRole()
// method yang akan di override pada kelas Dosen dan Mahasiswa
    public function getRole() {
    return "Person";
    }
}
// class Dosen dan Mahasiswa
class Dosen extends Person {
    private $nidn; // merupakan implementasi dari konsep encapsulation private atribut
    // constructor
    public function __construct($nama, $nidn)
    {   parent::__construct($nama); // memanggil constructor dari class induk (Person)
        $this->nidn = $nidn;
    }
    // Override Method pada class Dosen dalam peran
    public function getRole() {
        return "Dosen";
    }
    // untuk mengambil nilai "nama"
    public function getNama() {
        return "$this->nama";
    }
    // konsep encapsulation memunculkan getter dan setter untuk NIDN
    public function getNIDN(){
        return $this->nidn;
    }
    public function setNIDN($nidn){
        $this->nidn = $nidn;
    }
}
class Mahasiswa extends Person {
    private $nim; // merupakan implementasi dari konsep encapsulation private atribut
    // constructor
    public function __construct($nama, $nim)
    {   parent::__construct($nama); // memanggil constructor dari class induk (Person)
        $this->nim = $nim;
    }
    // Override Method pada class mahasiswa dalam peran
    public function getRole() {
        return "Mahasiswa";
    }
    // Untuk mengambil nilai "nama"
    public function getNama() {
        return "$this->nama";
    }
    // konsep encapsulation memunculkan getter dan setter untuk NIDN
    public function getNIM(){
        return $this->nim;
    }
    public function setNIM($nim){
        $this->nim = $nim;
    }
}
// membuat class abstrak jurnal dengan konsep abstraction
abstract class Jurnal {
    // atribut dan properties
    abstract public function getCourseDetails();
}
// membuat class yang mewarisi class jurnal
class JurnalDosen extends Jurnal {
    public function getCourseDetails(){
        return "Ini Merupakan Journal Dosen Online";
    }
}
class JurnalMahasiswa extends Jurnal {
    public function getCourseDetails(){
        return "Ini Merupakan Journal Mahasiswa Online";
    }
}

// instansiasi object class person
// Membuat object Dosen
echo "<b>1. Instansiasi Dosen</b></br>";
$dosen = new Dosen("Irma Sena M A.Md.T","230202084");
echo "Nama Dosen : " . $dosen->getNama() . "<br>";
echo "NIDN : " . $dosen->getNIDN() . "<br>";

// Membuat object Mahasiswa
echo "<br><b>2. Instansiasi Mahasiswa</b>";
$mahasiswa = new Mahasiswa("Irma Sena Marliyana", "230202084");
echo "<br>Nama Mahasiswa : " . $mahasiswa->getNama() . "<br>";
echo "NIM : " . $mahasiswa->getNIM() . "<br>";

// Membuat object JurnalDosen
$JurnalDosen = new JurnalDosen();
echo "<br><b>3. Instansiasi Jurnal Dosen</b></br>";
echo $JurnalDosen->getCourseDetails() . "<br>";

// membuat object Jurnal Mahasiswa
$JurnalMahasiswa = new JurnalMahasiswa();
echo "<br><b>4. Instansiasi Jurnal Mahasiswa</b></br>";
echo $JurnalMahasiswa->getCourseDetails() . "<br>";
?>