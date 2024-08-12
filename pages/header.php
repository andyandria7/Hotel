<?php
include_once "../connexion/bdd.php";
$bdd = bdd();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['reservation'])) {
    $commentaire = reservation();
}


?>

<!-- HEADER -->
<header class="header navbar navbar-expand-lg" data-header>

    <div class="container ">
        <!-- <h1>header</h1> -->
        <div class="logo">
            <img id="logoImg" src="../assets/image/logo_transparent.png" alt="">
        </div>
        <button class="navbar-toggler bg-white " type="button" id="btn" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- responsive  -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <nav class="navbar-nav ms-auto">
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item hover-underline"><a class="nav-link text-white " href="./membre.php">ACCUEIL</a></li>
                        <li class="nav-item hover-underline"><a class="nav-link text-white " href="./chambre.php">CHAMBRES</a></li>
                        <li class="nav-item hover-underline"><a class="nav-link text-white " href="" data-bs-toggle="modal" data-bs-target="#myModal">RESERVATION</a></li>
                        <li class="nav-item hover-underline"><a class="nav-link text-white " href="./food.php">FOOD MENU</a></li>
                        <li class="nav-item hover-underline"><a class="nav-link text-white " href="./deconnection.php">DECONNECTION</a></li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="./login.php" class="btn btn-secondary ptB">
                                <span class="text text-1">LOGIN</span>
                                <span class="text text-2 text-white " aria-hidden="true">LOGIN</span>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>
    </div>
</header>


<!-- modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog ">
        <div class="modal-content body">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hotel Réservation</h4>
                <button type="button" class="btn-close bg-white " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center ">
                <form class="d-flex" action="" method="POST">

                    <div class="w-50 m-3  ">
                        <!-- <form action="traitement.php" method="post"> -->
                        <div class="form-group">
                            <label>Type de chambre/Suite</label>
                            <select class="form-control" name="room_type" onchange="finalCost()">
                                <option value="0" selected>Selection de chambre/Suite </option>
                                <option value="Standard"> Standard </option>
                                <option value="Luxe"> Luxe </option>
                                <option value="Super luxeux"> Super luxeux </option>
                                <option value="Premier luxe"> Premier luxe </option>
                                <option value="Executive Suite"> Executive Suite </option>
                                <option value=" Junior Suite"> Junior Suite </option>
                                <option value="Suite pour voyage de noces"> Suite pour voyage de noces </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre de chambre/suite</label>
                            <select class="form-control" name="room_number" onchange="finalCost()">
                                <option value="0"> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                                <option value="6"> 6 </option>
                                <option value="7"> 7 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre de personne</label>
                            <select class="form-control" name="person_number" onchange="finalCost()">
                                <option value="0"> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                                <option value="6"> 6 </option>
                                <option value="7"> 7 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre d'enfant</label>
                            <select class="form-control" name="child_number" onchange="finalCost()">
                                <option value="0"> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                                <option value="6"> 6 </option>
                                <option value="7"> 7 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Restauration: </label>
                            <select class="form-control" name="res_facilities" onchange="finalCost();">
                                <option value="0" selected> Voulez-vous des installations de restauration?
                                </option>
                                <option value="Oui"> Oui </option>
                                <option value="Non"> Non </option>
                            </select>
                        </div><br>
                    </div>
                    <div class="w-50 mt-3">
                        <div class="form-group">
                            <label for="arriver">Dates d’arrivée:</label>
                            <input type="datetime-local" class="form-control" name="arriver" id="arriver">
                        </div>
                        <div class="form-group">
                            <label for="depart">Dates de départ:</label>
                            <input type="datetime-local" class="form-control" name="depart" id="depart">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" rows="3" name="message" id="message" style="height: 127px;" placeholder="Votre demande"></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <label for="arriver">Payement Via:</label>
                            <div class="d-flex gap-5 container mx-5 p-3 ">
                                <i class="fab fa-paypal"></i>
                                <i class="fab fa-stripe"></i>
                                <img style="width: 28px;" src="../assets/image/MVola.jpg" alt="">
                                <img style="width: 28px;" src="../assets/image/OrangeMoney.png" alt="">
                            </div>
                        </div> -->
                    </div>

                    <div class="form-group">
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <label for="room_price">Ar</label>
                <input type="text" name="room_price" id="price" value="" readonly style="opacity: 0.5; cursor: not-allowed;">
                <button type="submit" name="reservation" style="background-color: #b22c54;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">Réserver</button>
                <a href="../stripe/index.php">Payement par stripe</a>
            </div>

            </form>
        </div>
    </div>
</div>
<script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
<script>
    var basePrices = {
        'Standard': 831891,
        'Luxe': 418269,
        'Super luxeux': 1250159.17,
        'Premier luxe': 1389582.13,
        'Executive Suite': 484311.32,
        'Junior Suite': 462297.17,
        'Suite pour voyage de noces': 506325.47
    };

    function finalCost() {
        var roomType = document.querySelector('select[name="room_type"]').value;
        var priceElement = document.getElementById('price');
        if (basePrices.hasOwnProperty(roomType)) {
            priceElement.value = basePrices[roomType] + ' MGA';
        } else {
            priceElement.value = '0 MGA';
        }
    }

    var roomType = document.getElementById('.arriver').value;
    console.log(roomType);

     function calculerNombreJours() {
        var dateArrivee = new Date(document.getElementById('arriver').value);
        var dateDepart = new Date(document.getElementById('depart').value);

        var difference = dateDepart.getTime() - dateArrivee.getTime();

        var nombreJours = difference / (1000 * 3600 * 24);

        console.log("Nombre de jours de séjour :", nombreJours);
    }

    document.getElementById('arriver').addEventListener('change', calculerNombreJours);
    document.getElementById('depart').addEventListener('change', calculerNombreJours);
</script>


