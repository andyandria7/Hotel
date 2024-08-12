<?php
require "../connexion/bdd.php";
include "./functionAdmin.php";
$bdd = bdd();
$liste = listeMembre();
$room = chambre();
$food = food();
$countFood = allFood();
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

// btn
if (isset($_POST["cree"])) {
    $cree = createBreakfasts();
}
if (isset($_POST["cree1"])) {
    $cree1 = createBurgers();
}
// if (isset($_POST["cree2"])) {
//     $cree2 = createBurgers();
// }
if (isset($_POST["cree2"])) {
    $cree2 = createPizzas();
}
if (isset($_POST["cree3"])) {
    $cree3 = createGrillades();
}
if (isset($_POST["cree4"])) {
    $cree4 = createPattes();
}
if (isset($_POST["cree5"])) {
    $cree5 = createTartes();
}
if (isset($_POST["cree6"])) {
    $cree7 = createSalades();
}
if (isset($_POST["cree7"])) {
    $cree7 = createSpecial();
}
if (isset($_POST["cree8"])) {
    $cree8 = createGlaces();
}
if (isset($_POST["cree9"])) {
    $cree9 = createCookies();
}
if (isset($_POST["cree10"])) {
    $cree10 = createPatiseries();
}
if (isset($_POST["cree11"])) {
    $cree11 = createPuddings();
}
if (isset($_POST["cree12"])) {
    $cree12 = createGateaux();
}
if (isset($_POST["cree13"])) {
    $cree13 = createSpecialdesert();
}
if (isset($_POST["cree14"])) {
    $cree14 = createBoissonstar();
}
if (isset($_POST["cree15"])) {
    $cree15 = createBoissonchaude();
}
if (isset($_POST["cree16"])) {
    $cree16 = createCocktails();
}
if (isset($_POST["cree17"])) {
    $cree17 = createMilkshakes();
}
if (isset($_POST["cree18"])) {
    $cree18 = createVin();
}

$reservations = affReservation();
$achat = affAchat();

if (isset($_POST['pay'])) {
    modifPay();
}
if (isset($_POST['payR'])) {
    modifPayResevation();
}


// sur

