<?php
session_start();
require "../connexion/bdd.php";
include "../connexion/function.php";
// ity lay include
include "../admin/functionAdmin.php";
$bdd = bdd();
$breakfasts = breakfasts();
$pizzas = pizzas();
$grillades = grillades();
$pattes = pattes();
$tartes = tartes();
$salades = salades();
$special = special();
$glaces = glaces();
$cookies = cookies();
$patiseries = patiseries();
$puddings = puddings();
$gateaux = gateaux();
$specialdesert = specialdesert();
$boissonstar = boissonstar();
$boissonchaude = boissonchaude();
$cocktails = cocktails();
$milkshakes = milkshakes();
$vin = vin();
$burgers = burgers();

if (!isset($_SESSION['username']))
    header('Location: login.php');

// ity ilay function btn
if(isset($_POST['achat']))
    $achat = achat();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include "./header.php" ?>
    <main class="food">
        <section class="headerFood ">
            <div class="container text-center mb-5 ">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Select menu</option>
                    <option value="1"> Nouriture</option>
                    <option value="2">Dessert</option>
                    <option value="3">Boisson</option>
                </select>
            </div>
            <section class="container mt-4">
                <div id="nouriture">
                    <div id="menu-icons">
                        <div class="row">
                            <div class="col-3">
                                <a href="#breakfast" class="smooth-scroll text-center" id="btnbreakfast">
                                    <i class="fas fa-drumstick-bite" style="font-size: 31px;"></i>
                                    <h6 class="menu-icon-text mt-3 mb-0">BREAKFASTS</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#burgers" class="smooth-scroll text-center " id="btnburgers">
                                    <i class="fas fa-burger" style="font-size: 31px;"></i>
                                    <h6 class="menu-icon-text mt-3 mb-0">BURGERS</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#pizza" class="smooth-scroll text-center " id="btnpizza">
                                    <i class="fas fa-pizza-slice" style="font-size: 31px;"></i>
                                    <h6 class="menu-icon-text mt-3 mb-0">PIZZA</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#grillade" class="smooth-scroll text-center " id="btngrillade">
                                    <i class="fa fa-cutlery" style="font-size: 31px;"></i>
                                    <h6 class="menu-icon-text mt-3 mb-0">GRILLADE</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3">
                                <a href="#patte" class="smooth-scroll text-center " id="btnpatte">
                                    <img class="menu-icon" src="../assets/image/pasta.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">PATTES</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#tarte" class="smooth-scroll text-center " id="btntarte">
                                    <img class="menu-icon" src="../assets/image/pies.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">TARTES</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#salade" class="smooth-scroll text-center " id="btnsalade">
                                    <img class="menu-icon" src="../assets/image/salads.svg" style="width: 35px;" alt="Pasta">

                                    <h6 class="menu-icon-text mt-3 mb-0">SALADES</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#special" class="smooth-scroll text-center " id="btnspecial">
                                    <img class="menu-icon" src="../assets/image/specials.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">SPECIAL</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="desserts">
                    <div id="menu-icons">
                        <div class="row">
                            <div class="col-3">
                                <a href="#glace" class="smooth-scroll text-center " id="btnglace">
                                    <img class="menu-icon" src="../assets/image/frozen-desserts.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">GLACES</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#cookies" class="smooth-scroll text-center " id="btncookies">
                                    <img class="menu-icon" src="../assets/image/cookies.svg" style="width: 35px;" alt="Pasta">

                                    <h6 class="menu-icon-text mt-3 mb-0">COOKIES</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#patiserie" class="smooth-scroll text-center " id="btnpatiserie">
                                    <img class="menu-icon" src="../assets/image/pastries.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">PATISERIE</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#pudding" class="smooth-scroll text-center " id="btnpudding">
                                    <img class="menu-icon" src="../assets/image/puddings.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">PUDDING</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3">
                                <a href="#SaladeDeFruit" class="smooth-scroll text-center " id="btnSaladeDeFruit">
                                    <img class="menu-icon" src="../assets/image/fruit-salads.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">SALADE DE FRUIT</h6>
                                </a>
                            </div>
                                <div class="col-3">
                                    <a href="#tartesD" class="smooth-scroll text-center " id="btntartesD">
                                        <img class="menu-icon" src="../assets/image/pies.svg" style="width: 35px;" alt="Pasta">
                                        <h6 class="menu-icon-text mt-3 mb-0">TARTES</h6>
                                    </a>
                                </div>
                            <div class="col-3">
                                <a href="#gateau" class="smooth-scroll text-center " id="btngateau">
                                    <img class="menu-icon" src="../assets/image/cakes.svg" style="width: 35px;" alt="Pasta">

                                    <h6 class="menu-icon-text mt-3 mb-0">GATEAU</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#specialD" class="smooth-scroll text-center " id="btnspecialD">
                                    <img class="menu-icon" src="../assets/image/specials.svg" style="width: 35px;" alt="Pasta">

                                    <h6 class="menu-icon-text mt-3 mb-0">SPECIAL</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="boisson">
                    <div id="menu-icons">
                        <div class="row">
                            <div class="col-3">
                                <a href="#star" class="smooth-scroll text-center " id="btnstar">
                                    <img class="menu-icon" src="../assets/image/cold-beverages.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">Boisson Star</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#bChaude" class="smooth-scroll text-center " id="btnbChaude">
                                    <img class="menu-icon" src="../assets/image/hot-beverages.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">Boisson Chaude</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#cocktails" class="smooth-scroll text-center " id="btncocktails">
                                    <img class="menu-icon" src="../assets/image/cocktails.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">Cocktails</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#milkshakes" class="smooth-scroll text-center " id="btnmilkshakes">
                                    <img class="menu-icon" src="../assets/image/milkshakes.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">Milkshakes</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3">
                                <a href="#wines" class="smooth-scroll text-center " id="btnwines">
                                    <img class="menu-icon" src="../assets/image/wines.svg" style="width: 35px;" alt="Pasta">
                                    <h6 class="menu-icon-text mt-3 mb-0">Vin</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <article class="menu my-5">
            <div id="breakfast">
                <h1 class="banner">BREAKFASTS</h1>
                <div class="container my-5 ">
                    <hr>
                    <!-- nasiko form sy input hidden le ao am ambany  -->
                    <div class="row align-items-center menu-item">
                        <?php foreach ($breakfasts as $nouriture) {
                            
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div id="burgers">
                <h1 class="banner">BURGERS</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($burgers as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="pizza">
                <h1 class="banner">PIZZAS</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($pizzas as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="grillade">
                <h1 class="banner">GRILLADES</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($grillades as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="patte">
                <h1 class="banner">PATTES</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($pattes as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="tarte">
                <h1 class="banner">TARTES</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($tartes as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="salade">
                <h1 class="banner">SALADES</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($salades as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="special">
                <h1 class="banner">SPECIAL</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($special as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </article>
        <article class="menuDeser my-5 ">
            <div id="glace">
                <h1 class="banner">GLACES</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($glaces as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="cookies">
                <h1 class="banner">Cookies</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($cookies as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="patiserie">
                <h1 class="banner">Patiserie</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($patiseries as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="pudding">
                <h1 class="banner">Pudding</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($puddings as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="SaladeDeFruit">
                <h1 class="banner">Salade de Fruit</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($salades as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="tartesD">
                <h1 class="banner">Tarte</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($tartes as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="gateau">
                <h1 class="banner">Gateau</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($gateaux as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="specialD">
                <h1 class="banner">Special Desert</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($specialdesert as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </article>
        <article class="menuBoisson my-5">
            <div id="star">
                <h1 class="banner">Boisson Star</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($boissonstar as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="bChaude">
                <h1 class="banner">Boisson Chaude</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($boissonchaude as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="cocktails">
                <h1 class="banner">Cocktails</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($cocktails as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="milkshakes">
                <h1 class="banner">Milkshakes</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($milkshakes as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="wines">
                <h1 class="banner">Vin</h1>
                <div class="container my-5 ">
                    <hr>
                    <div class="row align-items-center menu-item">
                    <?php foreach ($vin as $nouriture) {
                            // var_dump($nouriture);
                        ?>
                            <div class="col-md-3 my-4">
                                <img src="../assets/image/<?php echo $nouriture["image"] ?>" alt="Breakfast" class="rounded-circle mx-4 img">
                            </div>
                            <div class="col-md-9">
                                <h3 class="food-title">
                                    <span class="food-name"><?php echo $nouriture["nom"] ?></span>
                                    <span class="food-price"><?php echo $nouriture["prix"] ?></span>
                                </h3>
                                <p class="food-ingredients">
                                    <?php echo $nouriture['description'] ?>
                                </p>
                                <form action="" method="post">
                                    <input type="text" name="id" value="<?php echo $nouriture['id'] ?>" hidden>
                                    <input type="text" name="nom" value="<?php echo $nouriture['nom'] ?>" hidden>
                                    <input type="text" name="prix" value="<?php echo $nouriture['prix'] ?>" hidden>
                                    <div class="nouriture d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary ptB" name="achat">
                                            <span class="text text-1">ACHAT</span>
                                            <span class="text text-2 text-white" aria-hidden="true">ACHAT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php include './footer.php' ?>
    <script src="../assets/js/food.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/fontawesome-free-6.2.1-web/js/all.min.js"></script>
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>

</html>