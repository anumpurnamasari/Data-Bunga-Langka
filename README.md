CRUD Laravel - Data Bunga Langka

Aplikasi ini merupakan project CRUD sederhana menggunakan Laravel 12, PHP, dan MySQL (XAMPP).
Project ini digunakan untuk mengelola data bunga langka seperti nama, asal, kelangkaan, warna, dan deskripsi.

Fitur:
Create (menambah data bunga)
Read (menampilkan data bunga)
Update (mengedit data bunga)
Delete (menghapus data bunga)

Teknologi:
Laravel 12
PHP
MySQL (XAMPP)

Instalasi:
1. Pindahkan project ke folder XAMPP:
(C:\xampp\htdocs\nama-project)
2. Buka project di VS Code
3. Install dependency:
(composer install)
4. Copy file environment:
(cp .env.example .env)
5. Setting database di .env:
(DB_DATABASE=db_bunga_langka
DB_USERNAME=root
DB_PASSWORD=)
6. Generate key:
(php artisan key:generate)
7. Jalankan migration:
(php artisan migrate)
8. Jalankan server:
(php artisan serve)
9. Akses aplikasi:
(http://127.0.0.1:8000/bunga)
