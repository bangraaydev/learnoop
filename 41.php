<?php
//Part 15: Pengertian Abstract Class dan Abstract Method PHP
/*
bstract Class adalah sebuah class yang tidak bisa di-instansiasi (tidak bisa dibuat menjadi objek) dan berperan sebagai ‘kerangka dasar’ bagi class turunannya. Di dalam abstract class umumnya akan memiliki abstract method.

Abstract Method adalah sebuah ‘method dasar’ yang harus diimplementasikan ulang di dalam class anak (child class). Abstract method ditulis tanpa isi dari method, melainkan hanya ‘signature’-nya saja. Signature dari sebuah method adalah bagian method yang terdiri dari nama method dan parameternya (jika ada).

Misalkan kita ingin membuat class yang terdiri dari berbagai jenis komputer seperti class laptop, class PC, class netbook, dan lain-lain. Seluruh class ini tentunya memiliki sifat-sifat komputer, seperti memiliki spesifikasi, memiliki processor, dan membutuhkan listrik. Dalam implementasinya, kita bisa membuat seluruh class ini diturunkan dari class komputer.

Agar lebih seragam, kita ingin seluruh class yang diturunkan dari class komputer, memiliki method yang ‘pasti’ ada dalam setiap class anak. Setiap komputer tentunya memiliki spesifikasi, sehingga kita ingin setiap class yang diturunkan dari class komputer memiliki method lihat_spec().

Bagaimana caranya ‘memaksa’ setiap class agar memiliki method lihat_spec()? Untuk kebutuhan ini, kita bisa membuat class komputer sebagai abstract class, dan method lihat_spec() sebagai abstract method.

Lebih lanjut, abstract method tidak hanya membuat setiap class memiliki method lihat_spec(), tetapi memaksa setiap method mengimplementasikan method lihat_spec() dengan isi method di serahkan kepada masing-masing class. Tentunya spesifikasi class laptop akan berbeda dengan spesifikasi class PC.

*/

abstract class komputer {
   abstract public function lihat_spec($pemilik);
}
 
$komputer_baru=new komputer();
// Fatal error: Cannot instantiate abstract class komputer

/*
Error diatas terjadi karena kita mencoba membuat objek dari abstract class. Untuk menggunakan class komputer, kita harus menurunkannya kepada class lain.
*/

?>