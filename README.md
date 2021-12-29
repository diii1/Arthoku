# ArthoKu

# INSTALATION

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
php artisan key:generate
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
# HALAMAN UTAMA APLIKASI
![tampilan-utama](https://github.com/diii1/Arthoku/blob/main/images/tampilan-utama.PNG)



# DESKRIPSI APLIKASI
Aplikasi yang dibuat adalah aplikasi berbasis web. Nama aplikasinya adalah “ArthoKu” yang diambil dari kata “artho” dalam bahasa Jawa yang berarti uang. Aplikasi ini berbentuk planner yang meliputi beberapa bagian yaitu pemasukan, pengeluaran, neraca, dan grafik. Dengan adanya aplikasi ini diharapkan dapat membantu melacak pengeluaran dan pemasukan Anda menuju ekonomi yang sejahtera.

# SITEMAP

ArthoKu
![Sitemap_Arthoku](https://github.com/diii1/Arthoku/blob/main/images/sitemap.png)

# TEKNOLOGI
1. Visual Studi Code : Sebagai text editor
2. CSS : Untuk mengatur responsive program 
3. Bahasa pemrograman PHP : Sebagai bahasa utama dalam pembuatan program Arthoku 
4. Chart.Js : Sebagai library untuk menggunakan chart pada aplikasi yang telah dibuat. 
5. Laravel 8 : Framework yang digunakan dalam pembuatan aplikasi 
6. Bootsrap 4 dan 5 : Framework bagian CSS yang digunakan dalam pembuatan aplikasi 
7. Xampp : Sebagai tempat database bagi aplikasi yang telah dibuat.  

# CARA PENGUNAAN APLIKASI BESERTA PENJELANNYA
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

1. Register untuk membuat akun  ArthoKu --> ![Tampilan_Register](https://github.com/diii1/Arthoku/blob/main/images/Tampilan%20Register.png)
2. Log In untuk masuk ke website Arthoku --> ![Tampilan_Login](https://github.com/diii1/Arthoku/blob/main/images/Tampilan%20Log%20In%20Client.png)
3. Dashboard awal dengan fitur grafik pengeluaran dan pemasukan pengguna --> ![Tampilan_Dashboard](https://github.com/diii1/Arthoku/blob/main/images/Tampilan%20Dashboard%20Client%20.png)
4. Tambah Data pengeluaran dan Tambah Data Pemasukan -->![Tampilan_Add_Data_Expense & Add_Data_Income](https://github.com/diii1/Arthoku/blob/main/images/Tampilan_AddIncome_AddExtense.PNG)
5. View Data pengeluaran --> ![Tampilan_History_Income](https://github.com/diii1/Arthoku/blob/main/images/History_Expense.PNG) 
6. View Data Pemasukan --> ![Tampilan_History_Income](https://github.com/diii1/Arthoku/blob/main/images/History_Income.PNG)
7. Edit Data Pengeluaran --> ![Tampilan_Edit_Data_Expense](https://github.com/diii1/Arthoku/blob/main/images/Edit_Data_Expense.PNG)
8. Edit Data Pemasukan --> ![Tampilan_Edit_Data_Income](https://github.com/diii1/Arthoku/blob/main/images/Edit_Data_Income.PNG)
9. Hapus Data Pengeluaran --> ![Tampilan_Hapus_Data_Expense](https://github.com/diii1/Arthoku/blob/main/images/Hapus_Data_Expense.png)
10.Hapus Data Pemasukan --> ![Tampilan_Hapus_Data_Income](https://github.com/diii1/Arthoku/blob/main/images/Hapus_Data_Income.png)
11. Rekomendasi untuk kebutuhan, keinginan, dan tabungan yang ideal yaitu dengan prinsip 50/30/20 --> ![Tampilan_Recommendation](https://github.com/diii1/Arthoku/blob/main/images/Tampilan_Recommendation.png)
14. View Setting  --> ![Tampilan_Setting](https://github.com/diii1/Arthoku/blob/main/images/Setting.png)
15. Edit Nama setting --> ![Tampilan_Edit_Name](https://github.com/diii1/Arthoku/blob/main/images/Edit_Name.png)
16. Edit Pendapatan bulanan rata-rata --> ![Tampilan_Average_Income](https://github.com/diii1/Arthoku/blob/main/images/Tampilan_Average_Income.png)



B. Website Admin ArthoKu


1. Log In Sebagai Admin  -->  ![Tampilan_LogIn_Admin](https://github.com/diii1/Arthoku/blob/main/images/admin/LogIn%20Admin.png)
2. Show Data Pengguna --> ![Tampilan_Data_User_Account](https://github.com/diii1/Arthoku/blob/main/images/admin/data-user.PNG)
3. Edit Data pengguna dengan menekan tombol isadmin untuk menjadikan admin  --> ![Tampilan_Edit_Data_User_Account](https://github.com/diii1/Arthoku/blob/main/images/admin/adit-data-pengguna-jadi-admin.PNG)
4. . Tambah Data Kategori Pengeluaran --> ![Tampilan_add-category-expense](https://github.com/diii1/Arthoku/blob/main/images/admin/add-categoty-expense.PNG)
5. . Show Data Kategori Pengeluaran --> ![Tampilan_Show-category-expense](https://github.com/diii1/Arthoku/blob/main/images/admin/Show_Category_Expense.png)
6. . Edit Data Kategori Pengeluaran --> ![Tampilan_Edit_Category_Expense](https://github.com/diii1/Arthoku/blob/main/images/admin/Edit_Category_Expense.png)
7. . Hapus Data Kategori Pengeluaran --> ![Tampilan_Hapus_Category_Expense](https://github.com/diii1/Arthoku/blob/main/images/admin/Hapus_Category_Expense.png)
8. . Tambah Data Kategori Pemasukan --> ![Tampilan_Tambah_Category_Income](https://github.com/diii1/Arthoku/blob/main/images/admin/add-categoty-income.PNG)
9. . Show Data Kategori Pemasukan --> ![Tampilan_Show_Category_Income](https://github.com/diii1/Arthoku/blob/main/images/admin/Show_Category_Income%20(1).png)
10. . Edit Data Kategori Pemasukan --> ![Tampilan_Edit_Category_Income](https://github.com/diii1/Arthoku/blob/main/images/admin/Edit_Category_Income.png)
11. . Hapus Data Kategori Pemasukan --> ![Tampilan_Hapus_Category_Income](https://github.com/diii1/Arthoku/blob/main/images/admin/Hapus_Category_Income.png)
12. . Logout --> ![Tampilan_Log_Out](https://github.com/diii1/Arthoku/blob/main/images/admin/logout-admin.PNG)

# CODE INTI
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-admin-category-expense.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-admin-category-income.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-admin-dashboard.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-admin-user.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-auth-login.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-auth-register.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-client-app.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-client-dashboard.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-client-home.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-client-record-expense.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-client-record-income.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/c-client-setting.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/m-cagory-expense.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/m-cagory-income.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/m-record-expense.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/m-record-income.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/m-users.png)
![ini code gan](https://github.com/diii1/Arthoku/blob/main/images/code/route.png)

# PENGEMBANG PROYEK
:monocle_face: <a href="https://github.com/diii1">Raviy Bayu S (19081010010)</a><br>
:smile: <a href="https://github.com/alyasaf">Alya Safira (19081010015)</a><br>
:sunglasses: <a href="https://github.com/alfyandoo">Muhammad Alfyando (19081010037)</a><br>
:boy: <a href="https://github.com/">M. Mushthafainal (19081010042)</a><br>
:man: <a href="https://github.com/">Kristian Rolando (19081010085)</a><br>
:smile: <a href="https://github.com/">Maurisa A (19081010192)</a><br>
Terima kasih atas kerja sama selama pengerjaan proyek ini!
