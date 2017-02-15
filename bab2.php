<?php

  //bab 1 koneksi dengan database
  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

  $nama="hamim";
  $id_user=0;

  $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

  if ($pdo) {
    $stmt=$pdo->prepare("SELECT * FROM user WHERE username=:Username");
    $stmt->bindParam(":Username",$nama);
    if($stmt->execute()){
      $rows=$stmt->fetchAll();
      print_r($rows);
    }

  }

?>
