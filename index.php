<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessories.php';


$cat1 = new Category('Cane', './assets/dog.png');
$cat2 = new Category('Gatto', './assets/cat.png');

$prod1 = new Toy($cat1);
$prod1->setTitle('Pallina rimbalzante');
$prod1->setPoster('https://arcaplanet.vtexassets.com/arquivos/ids/260646/lovedi-gioco-cane-palla-con-punte-tpr-fucsia.jpg');
$prod1->setPrice(6.70);
$prod1->setSize('50');

$prod3 = new Accessories($cat1);
$prod3->setTitle('Guinzaglio Cane');
$prod3->setPoster('https://www.delashop.it/wp-content/uploads/2020/06/M_guinzaglioazzurro_picc.jpg');
$prod3->setPrice(20.99);
$prod3->setMaterial('Tessuto');

$prod2 = new Food($cat2);
$prod2->setTitle('Crocchette gatti "Friskies"');
$prod2->setPoster('https://static.zoomalia.com/prod_img/39988/lm_305496e05e1aea0a9c4655800e8a7b9ea281669993809.jpg');
$prod2->setPrice(15.50);


try{
    $prod1->setQuantity(1);
    echo "PUOI PROCEDERE CON L'ACQUISTO";
} catch (Exception $e) {
    echo 'ERRORE <br>';
    echo "SELEZIONARE UNA QUANTITA' SUPERIORE A 0";
}


$products = [
    $prod1,
    $prod2,
    $prod3
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row row-cols-3 mt-5">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->getPoster() ?>" class="card-img-top" alt="<?php echo $product->getTitle() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
                            <p class="card-text"><?php echo $product->getPrice() ?></p>
                            <span><?php echo $product->getCategory()->getName() ?></span>
                            <img class="w-25" src="<?php echo $product->getCategory()->getIcon() ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</body>

</html>