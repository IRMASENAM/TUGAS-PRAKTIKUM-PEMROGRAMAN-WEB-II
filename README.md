# TUGAS-PRAKTIKUM-PEMROGRAMAN-WEB-II
PHP OOP (Object-Oriented Programming)
merupakan pendekatan pemrograman di PHP yang berfokus pada penggunaan objek dan kelas untuk memodelkan dan mengorganisasikan kode. Dalam OOP, konsep dasar seperti Encapsulation (enkapsulasi), Inheritance (pewarisan), Polymorphism (polimorfisme), dan Abstraction (abstrak) yang digunakan untuk membuat kode lebih terstruktur, modular, dan mudah dikelola.

# JOBSHEET 1 Pertemuan 1 dan 2
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek (OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat digunakan kembali. 

# 1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
# ![Cuplikan layar 2024-09-18 002943](https://github.com/user-attachments/assets/e035cf02-dfab-43fe-b019-6a4be1fd7cb9)

# 2. Implementasi Constructor
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
# ![Cuplikan layar 2024-09-18 003323](https://github.com/user-attachments/assets/33b2c6b1-fd20-4440-810c-d55948e66c54)

# 3. Membuat Metode Tambahan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
# ![Cuplikan layar 2024-09-18 003323](https://github.com/user-attachments/assets/f3bddd7a-285b-4a37-b72f-e189d0aac211)

# 4. Penggunaan Atribut dan Metode
Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().
# ![Cuplikan layar 2024-09-18 003342](https://github.com/user-attachments/assets/55c32749-8210-4722-8c97-054ec4100bed)

# 5. Instansiasi Object
# ![Cuplikan layar 2024-09-18 003411](https://github.com/user-attachments/assets/b3c57c2f-fdde-4ffc-afa8-7cd8bd85f1ec)

# 6. Output Code JOBSHEET 1
# ![Cuplikan layar 2024-09-18 131137](https://github.com/user-attachments/assets/39d68d2f-3709-4ce5-a576-ecd1a087843e)

# Tugas 1 Pertemuan 1 dan 2
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah. 
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen. 
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk 
menampilkan informasi tersebut. 
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses 
pembuatan kelas, penggunaan metode, dan hasil output.
# ![Cuplikan layar 2024-09-18 131315](https://github.com/user-attachments/assets/ebf7a28b-ff96-4a06-a9fb-737b634989a6)

# Output Code Tugas 1
# ![Cuplikan layar 2024-09-18 131237](https://github.com/user-attachments/assets/216e30d4-08c7-4325-a511-4c395dc4c61b)


# JOBSHEET 2 Pertemuan 3 dan 4
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsipprinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara. 

# 1. Membuat Class dan Object 
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan. 
- Buat metode tampilkanData() dalam class Mahasiswa. 
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
# ![Cuplikan layar 2024-09-18 132352](https://github.com/user-attachments/assets/f9fec137-c886-4d5c-9b33-1a90fa72668e)

# 2. Encapsulation : menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu
- Ubah atribut dalam class Mahasiswa menjadi private. 
- Buat metode getter dan setter untuk atribut nama, nim, dan jurusan. 
- Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
# ![Cuplikan layar 2024-09-18 132417](https://github.com/user-attachments/assets/3bd9158c-6a62-417f-bc63-19220869bc8a)

# 3. Inheritance : kelas dapat mewarisi properti dan metode dari kelas lain.
- Buat class Pengguna dengan atribut nama dan metode getNama(). 
- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah. 
- Instansiasi objek dari class Dosen dan tampilkan data dosen.
# ![Cuplikan layar 2024-09-18 132905](https://github.com/user-attachments/assets/2def3144-0bcd-44c1-98c8-2de5501e3e83)

# 4. Polymorphism : metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
- Buat class Pengguna dengan metode aksesFitur(). 
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa. 
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
# ![Cuplikan layar 2024-09-18 132928](https://github.com/user-attachments/assets/8becd985-aab6-4e1d-b9c6-600fefbc67cf)

# 5. Abstraction : menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur(). 
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut. 
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
# ![Cuplikan layar 2024-09-18 132942](https://github.com/user-attachments/assets/4a22282a-3aee-49ec-869c-3a0ab1684d26)

# 6. Instansiasi Object
# ![Cuplikan layar 2024-09-18 133335](https://github.com/user-attachments/assets/f938e51b-270a-44a6-a37d-28f5c6eaf80b)

# 7. Output Code JOBSHEET 2
# ![Cuplikan layar 2024-09-18 131907](https://github.com/user-attachments/assets/69fafaf9-fd52-4650-95d1-1bd39b36048d)


# JOBSHEET 3 Pertemuan 5 dan 6
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance, Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

# 1. Membuat Class dan Object 
o Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan. 
o Buat metode tampilkanData() dalam class Mahasiswa. 
o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
# ![Cuplikan layar 2024-09-18 135402](https://github.com/user-attachments/assets/558043e2-22ba-4775-bbfb-7118c9f38f9c)

# 2. Implementasi Constructor 
o Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan. 
o Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
# ![Cuplikan layar 2024-09-18 135425](https://github.com/user-attachments/assets/cd169876-de3b-4fd2-ad03-672c5bb2bc32)

# 3. Membuat Metode Tambahan 
o Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan. 
o Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
# ![Cuplikan layar 2024-09-18 135450](https://github.com/user-attachments/assets/a588be97-5cff-4691-aaae-e4e2e836f940)

# 4. Penggunaan Atribut dan Metode 
o Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter. 
o Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().
# ![Cuplikan layar 2024-09-18 135503](https://github.com/user-attachments/assets/84957430-e2fa-45af-9409-b8a30033fa55)

# 5. Instansiasi Object
# ![Cuplikan layar 2024-09-18 140316](https://github.com/user-attachments/assets/d97ce131-ae6b-4f0a-ab04-a406cffb2280)

# 6. Output Code JOBSHEET 3
# ![Cuplikan layar 2024-09-18 135327](https://github.com/user-attachments/assets/118ed1b1-e5a6-48cf-b46a-393abf301282)

# Tugas 2 Pertemuan 5 dan 6
Buat proyek PHP dengan studi kasus sebagai berikut: 
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa. 
2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya. 
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda. 
4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa. 
5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal. Dokumentasikan proyek ini dalam bentuk laporan yang diunggah ke GitHub, termasuk penjelasan tentang penerapan masing-masing konsep OOP.
# ![Cuplikan layar 2024-09-18 140809](https://github.com/user-attachments/assets/b157271e-02c4-4adf-806e-dde735276658)
# ![Cuplikan layar 2024-09-18 140914](https://github.com/user-attachments/assets/13b5f453-8807-44b3-a92a-b490ec2f7a89)
# ![Cuplikan layar 2024-09-18 140935](https://github.com/user-attachments/assets/d2a9fbcd-56f9-4c2e-b3e8-feb2ae9ca2ee)
# ![Cuplikan layar 2024-09-18 140947](https://github.com/user-attachments/assets/da227bac-1d09-4044-b311-76eeafd84a10)

# Output Tugas 2 Pertemuan 5 dan 6
# ![Cuplikan layar 2024-09-18 141205](https://github.com/user-attachments/assets/1ba316f2-1ef1-40c8-9dcd-2ddab82fbe5e)
