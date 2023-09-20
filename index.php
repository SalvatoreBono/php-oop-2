<?php
//importo il file 
require_once __DIR__ . "/classes/Cibo.php";
require_once __DIR__ . "/classes/Gioco.php";
require_once __DIR__ . "/classes/Cuccia.php";
require_once __DIR__ . "/classes/Cani.php";
require_once __DIR__ . "/classes/Gatti.php";

$Gatti1 = new Gatti();
$Cani1 = new Cani();

$Cibo1 = new Cibo(
    _brand: "Gourmet",
    _title: "Gourmet Gold Mousse",
    _age: "Aldulti",
    _price: "13,69€",
    _category: $Gatti1->img,
    _img: "https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/mousse/x/g/alimento/umido/per/gatti/4/400/cans_24_1000x1000_4.jpg",

);

$Cibo1->setProteinSource("Salmone");
$Cibo1->setPathologies("Obesità e gestione del peso");
$Cibo1->setTypology("Monoproteico");


$Cibo2 = new Cibo(
    _brand: "Alleva",
    _title: "Alleva Holistic Chicken & Duck",
    _age: "Aldulti, Anziani",
    _price: "26,50€",
    _category: $Cani1->img,
    _img: "https://animalsplanet.it/wp-content/uploads/2023/02/cibo-per-gattini-alleva-equilibrium-kitten-chicken-gusto-pollo-15kg-300x300.jpg",
);
$Cibo2->setProteinSource("Anatra, Pollo");

$Cibo3 = new Cibo(
    _brand: "Vet Line",
    _title: "Vet Line Salute",
    _age: "Aldulti",
    _price: "32,00€",
    _category: $Cani1->img,
    _img: "https://animalsplanet.it/wp-content/uploads/2021/04/snack-per-cani-vet-line-gusto-cervo-80gr-300x300.jpg",


);
$Cibo3->setProteinSource("Maiale, Prosciutto");
$Cibo3->setPathologies("Obesità e gestione del peso");


$Gioco1 = new Gioco(
    _brand: "Squeaky",
    _title: "Squeaky Ball",
    _material: "TPR (gomma termoplastica)",
    _color: "Verde",
    _price: "6,69€",
    _img: "https://shop-cdn-m.mediazs.com/bilder/squeaky/ball/palla/gioco/in/tpr/per/cani/8/400/331033_squeaky_ball_02_08_2013_dsc0208_8.jpg",
    _category: $Cani1->img,
);


$Gioco2 = new Gioco(
    _brand: "Trixie",
    _title: "Trixie corda",
    _material: "Robusto",
    _color: "Grigio",
    _price: "1,19€",
    _img: "https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg",
    _category: $Cani1->img,
);




$Gioco3 = new Gioco(
    _brand: "Trixie",
    _title: "Stoffa Peluche",
    _material: "Robusto",
    _color: "Grigio",
    _price: "5,90€",
    _img: "https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=1781138396",
    _category: $Gatti1->img,
);




$Cuccia1 = new Cuccia("DONWEI Cuccia", "https://m.media-amazon.com/images/I/71CfPzNFFjL.__AC_SX300_SY300_QL70_ML2_.jpg", "59,95€", $Cani1->img);
$Cuccia1->setBrand("DONWEI");
$Cuccia1->setMaterial("Gomma, Cotone");
$Cuccia1->setColor("Rosa");
$Cuccia1->setProductDimensions("50L x 50l x 18Sp cm");



$Cuccia2 = new Cuccia("beeco STORE Letto", "https://m.media-amazon.com/images/I/71NAd+Z7KmL._AC_SX679_.jpg", "59,95€", $Gatti1->img);
$Cuccia2->setBrand("beeco");
$Cuccia2->setMaterial("Silicone");
$Cuccia2->setColor("Rosso");
$Cuccia2->setProductDimensions("100L x 75l x 20Sp cm");


$Cuccia3 = new Cuccia("Lionto Letto", "https://m.media-amazon.com/images/I/61Snzl36e5L._AC_SX679_.jpg", "17,95€", $Gatti1->img);
$Cuccia3->setBrand("Lionto");
$Cuccia3->setMaterial("Fibra di poliestere");
$Cuccia3->setColor("Grigio/Nero");
$Cuccia3->setProductDimensions("60x48 cm");

$productList = [];
array_push($productList, $Cuccia1, $Cuccia2, $Cuccia3, $Gioco1, $Gioco2, $Gioco3, $Cibo1, $Cibo2, $Cibo3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="container pt-5 pb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($productList as $singleProduct) {
                ?>
                    <div class="col">
                        <div class="card text-center">
                            <img src="<?php echo $singleProduct->getImg() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $singleProduct->GetBrand() ?></h6>
                                <h5 class="card-title"><?php echo $singleProduct->getTitle() ?></h5>
                                <div class="card-text"><?php echo $singleProduct->getPrice() ?></div>
                                <img style="width: 50px; height: 50px;" src="<?php echo $singleProduct->getCategory() ?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php


                }

                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>