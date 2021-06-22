# Praktikum 11 - Pemrograman Web (PHP Framework)
## Nama : Mochammad Irfan Hilmi
## NIM : 311910497
## Kelas : TI.19.A2
## Laporan Praktikum
1. Membuat folder baru lab11_php_ci setelah itu jalankan XAMPP dan ubah file yang ada di dalam file php.ini seperti berikut :

![gambar1](https://user-images.githubusercontent.com/56240221/122934969-2ab71d00-d39a-11eb-9809-73dd91bf5cf7.jpg)
![gambar2](https://user-images.githubusercontent.com/56240221/122934940-268aff80-d39a-11eb-9def-3a26c433f424.jpg)

2.Download Codeigniter dapat di https://codeigniter.com/download Lalu ekstrak file zip ke direktori htdocs/lab11_php_ci. Ubah nama folder menjadi ci4. Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

![gambar3](https://user-images.githubusercontent.com/56240221/122934961-2985f000-d39a-11eb-8c38-895405f5f434.jpg)

3. Codeigniter menyediakan CLI, untuk mengaksesnya buka terminal lalu arahkan ke direktori project yang akan dibuat. Kemudian jalankan perintah php spark untuk memanggil CLI codeigniter.

![gambar4](https://user-images.githubusercontent.com/56240221/122935653-b4ff8100-d39a-11eb-82b0-b33ca23b15bd.jpg)

4. Codeigniter juga menyediakan mode debugging/development yang dapat menampilkan error/kesalahan dalam kode program. Cara mengaktifkannya dengan mengubah nama file env menjadi .env kemudian buka filenya dan ubah nilai CI_ENVIRONMENT menjadi development.

![gambar5](https://user-images.githubusercontent.com/56240221/122935616-add87300-d39a-11eb-820f-1e131a7b060f.jpg)

Maka pesan kesalahan akan ditampilkan.

![gambar6](https://user-images.githubusercontent.com/56240221/122935638-b0d36380-d39a-11eb-939d-9d584b7eb422.jpg)

5. Membuat Route
Router berasa di file app/config/Routes.php
Untuk mengetahui route yang ada atau telah berjalan dapat menggunakan perintah php spark routes. Lalu akses route yang telah dibuat dengan akses http://localhost:8080/about jika terjadi error karena tidak ada file untuk halaman about.

![gambar7](https://user-images.githubusercontent.com/56240221/122936109-19badb80-d39b-11eb-8e56-02f17ed62afb.jpg)
![gambar8](https://user-images.githubusercontent.com/56240221/122936113-1aec0880-d39b-11eb-9719-eccb7fb1fd72.jpg)
![gambar9](https://user-images.githubusercontent.com/56240221/122936094-17588180-d39b-11eb-9ce9-2670cac54a78.jpg)

6. Membuat Controller
Membuat file page.php didalam directory Controller (/app/Controllers) kemudian refresh pada browser maka halaman akan muncul

![gambar10](https://user-images.githubusercontent.com/56240221/122936668-8930cb00-d39b-11eb-8a55-f175db4c3ca7.jpg)

7. Menambahkan method baru pada controller page.
Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos

![gambar11](https://user-images.githubusercontent.com/56240221/122936680-8b932500-d39b-11eb-93df-622a1afe2280.jpg)

8. Membuat View
Membuat file about.php di dalam directory View (/app/view/about) dan mengubah method about dalam controller page.

![gambar12](https://user-images.githubusercontent.com/56240221/122936690-8c2bbb80-d39b-11eb-9d70-e10215436fba.jpg)

9. Membuat Layout Web dengan CSS
Membuat file css pada directory public dengan nama style.css (coppy file praktikum lab4_layout), kemudian buat folder template pada directori view, lalu buat file header.php dan footer.php

![gambar13](https://user-images.githubusercontent.com/56240221/122937034-d876fb80-d39b-11eb-8d87-d21ffc242528.jpg)
![gambar14](https://user-images.githubusercontent.com/56240221/122937004-d319b100-d39b-11eb-9ca1-bd9f7c7bf8fe.jpg)

Kemudian ubah file about.php (/app/view/about.php) seperti berikut:

<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>

refresh browser pada akses alamat http://localhost:8080/about
![gambar15](https://user-images.githubusercontent.com/56240221/122937022-d745ce80-d39b-11eb-8c85-66f5f6057d49.jpg)

## Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga 
semua link pada navigasi header dapat menampilkan tampilan dengan layout yang 
sama.

## Hasilnya :
Tampilan About
![gambar16](https://user-images.githubusercontent.com/56240221/122937916-87b3d280-d39c-11eb-84b7-16c462fa3db5.jpg)

Tampilan Contact
![gambar17](https://user-images.githubusercontent.com/56240221/122937935-8aaec300-d39c-11eb-894f-1dba21f8ee63.jpg)

Tampilan Artikel 
![gambar18](https://user-images.githubusercontent.com/56240221/122937890-84b8e200-d39c-11eb-818a-f0836ae1032f.jpg)


# Praktikum 12 - Pemrograman Web (Framework Lanjutan - CRUD)
## Nama : Mochammad Irfan Hilmi
## NIM : 311910497
## Kelas : TI.19.A2
## Laporan Praktikum

Persiapan
Pastikan MySQL server sudah berjalan dan buat sebuah database sebagai berikut:
![gambar19](https://user-images.githubusercontent.com/56240221/122938652-25a79d00-d39d-11eb-8794-189a33470ea7.jpg)

Langkah 1 - Konfigurasi Database
Membuat konfigurasi hubungan ke database server dengan menggunakan file .env.
![gambar20](https://user-images.githubusercontent.com/56240221/122938670-28a28d80-d39d-11eb-9bea-1a709a8ddc85.jpg)

Langkah 2 - Membuat Model
Buat file baru pada direktori /app/Models dengan nama ArtikelModel.php
![gambar21](https://user-images.githubusercontent.com/56240221/122938676-29d3ba80-d39d-11eb-8d22-f33ee5230ff4.jpg)

Langkah 3 - Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori /app/Controllers.
![gambar22](https://user-images.githubusercontent.com/56240221/122939050-79b28180-d39d-11eb-9af5-c65b64adec5a.jpg)

Langkah 4 - Membuat View
Buat direktori baru dengan nama artikel pada direktori /app/Views, kemudian buat file baru dengan nama index.php.
![gambar23](https://user-images.githubusercontent.com/56240221/122939058-7c14db80-d39d-11eb-8810-30e07cd04e9a.jpg)

Lalu buka alamat http://localhost:8080/artikel untuk melihat hasilnya.

Tidak ada data yang ditampilkan karena database masih kosong.
![gambar24](https://user-images.githubusercontent.com/56240221/122939061-7cad7200-d39d-11eb-837f-097f3f85c864.jpg)

Tambahkan data pada database untuk ditampilkan datanya.
![gambar25](https://user-images.githubusercontent.com/56240221/122939531-e7f74400-d39d-11eb-87aa-76aac208e06b.jpg)

Maka akan muncul tampilan seperti ini ketika browser direfresh.
![gambar26](https://user-images.githubusercontent.com/56240221/122939511-e168cc80-d39d-11eb-95e5-c2f62b8e4b22.jpg)

Langkah 5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan sebuah fungsi baru pada Controller Artikel (/app/Controllers/Artikel.php) dengan nama view(). 
![gambar27](https://user-images.githubusercontent.com/56240221/122939524-e62d8080-d39d-11eb-926c-e352d76df75c.jpg)

Langkah 6 - Membuat View Detail
Buat file baru dalam folder artikel (/app/Views/artikel/) dengan nama detail.php untuk menampilkan halaman detail.
![gambar28](https://user-images.githubusercontent.com/56240221/122939903-373d7480-d39e-11eb-848c-f95c2bd19180.jpg)

Langkah 7 - Membuat Route
Buka file Routes.php dalam folder (/app/Config/) dan tambahkan routing untuk ke halaman detail artikel.
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
![gambar29](https://user-images.githubusercontent.com/56240221/122939907-37d60b00-d39e-11eb-92f5-9efee3dfed71.jpg)

Maka akan tampil halaman dari artikel yang diklik.
![gambar30](https://user-images.githubusercontent.com/56240221/122939893-34db1a80-d39e-11eb-8abc-7c3ac77355aa.jpg)

Langkah 8 - Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel.
Buat method atau fungsi baru pada Controller Artikel dengan nama admin_index().
![gambar31](https://user-images.githubusercontent.com/56240221/122940236-7f5c9700-d39e-11eb-8560-14c74604fc09.jpg)

Kemudian buat file admin_index.php dalam folder (/app/Views/artikel/) untuk tampilan halaman admin.
![gambar32](https://user-images.githubusercontent.com/56240221/122940245-81265a80-d39e-11eb-8e72-b977786ef58b.jpg)

Kemudian tambahkan routing untuk menu admin sebagai berikut:
![gambar33](https://user-images.githubusercontent.com/56240221/122940259-84214b00-d39e-11eb-9e92-89394093315d.jpg)

Menu admin dapat diakses dengan alamat http://localhost:8080/admin/artikel
![gambar34](https://user-images.githubusercontent.com/56240221/122940263-84214b00-d39e-11eb-95a6-71ce69c60130.jpg)

Langkah 9 - Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add(). 
![gambar35](https://user-images.githubusercontent.com/56240221/122940267-84b9e180-d39e-11eb-91a3-bc00d53f125d.jpg)

Kemudian buat view untuk form tambah dengan nama form_add.php dalam folder (/app/Views/artikel/).
![gambar36](https://user-images.githubusercontent.com/56240221/122940742-f134e080-d39e-11eb-94f6-36decdc13d2f.jpg)

Tampilannya kurang lebih akan seperti ini.
![gambar37](https://user-images.githubusercontent.com/56240221/122940755-f560fe00-d39e-11eb-8b2d-7c97b6165876.jpg)

Langkah 10 - Mengubah Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().
![gambar38](https://user-images.githubusercontent.com/56240221/122940766-f7c35800-d39e-11eb-93fe-e7ea372ecc9a.jpg)

Kemudian buat view untuk form tambah dengan nama form_edit.php dalam folder (/app/Views/artikel/).
![gambar39](https://user-images.githubusercontent.com/56240221/122940781-f98d1b80-d39e-11eb-880f-5ca879e1d09a.jpg)

Kurang lebih tampilannya akan seperti ini ketika ingin mengubah data atau isi artikel.
![gambar40](https://user-images.githubusercontent.com/56240221/122940785-fabe4880-d39e-11eb-8075-5f27b43721bc.jpg)

Langkah 11 - Menghapus Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete(). 
![gambar41](https://user-images.githubusercontent.com/56240221/122941183-5983c200-d39f-11eb-8ed7-4cf1987770f3.jpg)

## Pertanyaan dan Tugas
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

## Jawab/Hasil
Saya telah menyelesaikan program diatas agar dapat berjalan dengan semestinya. Seperti membuat file admin_header.php dan admin_footer.php serta CSSnya.

## Screenshot
Admin_header.php
![gambar42](https://user-images.githubusercontent.com/56240221/122941192-5dafdf80-d39f-11eb-8aef-c6e4303ec91f.jpg)

Admin_footer.php
![gambar43](https://user-images.githubusercontent.com/56240221/122941202-60aad000-d39f-11eb-91bb-35a6e80ae1fb.jpg)

Sebagian style untuk bagian admin.
![gambar44](https://user-images.githubusercontent.com/56240221/122941210-61dbfd00-d39f-11eb-92ec-feb72f6baed5.jpg)

Menambahkan artikel baru Tambah_Artikel
![gambar45](https://user-images.githubusercontent.com/56240221/122941221-643e5700-d39f-11eb-9028-f79c8c60bacb.jpg)
![gambar46](https://user-images.githubusercontent.com/56240221/122941767-e595e980-d39f-11eb-9d8b-9a390fdaf6e0.jpg)

Menghapus artikel Hapus_Artikel
![gambar47](https://user-images.githubusercontent.com/56240221/122941782-e890da00-d39f-11eb-8b58-460a2ad355a4.jpg)
![gambar48](https://user-images.githubusercontent.com/56240221/122941788-e9c20700-d39f-11eb-8536-ac8bdbde4636.jpg)


Mengedit artikel Edit_Artikel
![gambar49](https://user-images.githubusercontent.com/56240221/122941793-ea5a9d80-d39f-11eb-8f8a-7a89c997e2e2.jpg)
![gambar50](https://user-images.githubusercontent.com/56240221/122941801-eb8bca80-d39f-11eb-8432-6faa62e038ba.jpg)
