<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

/**
 * Permet de calculer la somme de 2 valeurs
 * @param float $nb1 Premier nombre
 * @param float $nb2 Deuxieme nombre
 * @return float Somme des deux nombres
 */
function additionner($nb1, $nb2) {
    return $nb1 + $nb2;
}

/**
 * @param string $prenom
 * @param string $nom
 * @param string $salutation
 */
function saluer($prenom, $nom, $salutation = "Bonjour") {
    echo "$salutation $prenom $nom";
}
?>
<p> <?php echo additionner(12, 52);?></p>
<p> <?php echo additionner(15, 2);?></p>
<p> <?php echo additionner(252, 47);?></p>
<p> <?php echo additionner(12.25,652);?></p>

<h1><?php saluer("Ahmed", "Zaghrat"); ?></h1>
<h1><?php saluer("Ahmed", "Zaghrat", "Salut"); ?></h1>


<h1><?php /* PHP 8 */ saluer(prenom: "Ahmed", nom: "Zaghrat"); ?></h1>




</body>
</html>