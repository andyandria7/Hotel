<?php
require "../connexion/bdd.php";
require "./functionAdmin.php";
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

    if (isset($_POST['modifier'])) {

        $btnModif = btnModif();
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modification</title>
        <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.min.css">
        <link rel="stylesheet" href="./modification.css">
    </head>

    <body class="text-center d-flex flex-column justify-content-center align-items-center ">
        <h1 class="my-5 ">Modification </h1>
        <form method="POST" enctype="multipart/form-data">
            <?php
            if (isset($btnModif)) :
                if ($btnModif) :
            ?>
                    <div class="annonce">
                        <p class="erreur"><?php echo $btnModif; ?></p>
                    </div>
                <?php
                else :
                ?>
                    <div>
                        <div class="annonce">
                            <p class="mety">Bien Modifier</p>
                        </div>
                    </div>
            <?php
                endif;
            endif;
            ?>
            <!-- <div class="background-wrap">
                <video id="background-video" loop muted autoplay>
                    <source src="../assets/Music/Restaurant  Video.mp4" type="video/mp4">
                </video>
                <div class="overlay"></div>
            </div> -->
            <div class="card" style="width:400px">
                <img class="card-img-top" src="../assets/image/<?php echo $nouriture['image'] ?>" alt="Card image">
                <div class="card-body">
                    <!-- <label for="p">Nom: </label> -->
                    <input type="text" value="<?php echo $nouriture['nom'] ?>" name="nomModif" placeholder="Nom">
                    <!-- <label for="p">Prix: </label> -->
                    <input type="text" value="<?php echo $nouriture['prix'] ?>" name="prixModif" placeholder="Prix">
                    <!-- <label class="my-3">Description: </label> -->
                    <textarea class="p-2 " name="desmodif" id="" cols="30" rows="10" placeholder="descriptin"><?php echo $nouriture['description'] ?></textarea><br>
                    <button class="btn btn-info mt-3" type="submit" name="modifier">Modifier</button>
                    <a class="btn btn-info mt-3 mx-2 " href="./admin.php">Retour</a>
                </div>
            </div>
        </form>

        <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
    exit;
} else {
    die("Paramètres manquants");
}

?>