<?php

// include './client/back/dbconnect/dbconnect.php';
 
  $sql = "SELECT * FROM client ";
   
  try{
 
   $stmt = $db->query($sql);
  
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }

   ;

?>