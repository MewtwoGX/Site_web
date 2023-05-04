<?php

$connection=mysqli_connect("localhost", "olivier", "SSfoagny.88", "olivier");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}
else {
if(isset($_POST['Bouton'])){ // Autre contrôle pour vérifier si la variable $_POST['Bouton'] est bien définie
   $nomA=$_POST['nomA'];
   $nomF=$_POST['nomF'];
   $numdex=$_POST['numdex'];

   // Requête d'insertion
   $Ajouter="INSERT INTO 2G (nomA, nomF, numdex) VALUES ('$nomA', '$nomF', '$numdex')";

   // Exécution de la reqête
   mysqli_query($connection, $Ajouter) or die('Erreur SQL !'.$Ajouter.'<br>'.mysqli_error($connection));
}
}

?>

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/ajouter.css" />
    <link rel="icon" href="./icones/image_web/pokeball.png" alt="désigné par Nikita Golubev">
    <title>Ajouter pokedex</title>   
  </head>

    <h1>Ajouter un Pokemon dans le pokedex</h1>

    <form method="post">
        <div>
            <label for="nomA">Nom Anglais</label>
            <input type="text" name="nomA" id="nomA">
        </div>
        <div>
            <label for="nomF">Nom Français</label>
            <input type="text" name="nomF" id="nomF">
        </div>
        <div>
            <label for="numdex">N° Pokedex</label>
            <input type="text" name="numdex" id="numdex">
        </div>
        <button type="submit" name="Bouton">Enregistrer</button>
    </form>