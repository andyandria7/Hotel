<?php
require "../connexion/bdd.php";
include "../connexion/function.php";
session_start();
$bdd = bdd();
if (!isset($_SESSION['username']))
    header('Location: login.php');
$affichage = affichage();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Membre AHotel</title>
</head>

<body>
    <?php include "./header.php" ?>

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