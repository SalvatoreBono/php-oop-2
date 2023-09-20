<?php
//importo il file 
require_once __DIR__ . "/classes/Cibo.php";
require_once __DIR__ . "/classes/Gioco.php";
require_once __DIR__ . "/classes/Cuccia.php";
require_once __DIR__ . "/classes/Cani.php";
require_once __DIR__ . "/classes/Gatti.php";


$Cibo1 = new Cibo(
    _brand: "Gourmet",
    _title: "Gourmet Gold Mousse",
    _age: "Aldulti",
    _price: "13,69€",
);
$Cibo1->proteinSource = "Salmone";
$Cibo1->pathologies = "Obesità e gestione del peso";
$Cibo1->typology = "Monoproteico";


$Cibo2 = new Cibo(
    _brand: "Alleva",
    _title: "Alleva Holistic Chicken & Duck",
    _age: "Aldulti, Anziani",
    _price: "26,50€",
);
$Cibo2->proteinSource = "Anatra, Pollo";

$Cibo3 = new Cibo(
    _brand: "Vet Line",
    _title: "Vet Line Salute",
    _age: "Aldulti",
    _price: "32,00€",
);
$Cibo3->proteinSource = "Maiale, Prosciutto";
$Cibo3->pathologies = "Obesità e gestione del peso";

$Gioco1 = new Gioco(
    _brand: "Squeaky",
    _title: "Squeaky Ball",
    _material: "TPR (gomma termoplastica)",
    _color: "Verde",
    _price: "6,69€",
);

$Gioco2 = new Gioco(
    _brand: "Trixie",
    _title: "Trixie corda",
    _material: "Robusto",
    _color: "Grigio",
    _price: "1,19€",
);

$Gioco3 = new Gioco(
    _brand: "Trixie",
    _title: "Stoffa Peluche",
    _material: "Robusto",
    _color: "Grigio",
    _price: "5,90€",
);
$Cuccia1 = new Cuccia(
    _brand: "Lionto",
    _title: "Lionto Letto",
    _material: "Fibra di poliestere",
    _color: "Grigio/Nero",
    _price: "17,95€",
    _productDimensions: "60x48 cm"
);

$Cuccia2 = new Cuccia(
    _brand: "beeco",
    _title: "beeco STORE Letto",
    _material: "Silicone",
    _color: "Rosso",
    _price: "59,95€",
    _productDimensions: "100L x 75l x 20Sp cm"
);

$Cuccia3 = new Cuccia(
    _brand: "DONWEI",
    _title: "DONWEI Cuccia",
    _material: "Gomma, Cotone",
    _color: "Rosa",
    _price: "59,95€",
    _productDimensions: "50L x 50l x 18Sp cm"
);

$Cani1 = new Cani(
    _race: "Cane da pastore tedesco",
    _color: "Nero, Bianco, Nero Focato, Nero e argento, Rosso e nero, Punte Nere, Grigio",
    _img: "https://media-assets.wired.it/photos/615db921d8b66b13086d090c/1:1/w_590,h_590,c_limit/wired_placeholder_dummy.png",
    _longevity: "9–13 anni",
);


$Cani2 = new Cani(
    _race: "Golden retriever",
    _color: " Dorato scuro, Oro chiaro, Crema, Oro",
    _img: "https://media-assets.wired.it/photos/615db921d8b66b13086d090c/1:1/w_590,h_590,c_limit/wired_placeholder_dummy.png",
    _longevity: "10–12 anni",
);


$Cani3 = new Cani(
    _race: "Siberian husky",
    _color: "Bianco, Nero, Bianco e grigio, Sabbia e bianco, Rosso-bianco, Nero Focato, Grigio argento, Bianco e Nero, Grigio",
    _img: "https://media-assets.wired.it/photos/615db921d8b66b13086d090c/1:1/w_590,h_590,c_limit/wired_placeholder_dummy.png",
    _longevity: "12–15 anni",
);

$Gatti1 = new Gatti(
    _race: "Siamese",
    _color: "bianco-crema",
    _img: "https://www.my-personaltrainer.it/2023/07/26/gatti-falsi-miti_900x760.jpeg",
    _longevity: "20 anni",
);

$Gatti2 = new Gatti(
    _race: "Maine Coon",
    _color: "il nero e il rosso",
    _img: "https://www.my-personaltrainer.it/2023/07/26/gatti-falsi-miti_900x760.jpeg",
    _longevity: "12-15 anni",
);


$Gatti3 = new Gatti(
    _race: "Ragdoll",
    _color: "seal, blue, chocolate, lilac, red e cream",
    _img: "https://www.my-personaltrainer.it/2023/07/26/gatti-falsi-miti_900x760.jpeg",
    _longevity: "12 e i 17 anni.",
);


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
    <div id="app"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>