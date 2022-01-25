<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Espace Client</title>
</head>
<body>
<div class="container-fluid bg-success ">
    <div class="row">
        <h1>Espace Client</h1>
    </div>
</div>
<?php
include '../client/dbconnect/dbconnect.php';
include '../client/dbconnect/connect.php';

$result = $stmt->Fetch(PDO::FETCH_ASSOC)
?>

<div class="container">
    <div class="row">
        <div class="col-3 ">
            <p>nom:<span>&nbsp;<?php echo htmlspecialchars($result['Nom']); ?></span></p>
        </div>
        <div class="col-3"></div>
        <p>prenom:<span>&nbsp;<?php echo htmlspecialchars($result['Prenom']); ?></span></p>
        <div class="col-3"></div>
        <p>date naisance:<span>&nbsp;<?php echo htmlspecialchars($result['Datedenaissance']); ?></span></p>
        <div class="col-3"></div>
        <p>numero de telephone :</p>
        <div class="col-3"></div>
        <p>Adresse:</p>
        <div class="col-3"></div>
        Offre:
        <div class="col-3">
            date de facturation:
        </div>

        <div class="col-3"></div>
        <p>coordonnées bancaires:</p>
    </div>
</div>


</body>
</html>