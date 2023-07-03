<h1>Final Project: Ujian Akhir Semester</h1>

```bash
Kelompok 3      : - Abdul Aziz Firdaus  (312110262)
                  - Alif Dwi Putra      (312110401)
                  - Ogie Kukuh Yuwono   (312110472)
                  - Laela Nur Rohmah    (312110425)
                  - Nurul Najwa Sabilla (312110451)
                  - Fitriyani           (312110460)
Judul Project   : Database Pengelolaan Kas RT
Kelas           : TI. 21. A3
Mata Kuliah     : Pemrograman Web 2
Dosen Pengampu  : Agung Nugroho,S.Kom.,M.Kom
```

<h2>Demo Aplikasi dan Domain</h2>

1. Demo terlampir pada link youtube, berikut ini:

   https://www.youtube.com/watch?v=8EntpcumFKo

2. Domain aplikasi, berikut ini:

   http://iuran-kas-rt.free.nf/

<h2>Logo Aplikasi Pengelolaan Kas RT</h2>

> Logo dari Aplikasi Sistem Pengelolaan Kas RT

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/99027675/0aa74b14-d496-4059-84dc-ff1a9baa8453" alt ="logo project web (1)" width ="250">

<h2>Penjelasan</h2>

Sistem pengelolaan data kas RT berbasis web menggunakan CodeIgniter 4 dan MySQL adalah aplikasi yang dirancang untuk membantu pengurus RT dalam mengelola keuangan RT dengan lebih efisien. Sistem ini memanfaatkan framework PHP CodeIgniter 4 sebagai dasar pengembangan aplikasi web dan basis data MySQL sebagai tempat penyimpanan data.

Dengan sistem ini, pengguna dapat melakukan berbagai tugas penting terkait pengelolaan keuangan RT, termasuk pencatatan transaksi, pelacakan pemasukan dan pengeluaran, serta pembuatan laporan keuangan.

<h2>Usecase Diagram</h2>

> Usecase Diagram dari Aplikasi Sistem Pengelolaan Kas RT dengan Bootstrap

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/96130416/6b04e11c-9f72-40f0-a5b5-d3ef150a7b50" alt ="Usecase2" width ="400">

<h2>Penjelasan</h2>

1.1 admin dapat login dengan cara memasukkan email dan password.

1.2 Admin dapat mengakses Data Warga setelah melakukan login, admin dapat melihat data warga, dapat mengubah/mengedit Data Warga dan dapat menghapus Data Warga yang telah di tambahkan.

1.3 Admin dapat mengakses menu Data Iuran Kas, admin dapat melihat data iuran yang telah ditambahkan, dapat mengubah data iuran kas warga, dan juga dapat menghapus data iuran kas warga yang telah di tambahkan.

1.4 Admin dapat mengakses menu document setelah melakukan login. Admin dapat melihat laporan keseluruhan data yang telah di tambahkan, dapat mengubah atau menghapus data laporan, dan juga dapat mengekspor data tersebut dalam bentuk file dokumen.

1.5 Admin dapat mengakses menu Admin (seperti profile), dimana admin utama dapat menambahkan akun admin lain, mengedit data admin, dan menghapus data.

1.5 Admin dapat melakukan logout, setelah melakukan logout admin akan ditampilkan kembali ke tampilan awal login Sistem Pengelolaan Kas RT

> Usecase Diagram dari Aplikasi Sistem Pengelolaan Kas RT dengan template sederrhana

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/96130416/74bb361b-0722-47ad-bec9-4a0790885de5" alt ="Usecase1" width ="400">

<h2>Penjelasan</h2>

2.1 admin dapat melakukan login dengan cara memasukkan email dan password.

2.2 Admin dapat mengakses Data Warga setelah melakukan login, admin dapat melihat data warga, dapat mengubah/mengedit Data Warga dan dapat menghapus Data Warga yang telah di tambahkan.

2.3 Admin dapat mengakses menu Data Iuran Kas, admin dapat melihat data iuran yang telah ditambahkan, dapat mengubah data iuran kas warga, dan juga dapat menghapus data iuran kas warga yang telah di tambahkan.

