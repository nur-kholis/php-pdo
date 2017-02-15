<?php

  //bab 1 koneksi dengan database
  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

  $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

  if ($pdo) {
    //echo "koneksi berhasil";
    echo "<pre>";
    foreach ($pdo->query("SELECT * FROM user WHERE username LIKE 'h%'")as $b) {
      print_r($b);
    }
  }





?>
