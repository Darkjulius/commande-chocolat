<?php
include("./include/_config.php");
$totalPayer = $_POST["qte"] * TARIF;
$totalRemise = $totalPayer - REMISE;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <h1>Merci pour votre commande</h1>
        <ul>
            <li>Nombre de boîtes commandées: <span class="orangered"><?= $_POST["qte"] ?></span></li>
            <li>Tarif unitaire: <span class="orangered"><?= TARIF ?> &euro;</span></li>
            <li>Total à payer: <span class="orangered"><?= $totalPayer; ?> &euro;</span></li>
            <li>Remise: <span class="orangered"><?= REMISE ?> &euro;</span></li>
            <li><strong>Nouveau total à payer:</strong> <span class="orangered"><?= $totalRemise ?> &euro;</span></li>
        </ul>
    </section>
</body>

</html>