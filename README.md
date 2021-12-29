# ArthoKu

# Instalation

ArthoKu requires [Xampp](https://www.apachefriends.org/download.html), [Composer](https://getcomposer.org/download/), [Node.js](https://nodejs.org/en/download/).

## :memo: Panduan memulai

```
git clone https://github.com/diii1/Arthoku.git
```

```
cd Arthoku
```

set .env file

```
composer install
```

```
npm install
```

```
npm run dev
```
create database in localhost/phpmyadmin with name: arthoku

```
php artisan migrate
```

```
php artisan serve
```
# Halaman utama aplikasi 
![tampilan-utama](https://github.com/diii1/Arthoku/blob/dev/images/tampilan-utama.PNG)



# Deskripsi Aplikasi 
Aplikasi yang dibuat adalah aplikasi berbasis web. Nama aplikasinya adalah “ArthoKu” yang diambil dari kata “artho” dalam bahasa Jawa yang berarti uang. Aplikasi ini berbentuk planner yang meliputi beberapa bagian yaitu pemasukan, pengeluaran, neraca, dan grafik. Dengan adanya aplikasi ini diharapkan dapat membantu melacak pengeluaran dan pemasukan Anda menuju ekonomi yang sejahtera.

# Sitemap/hirarki menu aplikasi beserta penjelasanya

ArthoKu
![Sitemap_Arthoku](https://github.com/diii1/Arthoku/blob/dev/images/sitemap.png)

# Teknologi yang digunakan
1. Visual Studi Code : Sebagai text editor
2. CSS : Untuk mengatur responsive program 
3. Bahasa pemrograman PHP : Sebagai bahasa utama dalam pembuatan program Arthoku 
4. Chart.Js : Sebagai library untuk menggunakan chart pada aplikasi yang telah dibuat. 
5. Laravel 8 : Framework yang digunakan dalam pembuatan aplikasi 
6. Bootsrap 4 dan 5 : Framework bagian CSS yang digunakan dalam pembuatan aplikasi 
7. Xampp : Sebagai tempat database bagi aplikasi yang telah dibuat.  

# Cara penggunaan aplikasi beserta penjelasanya
A. Website Client ArthoKu
Wesbite ArthoKu dibuat untuk membantu penggunanya agar dapat melakukan manajemen pengeluaran uang yang digunakan untuk tiap hari, minggu, bulan, hingga tahunan. Sehingga pengguna dapat menggunakan uang yang dimilikinya secara efesien, tepat, dan menguntunkan di kemudian hari.

- [x]  Melakukan Register / pendaftaran akun agar dapat mengakses semua fitur yang ada. Pada proses register calon pengguna diminta untuk memasukkan username, email, dan password. 
- [x] Login Akun ArthoKu untuk bisa masuk ke dalam akun Arthoku yang telah dibuat. 

- [x] Pada halaman tampilan awal sebelum login pengguna dapat mengakses tampilan home, mengetahui feature, tips, abou mengenai ArthoKu. Sedangkan jika sudah log in maka pengguna dapat mengakses halaman dashboard ArthoKu. 

- [x] Pada halaman dashboard ArthoKu pengguna dapat melihat sisa uang yang dimiliki, grafik pengeluaran dan pemasukan keuangan yang dimilikinya serta total pemasukan dan total pengeluaran pengguna selama ini. 

- [x] Pada Nav bar Add Data, pengguna dapat menambahkan data income dan data expense terkait keuangan pengguna. 

- [x] Selanjutnya, Pada history Income, pengguna dapat melihat seluruh data pendapatan yang telah pengguna miliki. Kemudian mengubah dan menghapus income. 

- [x] Kemudian,Pada history expens, pengguna dapat melihat seluruh data pengeluaran yang telah pengguna pakai. Kemudian mengubah dan menghapus data expense. 

- [x] Selanjutnya, pada halaman recommendation pengguna dapat melihat Rule keuangan yaitu 50/30/20 yang mana 50 % untuk kebutuhan, 30% untuk keinginan, dan 20% untuk tabungan atau saving. Yang mana hal tersebut sudah dijabarkan website sesuai dengan keaadan keuangan yang pengguna miliki saat itu. 

- [x] Dan terakhir, pada halaman setting, pengguna dapat merubah data nama akun dan juga pendapatan bulanan yang pengguna miliki. Serta pengguna dapat melakukan log out dari Website ArthoKu


B. Website Admin ArthoKu

Website admin berguna untuk manajemen data client yang menggunakan webiste ArthoK. Website admin juga digunakan untuk manajemen kategori expens (pengeluaran) dan kategori income (pemasukan) yang mana data kategori tersebut dapat dipilih oleh client ketikan menambahkan data pengeluaran dan pemasukkannya. Cara penggunaan Website Admin ArthoKu ialah sebagai berikut : 

- [x] Login Sebagai Admin --> Jika bukan admin tidak dapat mengakses website admin 
- [x] Pada halaman dashboard admin terdapat grafik data client yang baru melakukan proses register. 
- [x] Kemudian, pada halaman Data User Account terdapat data yang dapat dilihat, dijadikan admin dengan menekan button isAdmin, dan dihapus oleh admin. Pada halaman ini disajikan tabel data yang terdiri dari ID, Name, Email, Password dan Action. Pada halaman ini admin dapat melakukan pengurutan secara ascending dan descending. Kemudian admin juga dapat menggunakan form pencarian untuk mencari data User Account.

- [x] Selanjutnya , pada halaman Data Category Income disajikan tabel data yang terdiri dari ID, Name, Description dan Action. Pada halaman ini admin dapat melakukan pengurutan secara ascending dan descending, menambahkan data, mengubah data, serta menghapus data Category Income. Kemudian admin juga dapat menggunakan form pencarian untuk mencari data Category Income.


- [x] Selanjutnya , pada halaman Data Category Expense disajikan tabel data yang terdiri dari ID, Name, Description dan Action. Pada halaman ini admin dapat melakukan pengurutan secara ascending dan descending, menambahkan data, mengubah data, serta menghapus data Category Expense. Kemudian admin juga dapat menggunakan form pencarian untuk mencari data Category Expense.

- [x] Dan terakhir, terdapat log out guna keluar dari website Admin ArthoKu




# Fitur-fitur yang ditawarkan beserta screenshot program

A. Website Client ArthoKu
- [x] 
0. Login dan register untuk masuk ke dalam ArthoKu
1. Dashboard awal dengan fitur grafik pengeluaran dan pemasukan pengguna.
2. Tambah Data pengeluaran dan Tambah Data Pemasukan 
3. View Data pengeluaran
4. View Data Pemasukan 
5. Edit Data Pengeluaran 
6. Edit Data Pemasukan
7. Hapus Data Pengeluaran
8. Hapus Data Pemasukan
9. Rekomendasi untuk kebutuhan, keinginan, dan tabungan yang ideal yaitu dengan prinsip 50/30/20. 
10. Setting Nama dan juga Pendapatan bulanan rata-rata. 
11. Logout akun ArthoKu



B. Website Admin ArthoKu


1. Log In Sebagai Admin  
2. Show Data Pengguna 
3. Edit Data pengguna dengan menekan tombol isadmin untuk menjadikan admin 
4. Hapus Data Pengguna
5. Tambah Data Kategori Pengeluaran
6. Show Data Kategori Pengeluaran
7. Edit Data Kategori Pengeluaran
8. Hapus Data Kategori Pengeluaran
9. Tambah Data Kategori Pemasukan
10. Tambah Data Kategori Pemasukan
11. Show Data Kategori Pemasukan
12. Edit Data Kategori Pemasukan
13. Hapus Data Kategori Pemasukan
14. Logout

# Pengembang proyek
:monocle_face: <a href="https://github.com/diii1">Raviy Bayu S (19081010010)</a><br>
:smile: <a href="https://github.com/alyasaf">Alya Safira (19081010015)</a><br>
:sunglasses: <a href="https://github.com/alfyandoo">Muhammad Alfyando (19081010037)</a><br>
:boy: <a href="https://github.com/">M. Mushthafainal (19081010042)</a><br>
:man: <a href="https://github.com/">Kristian Rolando (19081010085)</a><br>
:smile: <a href="https://github.com/">Maurisa A (19081010192)</a><br>
Terima kasih atas kerja sama selama pengerjaan proyek ini!