// var_dump( $countFood);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Ahotel</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./food.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="" alt="">
                        </span>
                        <span class="title">
                            <h1><b>AS'HOTEL</b></h1>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#" id="home">
                        <span class="icon">
                            <ion-icon class="fas fa-house-user"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="user">
                        <span class="icon">
                            <ion-icon class="fas fa-user"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="food">
                        <span class="icon">
                            <ion-icon class="fas fa-utensils"></ion-icon>
                        </span>
                        <span class="title">Food</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="room">
                        <span class="icon">
                            <ion-icon class="fas fa-door-open"></ion-icon>
                        </span>
                        <span class="title">Room</span>
                    </a>
                </li>

                <li>
                    <!-- <a href="#" id="sittings">
                        <span class="icon">
                            <ion-icon class="fas fa-gear"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a> -->
                </li>
                <li>
                    <a href="#" id="messages">
                        <span class="icon">
                            <ion-icon class="fas fa-envelope"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="./logout.php">
                        <span class="icon">
                            <ion-icon class="fas fa-power-off"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon class="fas fa-bars"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="search" id="tadiavina" placeholder="Search" aria-label="Search">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="nav">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">
                            menu
                        </span>
                    </button>
                    <div class="dark-mode">
                        <span class="material-icons-sharp active">
                            <!-- light_mode --> <i class="fas fa-sun"></i>
                        </span>
                        <span class="material-icons-sharp">
                            <!-- dark_mode --><i class="fas fa-moon"></i>
                        </span>
                    </div>
                </div>
                <div class="user">
                    <img src="../assets/image/logo_transparent.png" alt="">
                </div>
            </div>
            <!-- contenue -->
            <div id="acceuil">
                <!-- ======================= Cards ================== -->
                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $liste[1]; ?></div>
                            <div class="cardName">Clients</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon class="fas fa-user-group"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $room[1]; ?></div>
                            <div class="cardName">Rooms</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon class="fas fa-bed"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $countFood[1]; ?></div>
                            <div class="cardName">Foods</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon class="fas fa-bowl-food"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">0</div>
                            <div class="cardName">Messages</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon class="fas fa-message"></ion-icon>
                        </div>
                    </div>
                </div>
                <!-- ================ Order Details List ================= -->
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Reservation</h2>
                            
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <td>Name User</td>
                                    <td>Name chambre</td>
                                    <td>Prix</td>
                                    <td>Payment</td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($reservations as $reservation) : ?>


                                    <tr class="tr">


                                    <tr class="tr">

                                        <td><?php echo $reservation['username']; ?></td>
                                        <td><?php echo $reservation['chambre']; ?></td>
                                        <td><?php echo $reservation['prix']; ?></td>
                                        <td>Réserver</td>

                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                    <!-- ================= New Customers ================ -->
                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Utilisateurs</h2>
                        </div>

                        <table>
                            <?php foreach ($liste[0] as $membre) : ?>
                                <tr class="tr">
                                    <td>
                                        <h4><?php echo $membre['username']; ?> <br> <span><?php echo $membre['email']; ?> </span></h4>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>

            </div>
            <div id="personne" style="margin-top: 5%;">
                <!-- <h1>liste des personnes</h1> -->
                <div class="details1">
                    <div class="recentOrders1">
                        <!-- <div class="cardHeader">
                            <h2>Info</h2>
                            <a href="#" class="btn">plus d'info</a>
                        </div> -->

                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Adresse Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($liste[0] as $listemembres) : ?>
                                    <tr class="tr">
                                        <td style="text-align: center;"><?php echo $listemembres["id"]; ?></td>
                                        <td><?php echo $listemembres["username"]; ?></td>
                                        <td><?php echo $listemembres["email"]; ?></td>
                                        <!-- <td><i class="fas fa-pen"></i><a href="">Modification</a></td> -->
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                                                Supprimer
                                            </button>
                                            <div class="modal mx-5 " id="myModal1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <h1>Voulez-vous vraiment supprimer cette utilisateur</h1>
                                                            <form action="./efface.php" method="post">
                                                                <input type="hidden" name="id" value="<?php $listemembres["id"] ?>">
                                                                <button type="submit" class="delete">Oui</button>
                                                            </form>
                                                            <button type="submit" class="delete"><a href="./admin.php">Non</a></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- nouriture -->
            <div id="nouriture">
                <?php include "./food.php"; ?>
            </div>
            <div id="chambre">
                <!-- <h1>liste des chambres</h1> -->
                <div class="mt-5 ">
                    <div class="row mt-4 ">
                        <?php foreach ($room[0] as $listeroom) : 
                            ?>
                            <div class="col-lg-3 mx-4">
                                <div class="card mx-5 mt-5 " style="width:22vw;background-color: #ffffff1a; box-shadow:5px 10px 10px black;border-radius:10px">
                                <img src="../assets/image/<?php echo $listeroom["image"]; ?>" alt="Card image" style="height:10vw; border-top-left-radius:10px;border-top-right-radius:10px">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#999; text-align:center" name="name"><?php echo ($listeroom["name"]); ?></h5>
                                        <p class="card-text" style="color:#999;text-align:center"><?php echo $listeroom["pays"]; ?></p>
                                        <p class="card-text" style="color:#999;text-align:center"><?php echo $listeroom["prix"]; ?> MGA</p>
                                        <a href="./modifier.php?id=<?php echo ($listeroom)["id"]; ?>" class="btn btn1" name="modifier">Modifier</a>
                                        <a href="./efface.php?id=<?php echo ($listeroom)["id"]; ?>" class="btn">Delete</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="ajout.php" class="btn fas fa-plus" data-bs-toggle="modal" data-bs-target="#myModal45" style="margin-top:10%;margin-left:90%"></a>
                <?php include "./ajout.php" ?>
            </div>
            <!-- <div id="parametre">
                <h1>Sittings</h1>
            </div> -->

            <div id="mess" style="margin-top: 5%;">

                <div id="mess">
                    <!-- <h1>Reservation</h1> -->
                    <?php @include "./reservation.php" ?>
                </div>
            </div>
            <!-- <script src="./food.js"></script> -->
            <script src="../assets/jquery/jquery.min.js"></script>
            <script src="./script.js"></script>
            <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
            <script src="../assets/fontawesome-free-6.2.1-web/js/all.min.js"></script>
</body>

</html>