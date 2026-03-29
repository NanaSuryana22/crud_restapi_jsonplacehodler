# Laravel CRUD JSONPlaceholder User

Aplikasi **Laravel CRUD** yang terintegrasi dengan **JSONPlaceholder User API** untuk melakukan simulasi operasi data user seperti **tambah, edit, hapus, dan menampilkan data**.

## Fitur

- Menampilkan daftar user dari JSONPlaceholder
- Menambah data user
- Mengubah data user
- Menghapus data user
- Validasi form sederhana
- Tampilan halaman utama, form tambah, dan form edit

## Tech Stack

- **Laravel**
- **PHP**
- **Bootstrap / Tailwind** (sesuaikan dengan project kamu)
- **JSONPlaceholder API**

---

## Instalasi

### 1. Clone repository
git clone https://github.com/username/nama-project.git
cd nama-project

---

### 2. Install dependency
composer update

---

### 3. Copy file environment
cp .env.example .env

---

### 4. Generate application key
php artisan key:generate

---

### 5. Atur konfigurasi .env
Sesuaikan file .env sesuai kebutuhan project kamu, terutama bagian database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

---

### 6. Jalankan migrasi
php artisan migrate

---

### 7. Jalankan aplikasi
php artisan serve

Setelah itu buka aplikasi di browser: http://127.0.0.1:8000

---

### Struktur Halaman
Halaman Utama: menampilkan daftar user
Form Tambah Data: untuk menambahkan user baru
Form Edit Data: untuk mengubah data user yang sudah ada

----

### Screenshots
Halaman Utama
(public/halaman_utama.png)
Halaman Form Tambah Data
(public/create_page.png)
Halaman Edit Data
(public/edit_page.png)
Halaman Show Page
(public/show_page.png)

---

### API Reference
Project ini menggunakan:
- https://jsonplaceholder.typicode.com/users

Endpoint yang umum dipakai:

GET /users → menampilkan data user
POST /users → menambah data user
PUT /users/{id} → mengubah data user
DELETE /users/{id} → menghapus data user

---
# Catatan

JSONPlaceholder adalah API dummy, jadi data yang diubah atau ditambahkan bersifat simulasi dan tidak benar-benar tersimpan permanen di server aslinya.

### License

Project ini dibuat untuk pembelajaran dan portofolio.