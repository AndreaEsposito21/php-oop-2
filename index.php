<?php 
    require_once __DIR__ . '/Boardgame.php';
    require_once __DIR__ . '/Videogame.php';
    require_once __DIR__ . '/User.php';

    $risiko = new Boardgame('Risiko', 'Strategia', 'Editrice Giochi', 'Editrice Giochi');


    $star_craft = new Videogame('Starcraft', 'Strategia', 'Blizzard Entertainment', 'nStigate Games');

    $user = new User('Andrea', 'Esposito', 'andexp@gmail.com');
    $user->addProduct($star_craft);
    $user->addProduct($risiko);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquisti</title>
</head>
<body>
    
    <h2>Riepilogo acquisti</h2>

    <?php foreach($user->getProducts() as $product) { ?>
        <div>
            <ul>
                <li>Titolo: <?php echo $product->titolo ?></li>
                <li>Genere: <?php echo $product->genere ?></li>
                <li>Sviluppatore: <?php echo $product->sviluppatore ?></li>
                <li>Editore: <?php echo $product->editore ?></li>
                <li>Valutazione: <?php echo $product->valutazione ?></li>
                <li>Pegi: <?php echo $product->pegi ?></li>
            </ul>
        </div>
    <?php } ?>

</body>
</html>