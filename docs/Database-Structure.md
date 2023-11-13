# Database Structure

On this page we provide the lists of tables used to store the application data.

## Physical Data Model
https://drive.google.com/drive/folders/1PdjrHzzhN6qE0QUwBQKP1tqakvnJZgX9?usp=sharing

## Data Description
https://docs.google.com/spreadsheets/d/1P4eOQ1SMnZGYokDmvU2Rix9EbLcv-HF00rLYm9CZHmQ/edit?usp=sharing

Relasi antar tabel:

•	Tabel User memiliki hubungan one-to-many dengan tabel Sub Kategori, yaitu satu pengguna dapat memiliki banyak subkategori. Hubungan ini diwujudkan dengan field id_subkategori di tabel User yang merupakan Foreign Key ke tabel Sub Kategori.
•	Tabel Sub Kategori memiliki hubungan one-to-many dengan tabel Kategori, yaitu satu subkategori hanya dapat memiliki satu kategori. Hubungan ini diwujudkan dengan field id_kategori di tabel Sub Kategori yang merupakan Foreign Key ke tabel Kategori.

Berikut adalah penjelasan lebih rinci tentang tipe data dan relasi antar tabel:

Tipe data:
•	INT: Integer, digunakan untuk menyimpan data numerik bulat.
•	varchar(60): String, digunakan untuk menyimpan data teks dengan panjang maksimal 60 karakter.

Relasi antar tabel:

•	Hubungan one-to-many: Satu entitas dari tabel pertama dapat memiliki banyak entitas dari tabel kedua. Misalnya, satu pengguna dapat memiliki banyak subkategori.
•	Hubungan one-to-one: Satu entitas dari tabel pertama hanya dapat memiliki satu entitas dari tabel kedua. Misalnya, satu subkategori hanya dapat memiliki satu kategori.
Dengan Data Description ini, kita dapat memahami struktur data dari PDM yang kami berikan. Data Description ini dapat digunakan untuk membuat kode program yang dapat mengakses dan memanipulasi data dalam PDM.


## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)