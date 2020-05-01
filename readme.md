## Cara menggunakan Aplikasi
- Jalankan dengan memasukkan di terminal 

```terminal
php artisan serve
```

- Buat database untuk menyimpan tabel
- 'your_database' bisa disesuaikan dengan nama database
```sql
CREATE DATABASE `your_database`
```

- Setting file .env untuk masuk ke database yang telah dibuat
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE='your_database'
DB_USERNAME=root
DB_PASSWORD=
```

- Migrate tabel yang sudah tersedia
```cmd
php artisan migrate
```

- Buat akun admin dengan seeding

- Email default admin : admin@admin.com  
- Password default admin : admin
- Login admin dan user satu page

```cmd
php artisan db:seed
```

- Setting max_upload karena default cuma 2 mb di php.ini

- harusnya filenya ada di C:\xampp\php\php.ini ada 2 file dua duanya diganti
```cmd
upload_max_filesize = 8M
```

- Jalankan Local Server
```cmd
php artisan serve
```

- Aplikasi bisa dibuka 
```cmd
127.0.0.1:8000
```

##Fitur yang sudah tersedia
###Untuk User

- Login + Register ketua
- Registrasi PKM
- Input Class Sesuai Dengan Lecturer Yang Sudah Dibuat
- Upload File Sesuai Session Yang Dibuat Admin

###Untuk Admin

- Add New Lecturer
- Add Class Sesuai Lecturer
- Add Session Untuk Jadwal Upload

##On development

###Untuk User

- Semua Validasi 
- Return Message Setelah Berhasil / Gagal
- Download kembali file yang telah diupload user

###Untuk Admin

- View Semua Uploaded File
- Download Uploaded File
