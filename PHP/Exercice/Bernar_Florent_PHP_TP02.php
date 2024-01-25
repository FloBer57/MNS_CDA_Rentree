<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice fiche de personnage</title>
</head>
<body>
  <h1>Mon super perso, cervidus michalak Prime</h1>
  <?php


    $nom = "Cervidus";  
    $prenom = "Michalak";  
    $caracteristiques = [
        "Force" => 10,      
        "Agilité" => 8,
        "Intelligence" => 7,
        "Point de vie" => 100,
    ];


    echo "<img src='cervidus_prime.png' alt='Avatar de $prenom $nom'>";


    echo "<h2>$prenom $nom</h2>";


    echo "<ul>";
    foreach ($caracteristiques as $car => $valeur) {
        echo "<li>$car: $valeur</li>";
    }
    echo "</ul>";
  ?>


</body>
</html>