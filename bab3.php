<?php

  //bab 3 fetching

  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

  $nama="hamim";
  $id_user=0;

  $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

  if ($pdo) {
    echo "<pre>";
    $stmt=$pdo->prepare("SELECT * FROM user WHERE username=:Username");
    $stmt->bindParam(":Username",$nama);
    if($stmt->execute()){
      $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
      //print_r($rows[0]['id_user']);
      foreach($rows as $k){
        echo $k['username'];
          echo $k['password'];
      }
    }

  }

?>
