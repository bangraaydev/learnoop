<?php
//Part 13: Pengertian Konstanta Class dalam Pemrograman Objek

/*
Konstanta Class atau class constant adalah konstanta yang berada di dalam class. Selain memiliki property dan method, PHP juga membolehkan kita menggunakan konstanta (constant) di dalam class.

Sebagaimana sifat konstanta reguler, class constant juga tidak bisa diubah nilainya ketika sudah didefenisikan. Untuk membuat class constant di dalam PHP, kita menggunakan perintah: const.

Penulisan nama konstanta dengan huruf besar bukan keharusan, namun lebih kepada kebiasaan programmer PHP agar mudah dibedakan dengan variabel yang umumnya ditulis dengan huruf kecil.
*/

//buat class laptop
class laptop {
		//buat konstanta
		const DOLLAR = '12000';
}

//panggil konstanta class
echo "Harga Dollar saat ini = Rp.".laptop::DOLLAR;

//hasil : Harga dollar saat ini = R. 12000

?>