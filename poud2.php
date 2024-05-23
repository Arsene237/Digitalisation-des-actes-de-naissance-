<?php
    include 'config.php';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/poud2.css"/>
    <title>Formulaire de declaration</title>
</head>
<body>
    <form method="post" action="poud3.php">
        <fieldset>
            <?php
                $nom = ['nom']; $prenom = ['prenom']; $sexe = ['sexe']; $date = ['date']; $lieu = ['lieu'];
                $nom_pere = ['nom_pere']; $prenom_pere = ['prenom_pere']; $date_pere = ['date_pere']; $lieu_pere = ['lieu_pere']; $nat_pere = ['nat_pere']; $prof_pere = ['prof_pere'];
                $nom_mere = ['nom_mere']; $prenom_mere = ['prenom_mere']; $date_mere = ['date_mere']; $lieu_mere = ['lieu_mere']; $nat_mere = ['nat_mere']; $prof_mere = ['prof_mere'];
                $nom_officier = ['nom_officier'];
		        $sql = "INSERT INTO `acte` ('', nom, prenom, sexe, date, lieu, nom_pere, prenom_pere, date_pere, lieu_pere, nat_pere, prof_pere, nom_mere, prenom_mere, date_mere, lieu_mere, nat_mere, prof_mere, nom_officier) VALUES ('', '$nom', '$prenom', '$sexe', '$date', '$lieu', '$nom_pere', '$prenom_pere', '$date_pere', '$lieu_pere', '$nat_pere', '$prof_pere', '$nom_mere', '$prenom_mere', '$date_mere', '$lieu_mere', '$nat_mere', '$prof_mere', '$nom_officier')";
		        $res = mysqli_query($conn, $sql);
		        $row = mysqli_fetch_assoc($res);
	        ?>
            <legend>Formulaire de declaration de naissance</legend>
            <label for="">Nom (En lettres capitales)</label><input type="text" id="nom"/><?php //$row['nom']?><br/><br/>
            <label for="">Prenom</label><input type="text" id="prenom"/><?php //$row['prenom']?><br/><br/>
            <label for="">Sexe</label>
            <label for="bsex" class="b">M</label><input type="radio" name="sexe" id="bsex"/>
            <label for="gsex" class="g">F</label><input type="radio" name="sexe" id="gsex"/><br/><br/>
            <label for="">Date et lieu de naissance</label><input type="date" id="date"/>a<input type="text" id="lieu"/><br/><br/>
            <label for="">Nom du pere</label><input type="text" id="nom_pere"/><br/><br/>
            <label for="">Prenom du pere</label><input type="text" id="prenom_pere"/><br/><br/>
            <label for="">Date et lieu de naissance du pere</label><input type="date" id="date_pere"/>a<input type="text" id="lieu_pere"/><br/><br/>
            <label for="">Nationalite du pere</label><input type="text" id="nat_pere"/><br/><br/>
            <label for="">Profession du pere</label><input type="text" id="prof_pere"/><br/><br/>
            <label for="">Nom de la mere</label><input type="text" id="nom_mere"/><br/><br/>
            <label for="">Prenom de la mere</label><input type="text" id="prenom_mere"/><br/><br/>
            <label for="">Date et lieu de naissance de la mere</label><input type="date" id="date_mere"/>a<input type="text" id="lieu_mere"/><br/><br/>
            <label for="">Nationalite de la mere</label><input type="text" id="nat_mere"/><br/><br/>
            <label for="">Profession de la mere</label><input type="text" id="prof_mere"/><br/><br/>
            <label for="">Nom de l'officier</label><input type="text" id="nom_officier"/><br/>
            <a href="poud.php"><input type="button" value="Retour" class="back"/></a>
            <a href="poud3.php"><input type="button" value="Suivant" class="front"/></a>       
        </fieldset>
    </form>
</body>
</html>