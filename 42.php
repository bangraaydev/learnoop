<?php
//Part 15: Pengertian Abstract Class dan Abstract Method PHP
/*
Abstract Class Bisa Memiliki Property dan Method ‘biasa’

Jika sebuah class dinyatakan sebagai abstract class, class tersebut juga bisa memiliki property dan method ‘normal’. Namun kita hanya bisa mengakses property dan method ini dari class turunan, karena abstract class tidak bisa diinstansiasi.
*/

// buat abstract class
abstract class komputer{
    
   // buat abstract method
   abstract public function lihat_spec($pemilik);
    
   // buat method ‘biasa’
   public function hidupkan_komputer(){
     echo "Hidupkan Komputer";
   }
}

?>