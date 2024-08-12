<?php
require "../connexion\bdd.php";
include "../admin/functionAdmin.php";
$bdd = bdd();
$montre = chambre6();
if (isset($_POST["modifier"])) {
    $affmodif = AffModif();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/modifier.css">
    <title>Document</title>
</head>
<style>
    body {
        overflow-x: hidden;
    }
</style>

<body>
    <form action="" method="post" enctype="multipart/form-data">

        <?php
        if (isset($affmodif)) :
            if ($affmodif) :
        ?>
                <div class="annonce">
                    <p class="erreur"><?php echo $affmodif; ?></p>
                </div>
            <?php
            else :
            ?>
                <div class="annonce">
                    <p class="mety">Bien Modifier</p>
                </div>
        <?php
            endif;
        endif;

        ?>


        <div class="background-wrap">
            <video id="background-video" loop muted autoplay>
                <source src="../assets/Music/Restaurant  Video.mp4" type="video/mp4">
            </video>
            <div class="overlay"></div>
        </div>
        <div class="content">
            <!-- <p>MODIFICATION</p> -->
            <div class="row mt- p-3 ">
                <div class="col-lg-3 card ">
                    <img src="<?php echo $montre['image'] ?> " alt="">
                    <input type="text" value="<?php echo $montre["name"] ?>" name="villename" placeholder="Name">
                    <input type="text" value="<?php echo $montre["pays"] ?>" name="paysmodif" placeholder="Description">
                    <input type="hidden" value="<?php echo $montre["id"] ?>" name="id">
                    <button type="submit" name="modifier" class="modifier">Modifier</button>
                    <a href="./admin.php" class="btn">Retour</a>
                </div>
            </div>
    </form>
    </div>

</body>

</html>