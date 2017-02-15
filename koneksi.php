<?php

  //bab 1 koneksi dengan database
  $host="localhost";
  $dbname="print_online1.0";

  $user="root";
  $password="";

  $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

  if ($pdo) {
    //echo "koneksi berhasil";
    echo "<pre>";
    foreach ($pdo->query("SELECT * FROM pengguna WHERE nama_pengguna LIKE 'h%'")as $b) {
      print_r($b);
    }
  }





?>
