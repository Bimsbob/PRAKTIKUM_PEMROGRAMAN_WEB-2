<?php
echo "<h3>Cara 1</h3>";

$i = 1;
while ($i <= 10) {
    print $i++;
}

echo "<br>";

echo "<h3>Cara 2</h3>";

$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>
