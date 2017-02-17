<?php

  //bab12 bindParam dan passing dengan referensi
  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

    try {

      $username="person";

      $array=array("user1","user2","user3","user4");

      $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);
      $stmt=$pdo->prepare("INSERT INTO user (username) VALUES (?)");
      $stmt->bindParam(1, $username);

      $stmt->execute();
      //echo "id terakhir :" .$pdo->lastInsertId()."<br";

      foreach ($array as $key => $value) {
        $username=$array[$key];
        $stmt->execute();
        echo "id terakhir :" .$pdo->lastInsertId()."<br";
      }
      

    } catch (PDOException $e) {
      
    }

    

?>