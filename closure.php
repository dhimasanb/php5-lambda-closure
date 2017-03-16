<?php
$namadepan = "Dhimas";
$namabelakang = "Ganteng";

// function nama($namadepan, $namabelakang) {
//   return $namadepan . ' ' . $namabelakang;
// }

// merubah fungsi nama menjadi closure dan menggunakan keyword 'use'
$namalengkap = function() use ($namadepan, $namabelakang) {
  return $namadepan . ' ' . $namabelakang;
};

function belajar($namalengkap) {
  echo "Belajar Closure PHP5 dengan $namalengkap\n";
}

// belajar(nama($namadepan, $namabelakang));
belajar($namalengkap($namadepan, $namabelakang));
?>
