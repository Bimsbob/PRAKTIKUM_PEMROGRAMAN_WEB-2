<?php
echo "<h3>Tes Psikotes Deret Angka</h3>";

echo "a. ";
$a = [4, 6, 9, 13, 18];
for ($i = 5; $i < 7; $i++) {
    $selisih = ($i + 1); // selisih naik 1 setiap langkah
    $a[$i] = $a[$i - 1] + $selisih;
}
echo implode(", ", $a) . "<br>";

echo "b. ";
$b = [2, 2, 3, 3, 4];
$b[] = 4;
$b[] = 5;
echo implode(", ", $b) . "<br>";

echo "c. ";
$c = [1, 9, 2, 10, 3];
$c[] = 11;
$c[] = 4;
echo implode(", ", $c) . "<br>";
?>
