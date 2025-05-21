# UTS Pemrograman Web – Data Supir (Laravel + Filament)

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## 📚 Tentang Proyek

Ini adalah proyek UTS mata kuliah **Pemrograman Web**, membangun aplikasi manajemen **Data Supir** menggunakan **Laravel 12** dan **Filament v3**.

## 🔗 Fitur Utama

- CRUD Data **Supir**
- CRUD Data **Kendaraan**
- CRUD Data **Riwayat Perjalanan**
- Relasi:
  - Supir `hasOne` Kendaraan
  - Supir `hasMany` Riwayat Perjalanan
- Filament Admin Panel
- Validasi + login admin
- Auto-generate UI dengan Filament

## 🧱 Struktur Tabel

### 1. `supirs`
- `id`, `nama`, `no_sim`, `alamat`, `telepon`, `tanggal_lahir`

### 2. `kendaraans`
- `id`, `supir_id`, `plat_nomor`, `merk`, `jenis`, `tahun`

### 3. `riwayat_perjalanans`
- `id`, `supir_id`, `tujuan`, `tanggal_berangkat`, `jam_berangkat`, `keterangan`

## ⚙️ Instalasi

```bash
git clone https://github.com/unan16/uts_web_supir.git
cd uts_web_supir
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
