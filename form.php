<?php
    include ("Voiture.php");
    session_start();
if(isset($_SESSION["voitures"])){
    $voitures = $_SESSION["voitures"];
}else{
    $voitures = array();
    $_SESSION["voitures"] = $voitures;
}

if(isset($POST["marque"])){
    $marque = $POST["marque"];
    $modele = $POST["modele"];
    $vitesse = $POST["vitesse"];

    $voiture = new Voiture($marque, $modele, $vitesse);
    $voitures[] = $voiture;
    $_SESSION["voitures"] = $voitures;

    foreach ($voitures as $voiture){
        var_dump($voiture);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
<form action="form.php" method="post">
    <label for="marque">Marque</label>
    <input type="text" name="marque" id="marque">
    <label for="modele">Modèle</label>
    <input type="text" name="modele" id="modele">
    <label for="vitesse">Vitesse</label>
    <input type="number" name="vitesse" id="vitesse">
    <button type="submit">Ajouter</button>
</form>

</body>
</html>






