<?php

  //bab5 menampilkan data dengan beberapa variasi fetching mode

  $host="localhost";
  $dbname="coba";

  $user="root";
  $password="";

  $nama="hamim";
  $id_user=0;

  $pdo=new PDO ("mysql:dbname=$dbname;host=$host", $user,$password);

  if ($pdo) {
    $stmt=$pdo->prepare("SELECT * FROM user");

    if($stmt){
      if ($stmt->execute()) {

        /*
        while ($rows=$stmt->fetch(PDO::FETCH_OBJ)) {
          echo $rows->username."<br>";
        }*/

        /*
          while ($rows=$stmt->fetch()) {
            echo $rows['username']."<br>";
          }
          */

          /*
          for($i=0;$row=$stmt->fetch();$i++){
            echo $i." ".$row['username']."<br>";
          }
          */

          $rows=$stmt->fetchAll();
          /*if($stmt->rowCount()>0){
            print_r($rows);
          }*/

          if(count($rows)>0){
            print_r($rows);
          }



      }
    }
  }

?>
