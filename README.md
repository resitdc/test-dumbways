# Test Dumbways

# ⚠️ _PERINGATAN:_ ANDA PERLU MENGGUNAKAN BROWSER YANG SUPPORT JAVASCRIPT

## Fungsi masing masing File

1. File 2.html
    1. Fungsi file ini untuk menjawab soal no 2, menghitung total element pada array dan mencari nilai tertinggi nya
    1. Di File ini cukup langsung di buka di browser yang support javascript, karna saya mengerjakan nya menggunakan Javascript
1. File 3.html
    1. Fungsi file ini untuk menjawab soal no 3, Mencetak Patern Persegi
    1. Di File ini cukup langsung di buka di browser yang support javascript, karna saya mengerjakan nya menggunakan Javascript
1. Folder 4
    1. Pada Folder 4, terdapat banyak file, yang isi nya
    	1. beberapa Screenshot Query Mysql versi CLI
    	1. dan File Database yang dibuat, berekstensikan .sql, untuk menjalankan nya, anda hanya perlu Import File ke PHP My Admin atau Database Manajer Lain nya
1. Folder 5
	1. Nah di folder 5 ini saya membuat CRUD dari database yang ada di Folder 4, jadi untuk melihat folder 5 ini, anda perlu Mengimport File 4.sql terlebih dulu
	1. Pada Folder 5 ini, saya membuat CRUD menggunakan PHP, HTML, CSS, Javascript
	1. CRUD ini saya membuat Backend & FrontEnd, dengan Backend yang merespon JSON lalu di kelola oleh Front End
	1. BackEnd nya memerlukan PHP, sedangkan Front End nya tidak perlu, karna hanya ekstensi HTML dan JS saja
	1. Disini saya tidak menggunakan Framework ataupun Library

## SETTING MASTER URL PADA FRONT END FOLDER 5

### Anda perlu menyeting url Backend pada file Front End yang saya buat, caranya mudah
Anda hanya perlu membuka file detail.html dan index.html, lalu cari kode
```js
	<script type="text/javascript">
		const master_url 				= 'http://127.0.0.1/test-dumbways/5/api/provinsi.php';
	</script>
```

jika sudah ketemu, anda tinggal mengubah `value` pada variabel `master_url` dengan url backend pada laptop anda


## URL BackEnd hanya ada 2
URL Backend hanya ada 2, yaitu


1. `URL ANDA`/api/provinsi.php
    1. /detail?id= `id_provinsi`
    1. /delete?id= `id_provinsi`
    1. /save?id= `id_provinsi`
1.  `URL ANDA`/api/kabupaten.php?id=`id_provinsi`
    1. /detail?id= `id_kabupaten`
    1. /delete?id= `id_kabupaten`
    1. /save?id= `id_kabupaten`

Untuk Save dan Update data, itu menggunakan URL yang sama
Jika anda ingin membuat data baru, anda tidka perlu mengirim data `id`
Jika anda mengirim data `id` itu artinya anda mengupdate data dengan `id` tersebut