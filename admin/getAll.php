<?php
require "../connexion/bdd.php";
$bdd = bdd();

if (isset($_GET['table'], $_GET['id'])) {
    $table = $_GET['table'];
    $id = intval($_GET['id']);

    $tables = ['boissonchaude', 'boissonstar', 'breakfast', 'burgers', 'cocktails', 'cookies', 'gateaux', 'glaces', 'grillades', 'membre', 'milkshakes', 'patiseries', 'pattes', 'pizzas', 'puddings', 'salades', 'special', 'specialdesert', 'tartes', 'vin'];
    if (!in_array($table, $tables)) {
        die("Nom de table invalide");
    }

    $recuperation = $bdd->prepare("SELECT * FROM $table WHERE id = ?");
    $recuperation->execute([$id]);
    $nouriture = $recuperation->fetch();

    if (!$nouriture) {
        die("Élément non trouvé");
    }

        var_dump($nouriture);
    exit;
} else {
    die("Paramètres manquants");
}
?>
