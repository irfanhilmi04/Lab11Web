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


# Praktikum 13 - Pemrograman Web (Framework Lanjutan - Modul Login)
# Nama : Mochammad Irfan Hilmi
# NIM : 311910497
# Kelas : TI.19.A2
# Laporan Praktikum

## Persiapan
Pastikan MySQL server sudah berjalan dan buat sebuah tabel sebagai berikut:

![gambar1](https://user-images.githubusercontent.com/56240221/123817017-fd321c80-d921-11eb-914e-886906e412dd.jpg)

## Langkah 1 - Membuat Model User
Buat file baru pada direktori app/Models dengan nama UserModel.php untuk memproses data login.

![gambar2](https://user-images.githubusercontent.com/56240221/123817022-fefbe000-d921-11eb-865c-e8d7fa24da7d.jpg)

## Langkah 2 - Membuat Controller User
Buat Controller baru dengan nama User.php pada direktori app/Controllers. Kemudian tambahkan method index()untuk menampilkan daftar user, dan method login() untuk proses login.

![gambar3](https://user-images.githubusercontent.com/56240221/123817025-002d0d00-d922-11eb-9d37-ecaf5795fd20.jpg)

## Langkah 3 - Membuat View Login
Membuat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.

![gambar4](https://user-images.githubusercontent.com/56240221/123817000-f905ff00-d921-11eb-8977-fec05f5ff8f3.jpg)

## Langkah 4 - Membuat Database Seeder
Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password ke dalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut: php spark make:seeder UserSeeder

![gambar5](https://user-images.githubusercontent.com/56240221/123817013-fc998600-d921-11eb-8e65-f021d025a487.jpg)

Buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![gambar6](https://user-images.githubusercontent.com/56240221/123817785-a6791280-d922-11eb-8fb6-ce42acfd689e.jpg)

Lalu buka CLI lagi dan ketik perintah berikut: php spark db:seed UserSeeder

![gambar7](https://user-images.githubusercontent.com/56240221/123817791-a7aa3f80-d922-11eb-8b36-f66fd09a4232.jpg)

Kemudian lakukan uji coba login dengan mengakses url : http://localhost:8080/user/login

![gambar8](https://user-images.githubusercontent.com/56240221/123817764-a2e58b80-d922-11eb-93c3-b6be1a72e79a.jpg)

## Langkah 5 - Menambah Auth Filter
Selanjutnya membuat file baru dengan nama Auth.php pada direktori app/Filters untuk memfilter halaman admin.

![gambar9](https://user-images.githubusercontent.com/56240221/123817779-a4af4f00-d922-11eb-9dbc-f46aa9c25c80.jpg)

Kemudian buka file app/Config/Filters.php tambahkan kode berikut:

![gambar10](https://user-images.githubusercontent.com/56240221/123818388-243d1e00-d923-11eb-99fc-d6b8bc2b1e69.jpg)

Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya seperti berikut :

![gambar11](https://user-images.githubusercontent.com/56240221/123818391-24d5b480-d923-11eb-8eea-c9e21a5d8fe8.jpg)

Maka ketika mengakses alamat http://localhost:8080/admin/artikel akan dibawa ke halaman login.

![gambar12](https://user-images.githubusercontent.com/56240221/123818397-256e4b00-d923-11eb-87bc-65eced93599d.jpg)

## Langkah 6 - Menambah Fungsi Logout
Tambahkan method logout pada Controller User seperti berikut :

![gambar13](https://user-images.githubusercontent.com/56240221/123818364-21dac400-d923-11eb-9f95-9e44932e8710.jpg)

Maka ketika menekan logout dan konfirmasi, akan kembali ke halaman login.

![gambar13 1](https://user-images.githubusercontent.com/56240221/123818401-2606e180-d923-11eb-8437-4226f6ea816c.jpg)

# Praktikum 14 - Pemrograman Web (Pagination dan Pencarian)
## Nama : Mochammad Irfan Hilmi
## NIM : 311910497
## Kelas : TI.19.A2
## Laporan Praktikum

## Langkah 1 - Membuat Pagination
Pagination digunakan untuk membatasi tampilan data pada sebuah halaman menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan.
Untuk membuat pagination Codeigniter 4, buka kembali Controller Artikel, kemudian modifikasi kode pada method admin_index seperti berikut.
![gambar1](https://user-images.githubusercontent.com/56240221/124469039-0d377980-ddc4-11eb-8903-ffc8cd91da87.jpg)

Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut dibawah deklarasi tabel data.
![gambar2](https://user-images.githubusercontent.com/56240221/124469045-0e68a680-ddc4-11eb-9262-7948e40ce15f.jpg)

Buka menu daftar artikel untuk melihat hasilnya.
![gambar3](https://user-images.githubusercontent.com/56240221/124468986-fabd4000-ddc3-11eb-881c-e4ee01994ad7.jpg)

## Langkah 2 - Membuat Pencarian
Pencarian data digunakan untuk memfilter data.
Untuk membuat pencarian data, buka kembali Controller Artikel, pada method admin_index ubah kodenya menjadi seperti berikut.
![gambar4](https://user-images.githubusercontent.com/56240221/124469012-06106b80-ddc4-11eb-89e5-17579323ff84.jpg)

Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form pencarian sebelum deklarasi tabel seperti ini.
![gambar5](https://user-images.githubusercontent.com/56240221/124469028-0ad51f80-ddc4-11eb-9ad3-45f300db1172.jpg)
Dan ubah link pager menjadi <?= $pager->only(['q'])->links(); ?>.

Selanjutnya buka kembali halaman admin artikel dan masukkan kata kunci tertentu pada form pencarian.
![gambar6](https://user-images.githubusercontent.com/56240221/124469993-3ad0f280-ddc5-11eb-8382-d16c45a98a33.jpg)

## Langkah 3 - Membuat Upload Gambar
Menambahkan fungsi unggah gambar pada tambah artikel.
Buka kembali Controller Artikel, sesuaikan kode pada method add seperti berikut.
![gambar7](https://user-images.githubusercontent.com/56240221/124470004-3c9ab600-ddc5-11eb-95cc-a7f46f6a8048.jpg)

Kemudian pada file views/artikel/form_add.php tambahkan field input file serta sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.
<form action="" method="post" enctype="multipart/form-data">
![gambar8](https://user-images.githubusercontent.com/56240221/124470012-3dcbe300-ddc5-11eb-9b94-dd8c92913877.jpg)

Kemudian lakukan percobaan membuat artikel dengan mengupload sebuah gambar.
![gambar9](https://user-images.githubusercontent.com/56240221/124469914-25f45f00-ddc5-11eb-9c0a-b3dc854156a9.jpg)
  
Berikut tampilan artikel yang dibuat dengan upload gambar.
![gambar10](https://user-images.githubusercontent.com/56240221/124469973-3573a800-ddc5-11eb-924b-a1629691c42b.jpg)
