
# NikelFleet Management System
Technical Test Fullstack Developer

## About NikelFleet Management System
NikelFleet Management System merupakan web aplikasi yang digunakan untuk monitor kendaraan yang dimiliki oleh perusahaan tambang nikel. 
Aplikasi ini memiliki beberapa fitur seperti:
1. Terdapat 2 user (admin dan pihak yang menyetujui)
2. Admin dapat menginputkan pemesanan kendaraan dan menentukan driver serta pihak
yang menyetujui pemesanan
3. Persetujuan dilakukan berjenjang minimal 2 level
4. Pihak yang menyetujui dapat melakukan persetujuan melalui aplikasi
5. Terdapat dashboard yang menampilkan grafik pemakaian kendaraan
6. Terdapat laporan periodik pemesanan kendaraan yang dapat di export (Excel)

## Installation
Project ini dibuat menggunakan Laravel 8. Untuk menjalankan project ini, ikuti langkah-langkah berikut
1. Clone repository ini
2. Run `composer install`
3. Copy `.env.example` to `.env`
4. Buka XAMPP dan start Apache and MySQL
5. Buat database baru in phpMyAdmin
6. Download SQL file dari database/nikelfleet.sql
7. Import SQL file ke database yang baru dibuat
8. Ubah nama database in `.env` file
9. Run `php artisan key:generate`
10. Run `php artisan migrate`
11. Run `php artisan db:seed`
12. Run `php artisan serve`
13. Buka browser dan ketik `http://localhost:8000`

## Daftar username dan password
1. Admin
   - Email: naufalnau@example.com
   - Password: 12345678
2. Top Level Manager
    - Email: nauranaura@example.com
    - Password: 12345678
3. Middle Level Manager
    - Email: janedoa@gmail.com
    - Password: password

## PHP Version
Project ini menggunakan PHP versi 8.2.4

## Fitur yang belum selesai
1. Laporan dapat diexport ke Excel


Dibuat oleh:
Naura Valda Prameswari
