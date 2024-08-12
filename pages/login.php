<?php
session_start();
require "../connexion/bdd.php";
include "../connexion/function.php";
if (isset($_SESSION["username"]) || isset($_SESSION["email"]))
    header('Location: membre.php');
$bdd = bdd();
if (isset($_POST["connexion"]))
    $affichage = connexion();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHotel Login</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <section class="section1">
        <div class="container mt-5 pt-5">
            <div class="row">
                <?php
                if (isset($affichage)) :
                    if ($affichage) :
                        foreach ($affichage as $aff) :
                ?>
                            <div class="h5 text-white position-absolute">
                                <p><?php echo ($aff); ?></p>
                            </div>
                <?php
                        endforeach;
                    endif;
                endif;
                ?>

                <div class="col-12 col-sm-8 col-md-6 m-auto ">
                    <form method="post" class="card rounded-circle rond d-flex align-items-center justify-content-center couleur ">
                        <div class="text-center my-5 h1 text-white anima">Login</div>

                        <div class="card-body w-75 group anima">
                            <input class="input py-2 w-100 " type="text" id="name" name="username">
                            <label for="name" class="">Username or Email</label>
                        </div>
                        <div class="card-body w-75 group anima">
                            <input class="input py-2 w-100 " type="password" id="pass" name="pass">
                            <label for="pass" class="pass ">Password</label>
                        </div>
                        <div class="card-body d-flex gap-5">
                            <div class="anima">
                                <input type="checkbox" id="check" class="">
                                <label for="check" class="text-white"> Remember me</label>
                            </div>
                            <div>
                                <a href="./register.php" class="text-decoration-none anima">Register</a>
                            </div>
                        </div>
                        <div class="card-body w-25 d-flex gap-3  button ">
                            <a href="./index.php" class="text-decoration-none btn btn-info w-100 h-75 d-flex align-items-center justify-content-center anima">
                                Annuler
                            </a>
                            <a href="#" class="text-decoration-none anima">
                                <button class="btn btn-info w-100 h-75 d-flex align-items-center justify-content-center " name="connexion">Valider</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="../assets/fontawesome-free-6.2.1-web/js/all.min.js"></script>
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>

</html>