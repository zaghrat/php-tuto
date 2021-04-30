<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get">
    <div>
        <labe for="nombre1">Nombre 1:</labe>
        <input type="number" name="nb1" id="nombre1"> <!-- name is required to send data -->
    </div>

    <div>
        <labe for="nombre2">Nombre 2:</labe>
        <input type="number" name="nb2" id="nombre2">
    </div>

    <button type="submit">Calculer</button>

</form>
<?php
// http://localhost/?nombre1=124&nombre2=36

$total = $_GET["nb1"] + $_GET["nb2"];
echo "<p>Total: $total</p>";

?>
</body>
</html>