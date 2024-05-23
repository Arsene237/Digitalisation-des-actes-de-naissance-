<?php
    include 'config.php';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/poud3.css"/>
    <title>Verification</title>
</head>
<body>
    <fieldset>
        <?php
		    $sql = "SELECT * FROM `acte`";
		    $res = mysqli_query($conn, $sql);
		    $row = mysqli_fetch_assoc($res);
	    ?>
        <legend>Formulaire de declaration de naissance</legend>
        <label>Nom de l'enfant</label><div><?php echo $row['nom']?></div>
        <label>Prenom de l'enfant</label><div><?php echo $row['prenom']?></div>
        <lable>Sexe de l'enfant</label>
            <?php
                if ($row['sexe'] == 'M'){
                    echo 'M';
                }else{
                    echo 'F';
                }
            ?>
        <label>Date et lieu de naissance de l'enfant</label><div><?php echo $row['date']?></div><div>a <?php echo $row['lieu']?></div>



        <label>Nom du pere</label><div><?php echo $row['nom_pere']?></div>
        <label>Prenom du pere</label><div><?php echo $row['prenom_pere']?></div>
        <label>Date et lieu de naissance du pere</label><div><?php echo $row['date_pere']?></div><div>a <?php echo $row['lieu_pere']?></div>
        <label>Nationalite du pere</label><div><?php echo $row['nat_pere']?></div>
        <label>Profession du pere</label><div><?php echo $row['prof_pere']?></div>


        <label>Nom de la mere</label><div><?php echo $row['nom_mere']?></div>
        <label>Prenom de la mere</label><div><?php echo $row['prenom_mere']?></div>
        <label>Date et lieu de naissance de la mere</label><div><?php echo $row['date_mere']?></div><div>a <?php echo $row['lieu_mere']?></div>
        <label>Nationalite de la mere</label><div><?php echo $row['nat_mere']?></div>
        <label>Profession de la mere</label><div><?php echo $row['prof_mere']?></div>


        
        <label>Nom de l'officier</label><div><?php echo $row['nom_officier']?></div>



        <a href="poud2.php"><input type="button" value="Retour" class="back"/></a>
        <a href="poud4.php" class="front">Generer l'acte de naissance</a>
    </fieldset>
</body>
</html>