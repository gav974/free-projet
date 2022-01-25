<?php
    $msg = ""; 
    if(isset($_POST['submitBtnLogin'])) {
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
      if($username != "" && $password != "") {
        try {
          $query = "select * from `gestionnaire` where `Identifiant`=:identifiant and `Motdepasse`=:motdepasse";
          $stmt = $db->prepare($query);
          $stmt->bindParam('identifiant', $username, PDO::PARAM_STR);
          $stmt->bindValue('motdepasse', $password, PDO::PARAM_STR);
          $stmt->execute();
          $count = $stmt->rowCount();
          $row   = $stmt->fetch(PDO::FETCH_ASSOC);
          if($count == 1 && !empty($row)) {
            /******************** Your code ***********************/
            $_SESSION['sess_user_id']   = $row['Iduser'];
            $_SESSION['sess_user_name'] = $row['identifiant'];
            header('location:home.php');
          } else {
            $msg = "Identifiant ou mot de passe incorrect!";
          }
        } catch (PDOException $e) {
          echo "Error : ".$e->getMessage();
        }
      } else {
        $msg = "Remplir les champs requis!";
      }
    }
  
    ?>