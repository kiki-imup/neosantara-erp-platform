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
<img width="1917" height="888" alt="Pelanggan" src="https://github.com/user-attachments/assets/11276f8e-121a-4728-955e-35088396ab4d" />

<img width="1912" height="781" alt="Prospek" src="https://github.com/user-attachments/assets/ade5d7c0-83ca-45e2-b772-08f7a38b86d8" />

### 2. Modul Marketing (Kampanye Pemasaran)
*Halaman manajemen kampanye dan promo.*
<img width="1600" height="729" alt="Marketing Campaign" src="https://github.com/user-attachments/assets/6493cce3-e1a7-478a-98b1-ce01178c9112" />


### 3. Modul Inventory (Stok Gudang)
*Halaman manajemen produk dan supplier.*
<img width="1600" height="676" alt="Inventory" src="https://github.com/user-attachments/assets/1efcc6fb-20e0-48cd-b3a3-e6bd9ffdf301" />


## 🚀 Cara Menjalankan Project
1. Clone repository ini: `git clone https://github.com/kiki-imup/neosantara-erp-platform.git`
2. Masuk ke folder: `cd neosantara-erp-platform`
3. Install dependensi: `composer install`
4. Copy file env: `cp .env.example .env`
5. Generate key: `php artisan key:generate`
6. Sesuaikan konfigurasi database di file `.env`
7. Jalankan migrasi: `php artisan migrate`
8. Jalankan server: `php artisan serve`
