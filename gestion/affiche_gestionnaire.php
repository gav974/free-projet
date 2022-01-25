<?php 

    include("back/dbconnect/dbconnect.php");
    include("requete_affiche_gestionnaire.php");
  ?>
  
  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
  <table>
     <tr>
       <td>Nom : <b><?php echo htmlspecialchars($row['Nom']); ?></b></td>
    
       <td>Prénom : <b><?php echo htmlspecialchars($row['Prenom']); ?></b></td>  
    </tr>  
    <tr>
       <td>E-mail : <b><?php echo htmlspecialchars($row['Email']); ?></b></td>
     </tr>

     <tr>
       <td>Civilité : <b><?php echo htmlspecialchars($row['Civilité']); ?></b></td>
     </tr>

     <tr>
       <td>Adresse : <b><?php echo htmlspecialchars($row['Adresse']); ?></b></td>
     </tr>

     <tr>
       <td>Numéro de téléphone : <b><?php echo htmlspecialchars($row['Numerotelephone']); ?></b></td>
     </tr>

     <tr>
       <td>Offre : <b><?php echo htmlspecialchars($row['Offre']); ?></b></td>
     </tr>

     </table>
     <hr>
     <?php endwhile; ?>