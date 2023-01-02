<?php
include("./include/_config.php")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <form action="action.php" method="post">
            <label for="qte">Quantité</label>
            <select name="qte" id="qte">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <p>Tarif: <span class="orangered"> <?= TARIF ?> &euro;</span></p>
            <p><span class="orangered">En commandant maintenant, vous aurez le droit à une remise immédiate de <?= REMISE ?> &euro;</span></p>
            <p>
                <input type="submit" value="Commander">
            </p>
        </form>
        <img src="./images/chocolat.png" alt="Chocolat">
    </section>
</body>

</html>