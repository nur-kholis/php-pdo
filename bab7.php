<?php

  //bab7 penempatan index di bindvalue
  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";


  try {

    $id_user=2;
    $username="kholis";
    $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt=$pdo->prepare("SELECT * FROM user WHERE id_user=? AND username=?");
    $stmt->bindParam(1,$id_user);
    $stmt->bindParam(2,$username);

    echo "<pre>";
    if($stmt->execute()){
      $rows=$stmt->fetch(PDO::FETCH_OBJ);
      print_r($rows);
    }else{
      print_r($stmt->error_info());  
    }


  } catch (PDOException $e) {
    echo $e->getMessage();
  }

?>
