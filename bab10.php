<?php

  //bab10 memgambil ID terakhir
  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

    try {
      $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);
      $stmt=$pdo->prepare("INSERT INTO user (username) VALUES (?)");
      $stmt->bindValue(1, "slamet");

      if($stmt->execute()){
        $id=$pdo->lastInsertId();
        echo "id terakhir :" .$id."<br";
      }

      

    } catch (PDOException $e) {
      
    }

    

?>