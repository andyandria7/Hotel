<?php
    include_once "../connexion/bdd.php";
    include "../connexion/function.php";
    $bdd = bdd();
    $affichage = affichage();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHotel</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include "./audio.php"?>

    <!-- TOP BAR -->
    <div class="topbar">
        <div class="container">
            <div class="block">
                <div class="info">
                    <i class="fas fa-location-dot"></i>
                    <p>AHotel, Ampandrana, lotIIV112A</p>
                </div>
                <div class="info">
                    <i class="fas fa-clock"></i>
                    <p>Heures: 08h-21h</p>
                </div>
                <div class="info">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+0364069" class="hover-underline">034 03 640 69</a>
                </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:andy7andria@gmail.com" class="hover-underline">andy7andria@gmail.com</a>
                </div>
            </div>

            <!-- responsive menu bar icon -->
            <div class="block1">
                <div class="info">
                    <i class="fas fa-location-dot"></i>
                    <p>AHotel, Ampandrana, lotIIV112A</p>
                </div>
                <div class="info">
                    <i class="fas fa-clock"></i>
                    <p>Heures: 08h-21h</p>
                </div>
            </div>
        </div>
    </div>

    <?php include "./header.php"?>

    <?php include "./slider.php"?>

    <?php include "./rooms.php"?>

    <?php include "./reservation.php"?>

    <?php include "./story.php"?>

    <?php include './footer.php' ?>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/fontawesome-free-6.2.1-web/js/all.min.js"></script>
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>

</html>