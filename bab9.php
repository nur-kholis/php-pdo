<?php

  //bab9 mengeksekusi sql dalam fungsi exec
  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";


    $id_user=2;
    $username="kholis";
    $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

    /*$int=$pdo->exec("DELETE FROM user WHERE id_user=2");*/
    $int=$pdo->exec("UPDATE user SET username='hamim' WHERE id_user=1;");
    if($int==2){
      echo "sql complate";
    }
    

?>