<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Tableaux</title>
</head>

<body>

    <?php


    $vehicule = [
        'conducteur' => [
            'nom' => 'John',
            'prenom' => 'Doe',
            'permis' => ['B', 'A'],
        ],
        'caracteristiques' => [
            'couleur' => 'rouge',
            'annee' => 2020,
            'puissance' => 4,
        ],
        'finitions' => [
            'interieur' => [
                'type' => 'cuir',
                'couleur' => 'brun'
            ],
            'exterieur' => [
                'attache_remorque' => true,
                'couleur' => 'rouge',
                'vitres' => 'teintées',
            ],
        ],
    ];


    echo "Nom du conducteur: ";
    echo print_r($vehicule['conducteur']['nom']);
    echo "Prénom du conducteur: ";
    echo print_r($vehicule['conducteur']['prenom']);


    echo "Permis du conducteur: ";
    print_r($vehicule['conducteur']['permis']);
    echo "<br>";


    echo "Type de finition intérieure: ";
    echo print_r($vehicule['finitions']['interieur']['type']);


    echo "Couleur de finition extérieure: ";
    echo print_r($vehicule['finitions']['exterieur']['couleur']);


    echo "Puissance du véhicule: ";
    echo print_r($vehicule['caracteristiques']['puissance']);
    echo "Année du véhicule: ";
    echo print_r($vehicule['caracteristiques']['annee'])


        ?>

</body>

</html>