<?php
// Contoh menggunakan for
for ($i = 1; $i <= 5; $i++) { 
    echo "Perulangan ke-$i <br>"; 
}

// Contoh menggunakan while
$i = 1;
while ($i <= 5) {
    echo "Perulangan ke-$i <br>";
    $i++; 
}

// Contoh menggunakan foreach untuk array
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $item) { 
    echo "Buah: $item <br>"; 
}
?>
