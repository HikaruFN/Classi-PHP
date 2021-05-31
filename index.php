<?php

    require_once __DIR__ . '/Felpa.php';
    require_once __DIR__ . '/Maglietta.php';
    require_once __DIR__ . '/Pantalone.php';
    require_once __DIR__ . '/Utente.php';

    //Istanze Felpa
    $felpa_nike = new Felpa('CLUB HOODIE', 50);
    //Override
    $felpa_nike->colore_prodotto = 'Nero';
    $felpa_nike->marca_prodotto = 'Nike';
    //var_dump($felpa_nike->getInfoData());

    $felpa_adidas = new Felpa('CORE ELEVEN FOOTBALL HODDIE SWEAT', 28);
    //Override
    $felpa_adidas->colore_prodotto = 'Blu';
    $felpa_adidas->marca_prodotto = 'Adidas';
    //var_dump($felpa_adidas->getInfoData());


    //Istanze Maglitta
    $maglietta_adidas = new Maglietta('STRIPES TEE', 30);
    //Override
    $maglietta_adidas->colore_prodotto = 'Grigio';
    $maglietta_adidas->marca_prodotto = 'Adidas';
    //var_dump($maglietta_adidas->getInfoData());

    $maglietta_nike = new Maglietta('CLUB TEE', 25);
    //Override
    $maglietta_nike->colore_prodotto = 'Rosso';
    $maglietta_nike->marca_prodotto = 'Nike';
    //var_dump($maglietta_nike->getInfoData());


    //Istanze Pantalone
    $pantalone_denim_project = new Pantalone('Jeans slim fit', 30);
    //Override
    $pantalone_denim_project->colore_prodotto = 'Nero';
    $pantalone_denim_project->marca_prodotto = 'Denim Project';
    //var_dump($pantalone_denim_project->getInfoData());

    //Istanze Utente
    $flavio = new Utente('Flavio', 'Flaviante');
    $flavio->addToCarrello($felpa_nike);
    $flavio->addToCarrello($pantalone_denim_project);
    $flavio->addToCarrello($maglietta_nike);
    //var_dump($flavio->getInfoDataUser());

    $mariano = new Utente('Mariano', 'Marianti');
    $mariano->addToCarrello($felpa_adidas);
    $mariano->addToCarrello($maglietta_adidas);
    //var_dump($mariano->getInfoDataUser());

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
</head>
<body>

    <body>
    
        <!--Carrello Flavio-->
        <div>
            <h1>Carrello Flavio</h1>
            <ul>
                <?php foreach($flavio->getCarrello() as $carrello) {?>
                    <h2>Prodotto</h2>
                    <ul>
                        <li><?php echo $carrello->tipo_prodotto ?></li>
                        <li><?php echo $carrello->nome_prodotto ?></li>
                        <li><?php echo $carrello->marca_prodotto ?></li>
                        <li><?php echo $carrello->colore_prodotto ?></li>
                    </ul>
                <?php }?>
            </ul>
        </div>
        <!--Fine Carrello Flavio-->

        <!--Carrello Mariano-->            
        <div>
            <h1>Carrello Mariano</h1>
            <ul>
                <?php foreach($mariano->getCarrello() as $carrello) {?>
                    <h2>Prodotto</h2>
                    <ul>
                        <li><?php echo $carrello->tipo_prodotto ?></li>
                        <li><?php echo $carrello->nome_prodotto ?></li>
                        <li><?php echo $carrello->marca_prodotto ?></li>
                        <li><?php echo $carrello->colore_prodotto ?></li>
                    </ul>
                <?php }?>
            </ul>
        </div>
        <!--Fine Carrello Mariano-->

    </body>

</body>
</html>