<?php

  //bab8 pengamanan sql injection

  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

  /*contoh sql injection*/
  /*try {

    $id_user=2;
    $username="hideen' OR 1='1";
    $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);
    $stmt=$pdo->prepare("SELECT * FROM user WHERE id_user='$id_user' AND username='$username'");

    echo "<pre>";
    if ($stmt->execute()){
      print_r($stmt->fetchAll(PDO::FETCH_OBJ));   
    }


  } catch (PDOException $e) {
    echo $e->getMessage();
  }*/


  /*metode pertama dengan quote*/
  /*try {

    $id_user=2;
    $username="hideen' OR 1='1";
    $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

    $username=$pdo->quote($username);
    $stmt=$pdo->prepare("SELECT * FROM user WHERE id_user='$id_user' AND username='$username'");

    echo "your sql ".$username;

    echo "<pre>";
    if ($stmt->execute()){
      print_r($stmt->fetchAll(PDO::FETCH_OBJ));   
    }
    else{
      print_r($stmt->errorInfo());
    }


  } catch (PDOException $e) {
    echo $e->getMessage();
  }*/

  /*metode kedua dengan bindvalue*/
  /*try {

    $id_user=2;
    $username="hideen' OR 1='1";
    $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

    $stmt=$pdo->prepare("SELECT * FROM user WHERE id_user=? AND username=?");

    $stmt->bindValue(1, $id_user);
    $stmt->bindValue(2,$username);

    echo "<pre>";
    if ($stmt->execute()){
      print_r($stmt->fetchAll(PDO::FETCH_OBJ));   
    }
    else{
      print_r($stmt->errorInfo());
    }


  } catch (PDOException $e) {
    echo $e->getMessage();
  }*/


  /*metode ketiga menggunakan bindParam*/

  try {

    $id_user=2;
    $username="kholis";
    $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

    $stmt=$pdo->prepare("SELECT * FROM user WHERE id_user=:ID_user AND username=:Username");

    $stmt->bindParam(":ID_user", $id_user);
    $stmt->bindValue(":Username",$username);

    echo "<pre>";
    if ($stmt->execute()){
      $result=$stmt->fetchAll(PDO::FETCH_OBJ);   
      foreach ($result as $key => $value) {
        print_r($value);
      }
    }
    else{
      print_r($stmt->errorInfo());
    }


  } catch (PDOException $e) {
    echo $e->getMessage();
  }
?>
