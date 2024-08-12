<?php
session_start();
require "../connexion/bdd.php";
include "../connexion/function.php";
$bdd = bdd();
if (isset($_POST["inscription"]))
    $affichage = inscription();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHotel Register</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="img">
        <img class="img1" src="../assets/image/bg2.png" alt="">
        <img class="img2" src="../assets/image/bg1.png" alt="">
    </div>
    <section class="section1">
        <div class="container pt-5">
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
                            else :
                                ?>
                                <div class="h5 text-white position-absolute">
                                    <p>INSCRIPTION VALIDER</p>
                                </div>
                        <?php
                            endif;
                        endif;
                        ?>
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <form method="post" class="card rounded-circle h-100 d-flex align-items-center justify-content-center couleur " style="top: -8px;">
                        <div class="text-center my-4 h1 text-white lg">Register</div>
                        
                        <div class="card-body w-75 groupusername lg">
                            <input class="input py-2 w-100 " type="text" id="username" name="username">
                            <label for="username" class="fw-bolder">Username</label>
                        </div>
                        <div class="card-body w-75 groupemail lg">
                            <input class="input py-2 w-100 " type="text" id="email" name="email">
                            <label for="email" class="fw-bolder ">Email</label>
                        </div>
                        <div class="card-body w-75 grouppass lg">
                            <input class="input py-2 w-100 " type="password" id="pass" name="pass">
                            <label for="pass" class="pass fw-bolder ">Password</label>
                        </div>
                        <div class="card-body w-75 groupvalidP lg">
                            <input class="input py-2 w-100 " type="password" id="passV" name="passV">
                            <label for="passV" class="pass fw-bolder">Valid Password</label>
                        </div>
                        <div class="card-body d-flex gap-5 lg">
                            <!-- <div class="">
                                <input type="checkbox" id="check" >
                                <label for="check" class="text-white"> Remember me</label>
                            </div> -->
                            <div class="lg">
                                <p class="text-white ">Vous avez déja un compte?
                                    <a href="./login.php" class="text-decoration-none lk">Login</a>
                                </p>
                            </div>
                        </div>
                        <div class="card-body w-25 d-flex gap-3  button lg">
                            <a href="./index.php" class="text-decoration-none btn btn-light ">
                                Annuler
                            </a>
                            <a href="#" class="text-decoration-none">
                                <button class="btn btn-light  w-100 d-flex align-items-center justify-content-center " name="inscription">
                                    Inscription</button>
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