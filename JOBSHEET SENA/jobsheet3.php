<?php
// definisi class dan object
// Step 1. Inheritence
// Class Person
class Person {
    // atribut atau properties
    protected $name;
    // constructor
    public function __construct($name) {
        $this->name = $name;
    }
    // metode atau function
    public function getName() {
        return $this->name;
    }
}
// Class Student yang mewarisi Person
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);  // Memanggil constructor dari class Person
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}
// Step 2. Polymorphism
class Teacher extends Person {
    private $teacherID;
    // constructor
    public function __construct($name, $teacherID) {
        parent::__construct($name);  // Memanggil constructor dari class Person
        $this->teacherID = $teacherID;
    }
    // method dan function
    public function getName() {
        return "<br>Teacher : " . $this->name;
    }
}
// Override getName di class Student
class Student1 extends Person {
    private $studentID;
    // constructor
    public function __construct($name, $studentID) {
        parent::__construct($name);  // Memanggil constructor dari class Person
        $this->studentID = $studentID;
    }
    // methode dan function
    public function getName() {
        return "Student ID : " . $this->studentID;
    }
}
// Step 3. Encapsulation
class Person1 {
        // atribut atau properties
    private $name; //Menggunakan Private
    private $studentID; //Atribut private pada class student
    // constructor
    public function __construct($name,$studentID) {
        $this->name = $name;
        $this->studentID = $studentID;
    }
    // metode atau function getter dan setter
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getStudentID() {
        return $this->studentID;
    }
    public function setStudentID($studentID) {
        $this->name = $studentID;
    }
}
// Step 4. Abstraction
abstract class Course {
    abstract public function getCourseDetails();
}
// membuat class yang mewarisi class Course
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Ini Merupakan Class Online Course";
    }
}
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Ini Merupakan Class Offline Course";
    }
}

// Step 1. Inheritance : kelas dapat mewarisi properti dan metode dari kelas lain.
// Instansiasi Object Student
echo "<b>Step 1. Inheritence</b><br>";
$student = new Student("Irma Sena", "230202084");
echo "Student Name : " . $student->getName() . "<br>";
echo "Student ID : " . $student->getStudentID() . "<br>";

// Step 2. Polymorphism : metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
// Instansiasi Object dengan override getName
echo "<br><b>Step 2. Polymorphism</b>";
$teacher = new Teacher("Abraham Mouqty", "220981911");
$student = new Student1("Irma Sena", "230202084");
echo $teacher->getName() . "<br>";  // Output: Teacher: Abraham Moqty
echo $student->getName() . "<br>";  // Output: Student: Irma Sena

// Step 3. Encapsulation : menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
// Instansiasi Object dengan metode getter dan setter
echo "<br><b>Step 3. Encapsulation</b>";
$student = new Person1("Irma Sena", "230202084");
// menampilkan instansiasi object menggunakan metode getter
echo "<br>Name : " . $student->getName() . "<br>";
echo "Student ID : " . $student->getStudentID() . "<br>";
// Mengubah name dan studentID melalui setter
$student->setName("Senali Louisa");
$student->setStudentID("220908071");
// menampilkan hasil perubahan menggunakan metode getter dan setter
echo "Update Name : " . $student->getName() . "<br>";
echo "Update Student ID : " . $student->getStudentID() . "<br>";

// Step 4. Abstraction : menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
// Instansiasi Object kelas course
$OnlineCourse = new OnlineCourse();
$OfflineCourse = new OfflineCourse();
// menampilkan instansiasi object kelas course
echo "<br><b>Step 4. Abstraction</b></br>";
echo $OnlineCourse->getCourseDetails() . "<br>";  // Output: Ini Merupakan Class OnlineCourse.
echo $OfflineCourse->getCourseDetails() . "<br>";  // Output: Ini Merupakan Class OfflineCourse.
?>