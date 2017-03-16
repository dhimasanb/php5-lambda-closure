<?php
$min = 17;
$umur = [
  [ "nama" => "Dhimas", "umur" => 19],
  [ "nama" => "Ganteng", "umur" => 25],
  [ "nama" => "Keren", "umur" => 10],
  [ "nama" => "Banget", "umur" => 35],
];

//array_walk = mengiterasi (seperti foreach) element dari suatu array
array_walk($umur, function($warga) use ($min) {
  echo "Nama : " . $warga['nama'] . "\n";
  echo "Umur : " . $warga['umur'] . "\n";
  echo "Status : ";
  if ($warga['umur'] >= $min) {
    echo "Anda memenuhi syarat pembuatan KTP\n\n";
  } else {
    echo "Umur anda belum memenuhi syarat\n\n";
  }
});



















?>
