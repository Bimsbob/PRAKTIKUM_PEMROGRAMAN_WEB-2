<?php
// Contoh prosedur
function do_print() {
// Mencetak informasi timestamp
echo time();
}
// Memanggil prosedur
do_print();
echo '<br />';
// Contoh fungsi penjumlahan
function jumlah($a, $b) {
return ($a + $b);
}
echo jumlah(2, 3);
// Output: 5
?>
<?php
/**
* Mencetak string
* $teks nilai string
* $bold adalah argumen opsional
*/
function print_teks($teks, $bold = true) {
echo $bold ? '<b>' .$teks. '</b>' : $teks;
}
print_teks('Indonesiaku');
// Mencetak dengan huruf tebal
print_teks('Indonesiaku', false);
// Mencetak dengan huruf reguler
?>
 Definisi Fungsi/Prosedur
Contoh definisi fungsi dan prosedur beserta cara pemanggilannya
diperlihatkan sebagai berikut:

 Argumen Fungsi/Prosedur
Suatu fungsi dapat memiliki nol atau lebih argumen. Adapun jika diperlukan,
juga bisa dideklarasikan argumen yang sifatnya opsional. Deklarasi ini
sekaligus menginisialisasi nilai default pada argumen. Selain itu, argumen
opsional harus diletakkan di urutan paling belakang.