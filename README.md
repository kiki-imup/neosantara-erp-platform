# Platform ERP PT Neosantara Group

Platform Enterprise Resource Planning (ERP) terintegrasi untuk PT Neosantara Group. Dibangun menggunakan Laravel dan FilamentPHP v5 untuk mengelola CRM, pemasaran, dan inventaris gudang.

## 👥 Anggota Kelompok & Pembagian Tugas
**Kelas:** 3 [Isi Kelas Anda]
**Mata Kuliah:** Sistem Enterprise

| No | Nama | NIM | Peran | Modul yang Dikerjakan |
|:---|:---|:---|:---|:---|
| 1 | Rizki Ramadhanti Sapitri | 2401143013 | Ketua | Prospek Pelanggan (Leads & Customers) |
| 2 | Nely Salfiah Daulay | 2401143003 | Anggota | Kampanye Pemasaran (Campaigns & Promos) |
| 3 | Zandini Rozac | 2401143004 | Anggota | Stok Gudang (Products & Suppliers) |

## 📸 Dokumentasi Aplikasi (Screenshot)

### 1. Modul CRM (Prospek Pelanggan)
*Halaman manajemen prospek dan pelanggan.*
![Screenshot CRM]([LINK_GAMBAR_1])

### 2. Modul Marketing (Kampanye Pemasaran)
*Halaman manajemen kampanye dan promo.*
![Screenshot Marketing]([LINK_GAMBAR_2])

### 3. Modul Inventory (Stok Gudang)
*Halaman manajemen produk dan supplier.*
![Screenshot Inventory]([LINK_GAMBAR_3])

## 🚀 Cara Menjalankan Project
1. Clone repository ini: `git clone https://github.com/kiki-imup/neosantara-erp-platform.git`
2. Masuk ke folder: `cd neosantara-erp-platform`
3. Install dependensi: `composer install`
4. Copy file env: `cp .env.example .env`
5. Generate key: `php artisan key:generate`
6. Sesuaikan konfigurasi database di file `.env`
7. Jalankan migrasi: `php artisan migrate`
8. Jalankan server: `php artisan serve`
