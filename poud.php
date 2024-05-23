<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/poud.css"/>
    <title>Login</title>
</head>
<body>
    <img src="../img/logo-dla.png" class="img"/>
    <!--<img src="../img/iai.jpg" class="img2"/>-->
    <div class="formul">
        <form method="post" action="poud2.php">
            <marquee behavior="" direction="right"><h2>L O G I N</h2></marquee><br/>
            <table>
                <tr>
                    <td><input type="text" placeholder="Entrer votre pseudo" id="psd"/><br/><br/></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Entrer votre mdp" id="pwd"/><br/><br/></td>
                </tr>
            </table>
            <!--<label>Pseudo:</label>
            <input type="text"/><br/><br/>
            <label>Mot de passe:</label>
            <input type="password" id="pwd"/><br/><br/>-->
            <input type="button" value="Inscription" class="ins"/>
            <a href="poud2.php"><input type="button" value="Connexion" class="con" onclick="verif()"/></a>
        </form>
    </div>
    <p>Copyright @groupe8</p>
    <script src="../js/poud.js"></script>
</body>
</html>