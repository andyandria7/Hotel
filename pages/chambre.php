<?php
include "../connexion/bdd.php";
include "../connexion/function.php";
$bdd = bdd();
$affiche = affchambre();
session_start();
if (!isset($_SESSION['username']))
  header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambre AHotel</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/chambre.css">
</head>

<body>
    <?php include "./header.php" ?>
    <div id="app" class="container mt-5">
    <div class="row mx-3 ">
      <?php foreach ($affiche as $aff) { ?>
       <div class="col-lg-4 col-md-6 col-sm-12">
       <div class="carte">
          <div class=" cartes carte-front">
            <img src="<?php echo $aff["image"]; ?>" alt="image1">
          </div>
          <div class="cartes carte-back">
            <!-- <i class="fa fa-rocket"></i> -->
            <div class="information">
              <h2><?php echo $aff["ville"]; ?></h2>
              <h3>à</h3>
              <p><?php echo $aff["pays"]; ?></p>
            </div>
          </div>
        </div>
       </div>
      <?php } ?>
    </div>
  </div>
    <?php include "./footer.php" ?>
</body>

</html>