2.4 Admin dapat mengakses menu laporan setelah melakuan login. Admin dapat melihat keseluruhan data yang telah di tambahkan, dan juga dapat mengubah atau menghapus data laporan.

2.5 Admin dapat melakukan logout, setelah melakukan logout admin akan ditampilkan kembali ke tampilan awal dari sistem pengelolaan kas RT

<h2>Design Rancangan Sistem</h2>

> Wireframe Design dari Aplikasi Sistem Pengelolaan Kas RT dengan Bootstrap

1. Wireframe Fitur Untuk Login

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/437e50e3-3632-431d-a923-0b42a4bae71b" alt ="WF Login" width ="450">

2. Wireframe Fitur Untuk Dashboard

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/8dbb5905-364f-477e-9fed-71773786c7ae" alt ="WF Dashboard-Home" width ="450">

3. Wireframe Fitur Untuk Data Warga

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/891958fe-5e79-486b-b036-ea58187ef694" alt ="WF Data Warga" width ="450">

4. Wireframe Fitur Untuk Data Iuran Kas

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/2e402380-8f1e-4898-96e3-fd55bced4a40" alt ="WF Data Iuran Kas" width ="450">

5. Wireframe Fitur Untuk Document Warga

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/516aed87-7dd9-4cb4-89fd-877dfdcc00f3" alt ="WF Document" width ="450">

6. Wireframe Fitur Untuk Admin Iuran Kas

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/b554d63f-8ffe-4d91-a233-8f0225b1941e" alt ="WF Admin" width ="450">

7. Wireframe Fitur Untuk Menambahkan Data Warga

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/7d7cdd3c-6d45-4077-a035-62cf523b88ec" alt ="WF Add Data Warga" width ="450">

8. Wireframe Fitur Untuk Menambahkan Iuran Kas

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/c1c3f831-a44e-4bc9-a8c2-31bd9d0aa1db" alt ="WF Add Iuran Kas" width ="450">

9. Wireframe Fitur Untuk Menambahkan Admin

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/b92b8a31-4f1d-467a-9574-b21b9a62c1ef" alt ="WF Tambah Admin" width ="450">

10. Wireframe Fitur Untuk Logout

<img src = "https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/96df98af-e7c7-4bbd-8f5d-c0922b846776" alt ="WF Logout" width ="450">

> Design dari Aplikasi Sistem Pengelolaan Kas RT dengan Bootstrap

1. Design Fitur Untuk Login

![1  Login](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/60f299d0-2c9e-4a8e-9959-6513b5ff5e37)

2. Design Fitur Untuk Dashboard

![2  Beranda](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/f0b06971-b3b8-454a-b1fa-9aeb24342c99)

3. Design Fitur Untuk Data Warga

![3  Data Warga](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/50e110be-b7ae-4d8f-bb31-492cd7e625e3)

4. Design Fitur Untuk Data Iuran Kas

![4  Data Iuran Kas](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/8887a322-7961-41e1-96e4-9def142a5940)

5. Design Fitur Untuk Document Warga

![5  Document](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/c171a3ec-cf16-47a1-993a-835ad0fca97c)

6. Design Fitur Untuk Admin Iuran Kas

![6  Admin](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/f2e314c7-1fcf-4753-a909-8c2dab216e81)

7. Design Fitur Untuk Menambahkan Data Warga

![7  Add Data Warga](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/24de394e-d4af-425f-aa6d-3f9cbfc409ba)

8. Design Fitur Untuk Menambahkan Iuran Kas

![8  Add Iuran Kas](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/0de6033c-a974-456c-857c-fb226e8177e1)-

9. Design Fitur Untuk Menambahkan Admin

![9  Add Admin](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/6b132320-c77e-4326-94d1-4c2a4ac43085)

10. Design Fitur Untuk Logout

![10  Logout](https://github.com/AzizLike29/Pengelolaan_Kas_RT/assets/118416658/a50f5bd9-6f9b-4dd9-a36c-a4312be4a54e)

