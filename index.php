<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau en PHP</title>
</head>
<body>
    <?php
        echo "<pre>";

        // Declarer un tableau
    $tableau = ["Bonjour", 15, true, 58.15, "Ahmed", 45, false];


    // Ajouter des valeurs
    // a la fin (push)
    array_push($tableau, 'Fin', 'Fin fin');


    // Au debut (unshift)
    array_unshift($tableau, 'debut');


    // Supprimer des valeurs
    // a la fin
    array_pop($tableau);


    // Au debut
     array_shift($tableau);

     var_dump($tableau);

    // deviser un tableau en plusieurs parties de 2 valeurs
    $tableau2 = array_chunk($tableau, 2, true);
    var_dump($tableau2);

    // melanger un tableau
    shuffle($tableau);

    $tableauMulti = [
        0 => [
        "nom" => "Ali",
        "prenom"    => "Ahmed",
        "age"   => 35,
            ],
        1 => [
            "nom" => "Zaghrat",
            "prenom"    => "Ahmed",
            "age"   => 35,
        ]
    ];

    var_dump($tableauMulti);

    var_dump($tableauMulti[0]["nom"]);
        echo "</pre>";
    ?>
</body>
</html>