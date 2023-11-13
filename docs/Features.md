# Database Structure

On this page we provide the lists of both functional and non functional requirements.

## Functional Requirements

### FR01 

•	Halaman Utama:
- Halaman utama harus menarik secara visual dan user-friendly, dengan skema warna dominan biru dan hitam.
- Halaman utama harus memiliki tombol login yang memungkinkan pengguna untuk masuk ke situs web.
- Halaman utama juga harus memiliki tombol tentang kami yang memberikan informasi tentang pengembang situs web.

•	Masuk:
- Halaman login harus memungkinkan pengguna untuk masuk ke situs web menggunakan alamat email dan kata sandi mereka.
- Halaman login juga harus memungkinkan pengguna untuk mengatur ulang kata sandi mereka jika mereka lupa.

•	Registrasi:
- Halaman pendaftaran harus memungkinkan pengguna untuk membuat akun baru di situs web.
- Halaman pendaftaran harus mengumpulkan informasi berikut dari pengguna: nama, alamat email, dan kata sandi.

•	Halaman Awal:
- Halaman awal harus memberikan kesan pertama yang kuat kepada pengunjung agar mereka tertarik untuk menjelajahi situs web lebih lanjut.
- Halaman awal harus menyertakan informasi yang relevan dan menarik tentang situs web, seperti ikhtisar singkat tentang tujuan dan fiturnya.
- Halaman awal juga harus menyertakan ajakan bertindak yang jelas untuk mengarahkan pengunjung ke tindakan yang diinginkan, seperti mendaftar akun atau mempelajari lebih lanjut tentang situs web.

•	Halaman Tim Kami:
- Halaman Tim Kami harus memperkenalkan anggota tim yang terlibat dalam pengelolaan dan pengembangan situs web DWAB ConnectHobby.
- Halaman Tim Kami harus menyertakan informasi berikut untuk setiap anggota tim:
1. Nama
2. Gelar
3. Foto
4. Bio singkat

•	Halaman Kategori:
- Halaman Kategori harus memungkinkan pengguna untuk menelusuri dan melihat konten atau informasi berdasarkan kategori hobi tertentu.
- Halaman Kategori harus menyertakan informasi berikut untuk setiap kategori hobi:
1. Nama kategori
2. Deskripsi
3. Daftar subkategori
4. Daftar posting atau diskusi terbaru dalam kategori

•	Halaman See All Subcategories (Lihat Semua Subkategori):
- Halaman See All Subcategories harus menampilkan daftar subkategori dari setiap kategori hobi.
- Halaman See All Subcategories harus menyertakan tombol "Join Group" untuk setiap subkategori.
- Ketika pengguna mengklik tombol "Join Group", mereka harus diarahkan ke grup WhatsApp subkategori tersebut.


### FR 02 BPMN
https://drive.google.com/drive/folders/1w-H9UxQa3VzAJpaDUtbjZB8Qv0OH0Bqe?usp=sharing

Diagram BPMN:

Diagram BPMN tersebut memberikan menunjukkan alur proses untuk bergabung dengan komunitas hobi di situs web DWAB ConnectHobby. Alur proses ini dimulai dengan pengguna yang mengunjungi halaman kategori hobi. Pengguna kemudian dapat memilih subkategori hobi yang mereka inginkan. Setelah memilih subkategori, pengguna dapat mengklik tombol "Join Group" untuk bergabung ke komunitas hobi tersebut.

Penjelasan Alur Proses:

Berikut adalah penjelasan lebih rinci tentang alur proses dalam diagram BPMN:

1. Start
Alur proses dimulai dengan pengguna yang mengunjungi halaman kategori hobi.

2. Find Your Hobbies
Pengguna dapat memilih kategori hobi yang mereka inginkan.

3. See More
Pengguna dapat mengklik tombol "See More" untuk melihat daftar subkategori dari kategori hobi yang mereka pilih.

4. Select Subcategory
Pengguna dapat memilih subkategori hobi yang mereka inginkan.

5. Join Group
Pengguna dapat mengklik tombol "Join Group" untuk bergabung ke komunitas hobi tersebut.

6. End
Pengguna berhasil bergabung ke komunitas hobi.

Keterangan Tambahan:

Alur proses ini hanya berlaku untuk pengguna yang sudah memiliki akun di situs web DWAB ConnectHobby.
Pengguna yang belum memiliki akun dapat mendaftar akun terlebih dahulu sebelum mengikuti komunitas hobi.
Ketika pengguna mengklik tombol "Join Group", mereka akan diarahkan ke halaman grup WhatsApp komunitas tersebut.
Kesimpulan

Diagram BPMN ini memberikan gambaran umum tentang alur proses untuk bergabung dengan komunitas hobi di situs web DWAB ConnectHobby. Alur proses ini dapat digunakan sebagai acuan dalam pengembangan situs web tersebut.


## Non Functional Requirements

Non-functional requirements (NFRs) adalah persyaratan yang tidak berkaitan langsung dengan fungsionalitas utama suatu sistem perangkat lunak, tetapi lebih berfokus pada bagaimana sistem tersebut harus beroperasi. Ini mencakup aspek-aspek seperti kinerja, keamanan, skalabilitas, reliabilitas, dan aspek lain yang memengaruhi pengalaman pengguna dan kehandalan sistem secara keseluruhan.

### NFR01 Kinerja
Waktu respons maksimum sistem harus kurang dari 5 detik.
### NFR02 Keamanan
Sistem harus mematuhi standar keamanan tertentu dan memiliki otentikasi ganda untuk penggunaan yang sensitif.
### NFR03 Scalability
Sistem harus mampu menangani peningkatan beban kerja tanpa kehilangan kinerja.
### NFR04 Reliability
Sistem harus memiliki tingkat ketersediaan yang tinggi, misalnya 99,9% uptime.
### NFR05 Ketersediaan
Sistem harus dapat diakses 24/7, kecuali selama pemeliharaan terjadwal.
### NFR06 Kepatuhan
Sistem harus mematuhi peraturan dan regulasi tertentu, seperti GDPR atau HIPAA.
 

NFRs penting dalam perancangan dan pengembangan perangkat lunak karena mereka memastikan bahwa sistem tidak hanya berfungsi dengan baik, tetapi juga memenuhi standar kualitas dan kinerja yang diharapkan oleh pengguna dan organisasi yang menggunakannya.


### NFR07 Mockup
https://drive.google.com/drive/folders/1h9U_blNAHvC_Ui8EH1jGnSTxwdCKTqbD?usp=sharing

## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)