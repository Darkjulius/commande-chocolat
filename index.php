<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
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
            <p>Tarif: 20 &euro;</p>
            <p>En commandant maintenant, vous aurez le droit à une remise immédiate de 5 &euro;</p>
            <p>
                <input type="submit" value="Commander">
            </p>
        </form>
    </section>
</body>

</html>