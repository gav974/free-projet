<?php 
// récupérer gestionnaire
  $sql = "SELECT * FROM client";
   
  try{
 
   $stmt = $db->query($sql);

   $count = $stmt->rowCount();
   if($count == 0){
  
      $msgprono = "chargement en cours de ...";
    
   } 
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }

 
?>