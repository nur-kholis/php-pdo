<?php

  //bab6 perbedaan bindparam dan bindvalue
  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

  $nama="hamim";
  $id_user=0;

  $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);
  // Mengatur Error Mode di PDO untuk segera menampilkan exception ketika ada kesalahan
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($pdo) {
    $stmt=$pdo->prepare("SELECT * FROM user WHERE id_user>:ID_user AND username=:Username");
    $stmt->bindParam(":ID_user", $id_user);
    $stmt->bindValue(":Username", $nama);
    /*tidak mempengaruhi variabel*/
    $nama="gondrong";
    /*mempengaruhi variabel*/
    //$id_user=10;

    echo "<pre>";
    if($stmt->execute()){
      print_r($stmt->fetchAll());
    }
  }

?>
