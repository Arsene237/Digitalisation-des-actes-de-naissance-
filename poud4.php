<?php
    include 'config.php';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/poud4.css"/>
    <title>Acte de naissance</title>
</head>
<body>
    <div class="acte">
        <p></p>
    </div>
</body>
</html>







<?php

session_start();


if (isset($_POST['front'])) {
    $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $sexe = $_POST['sexe'];
            $date = $_POST['date'];
            $lieu = $_POST['lieu'];
            $nom_pere = $_POST['nom_pere'];
            $prenom_pere = $_POST['prenom_pere'];
            $date_pere = $_POST['date_pere'];
            $lieu_pere = $_POST['lieu_pere'];
            $nat_pere = $_POST['nat_pere'];
            $prof_pere = $_POST['prof_pere'];
            $nom_mere = $_POST['nom_mere'];
            $prenom_mere = $_POST['prenom_mere'];
            $date_mere = $_POST['date_mere'];
            $lieu_mere = $_POST['lieu_mere'];
            $nat_mere = $_POST['nat_mere'];
            $prof_mere = $_POST['prof_mere'];
            $nom_officier = $_POST['nom_officier'];
    
$sql = "INSERT INTO 'acte (nom, prenom, sexe, date, lieu, nom_pere, prenom_pere, date_pere, lieu_pere, nat_pere, prof_pere, nom_mere, prenom_mere, date_mere, lieu_mere, nat_mere, prof_mere)' VALUES (NULL,'$nom','$prenom','$sexe','$date','$lieu','$nom_pere','$prenom_pere','$date_pere','$lieu_pere','$nat_pere','$prof_pere','$nom_mere','$prenom_mere','$date_mere','$lieu_mere','$nat_mere','$prof_mere')";

    $result = mysqli_query($conn, $sql);
     if ($result) {
         header("location: .php?msg=new record created successfully");
         # code...
     }else {
         echo "error: " .mysqli_error($conn);
     }
    # code...

    }

?>