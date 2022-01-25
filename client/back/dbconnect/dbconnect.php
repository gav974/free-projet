<?php


$dbname ='snackchexo';
$mdp ='Freeprojet1';
$username ='snackchexo';
$host='snackchexo.mysql.db';


  

    try {
        $db = new PDO('mysql:host=$host,dbname=$dbname;charset=utf8mb4',$username, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);	
      } catch (PDOException $e) {
        echo "Connection failed : ". $e->getMessage();
      }
    
   







?>