<h2>PHP</h2>

<?php
    phpinfo();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function check(){
            n=document.getElementById("i1");
            nom=n.value;
            if(nom=="chalry"){
                n.style.boder="1px solid red";
                return false;} // ici on veut bloquer l'envoi
            else return true; // on autorise l'envoi
        }
    </script>
</head>
<body>
    <h1>Client</h1>
    <form action="serveur.php" method="POST">
        <label>Nom</label>
        <input name="nom"  id ="i1" type="text" placeholder="Enter votre nom">
        <br>
        <label>Prenom</label>
        <input name="nom" id="i2" type="text" placeholder="Enter votre prenom">
        <input type="submit" value="Envoyez"
    </form>
</body>
</html>