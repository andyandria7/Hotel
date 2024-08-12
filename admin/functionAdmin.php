<?php
function listeMembre()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM membre ORDER BY id DESC');
    $aff = $membres->fetchAll();
    $count = count($aff);
    return [$aff, $count];
}

function chambre()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM rooms ORDER BY id DESC');
    $aff = $membres->fetchAll();
    $count = count($aff);
    return [$aff, $count];
}
function chambre6()
{
    global $bdd;
    $id = intval($_GET["id"]);
    $modifchambre = $bdd->prepare("SELECT * FROM rooms WHERE id=?");
    $modifchambre->execute(array($id));
    $room = $modifchambre->fetch();
    return $room;
}
function AffModif() {
    global $bdd;
    $erreur = "";
    $Vmodif = $_POST["villemodif"];
    $Pmodif = $_POST["paysmodif"];
    // var_dump($_POST);

    $id = (int)$_POST["id"];
    if(!empty($Vmodif)&& !empty($Pmodif && !empty($id))){
        $modifier =$bdd->prepare("UPDATE rooms SET ville =:Ville, pays =:Pays WHERE id =:id ");
        $modifier->execute([
            "Ville" =>htmlentities($Vmodif),
            "Pays" =>htmlentities($Pmodif),
            "id" =>$id
        ]);
        
        header('Location: admin.php');

    }else{
        $erreur = "Veuiller remplir le champs";
    }
    return $erreur;
}
function effMembres(){
    global $bdd;
    $id = intval($_POST["id"]); // Récupère l'ID à partir de $_POST
    $supprimer = $bdd->prepare("DELETE FROM membre WHERE id =?");
    $supprimer->execute(array($id));

    header("Location:admin.php");
}
function effroom($id){
    global $bdd;
    $supprimer = $bdd->prepare("DELETE FROM rooms WHERE id = ?");
    $supprimer->execute(array($id));

    header("Location:admin.php");
}
function effreservation($id){
    global $bdd;
    $supprimer = $bdd->prepare("DELETE FROM reservation WHERE id = ?");
    $supprimer->execute(array($id));

    header("Location:admin.php");
}


function food()
{
    global $bdd;
    $result = $bdd->query('SELECT * FROM food');
    $count = $result->columnCount();
    return $count - 1;
}

function allFood()
{
    global $bdd;
    $query = "
        SELECT * FROM boissonchaude
        UNION
        SELECT * FROM boissonstar
        UNION
        SELECT * FROM breakfast
        UNION
        SELECT * FROM burgers
        UNION
        SELECT * FROM cocktails
        UNION
        SELECT * FROM cookies
        UNION
        SELECT * FROM gateaux
        UNION
        SELECT * FROM glaces
        UNION
        SELECT * FROM grillades
        UNION
        SELECT * FROM milkshakes
        UNION
        SELECT * FROM patiseries
        UNION
        SELECT * FROM pattes
        UNION
        SELECT * FROM pizzas
        UNION
        SELECT * FROM puddings
        UNION
        SELECT * FROM salades
        UNION
        SELECT * FROM special
        UNION
        SELECT * FROM specialdesert
        UNION
        SELECT * FROM tartes
        UNION
        SELECT * FROM vin
    ";
    $result = $bdd->query($query);
    $aff = $result->fetchAll();
    $count = count($aff);
    return [$aff, $count];
}
function breakfasts()
{
    global $bdd;

    $membres = $bdd->query('SELECT * FROM breakfast ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createBreakfasts()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomb']);
    $prix = htmlentities($_POST['prixb']);
    $desc = htmlentities($_POST['descb']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgb"]) && $_FILES["imgb"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgb"]['name']);
        move_uploaded_file($_FILES["imgb"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO breakfast (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomb"]);
        unset($_POST["prixb"]);
        unset($_POST["descb"]);
        unset($_POST["imgb"]);
        header("Location: admin.php");
    }
    return $erreur;
}
function burgers()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM burgers ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createBurgers()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomU']);
    $prix = htmlentities($_POST['prixU']);
    $desc = htmlentities($_POST['descU']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgU"]) && $_FILES["imgU"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgU"]['name']);
        move_uploaded_file($_FILES["imgU"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO burgers (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomU"]);
        unset($_POST["prixU"]);
        unset($_POST["descU"]);
        unset($_POST["imgU"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function pizzas()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM pizzas ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createPizzas()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomZ']);
    $prix = htmlentities($_POST['prixZ']);
    $desc = htmlentities($_POST['descZ']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgZ"]) && $_FILES["imgZ"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgZ"]['name']);
        move_uploaded_file($_FILES["imgZ"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO pizzas (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomZ"]);
        unset($_POST["prixZ"]);
        unset($_POST["descZ"]);
        unset($_POST["imgZ"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function grillades()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM grillades ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createGrillades()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomI']);
    $prix = htmlentities($_POST['prixI']);
    $desc = htmlentities($_POST['descI']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgI"]) && $_FILES["imgI"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgI"]['name']);
        move_uploaded_file($_FILES["imgI"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO grillades (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomI"]);
        unset($_POST["prixI"]);
        unset($_POST["descI"]);
        unset($_POST["imgI"]);
        header("Location: admin.php");
    }
    return $erreur;
}
function pattes()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM pattes ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createPattes()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomP']);
    $prix = htmlentities($_POST['prixP']);
    $desc = htmlentities($_POST['descP']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgP"]) && $_FILES["imgP"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgP"]['name']);
        move_uploaded_file($_FILES["imgP"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO pattes (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomP"]);
        unset($_POST["prixP"]);
        unset($_POST["descP"]);
        unset($_POST["imgP"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function tartes()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM tartes ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createTartes()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomA']);
    $prix = htmlentities($_POST['prixA']);
    $desc = htmlentities($_POST['descA']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgA"]) && $_FILES["imgA"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgA"]['name']);
        move_uploaded_file($_FILES["imgA"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO tartes (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomA"]);
        unset($_POST["prixA"]);
        unset($_POST["descA"]);
        unset($_POST["imgA"]);
        header("Location: admin.php");
    }
    return $erreur;
}
function salades()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM salades ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createSalades()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomL']);
    $prix = htmlentities($_POST['prixL']);
    $desc = htmlentities($_POST['descL']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgL"]) && $_FILES["imgL"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgL"]['name']);
        move_uploaded_file($_FILES["imgL"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO salades (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomL"]);
        unset($_POST["prixL"]);
        unset($_POST["descL"]);
        unset($_POST["imgL"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function special()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM special ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createSpecial()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomS']);
    $prix = htmlentities($_POST['prixS']);
    $desc = htmlentities($_POST['descS']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgS"]) && $_FILES["imgS"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgS"]['name']);
        move_uploaded_file($_FILES["imgS"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO special (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomS"]);
        unset($_POST["prixS"]);
        unset($_POST["descS"]);
        unset($_POST["imgS"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function glaces()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM glaces ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createGlaces()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomG']);
    $prix = htmlentities($_POST['prixG']);
    $desc = htmlentities($_POST['descG']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgG"]) && $_FILES["imgG"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;

    }

    if ($validation) {
        $img = basename($_FILES["imgG"]['name']);
        move_uploaded_file($_FILES["imgG"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO glaces (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc

        ));
        unset($_POST["nomG"]);
        unset($_POST["prixG"]);
        unset($_POST["descG"]);
        unset($_POST["imgG"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function cookies()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM cookies ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createCookies()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomO']);
    $prix = htmlentities($_POST['prixO']);
    $desc = htmlentities($_POST['descO']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgO"]) && $_FILES["imgO"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgO"]['name']);
        move_uploaded_file($_FILES["imgO"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO cookies (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomO"]);
        unset($_POST["prixO"]);
        unset($_POST["descO"]);
        unset($_POST["imgO"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function patiseries()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM patiseries ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createPatiseries()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomT']);
    $prix = htmlentities($_POST['prixT']);
    $desc = htmlentities($_POST['descT']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgT"]) && $_FILES["imgT"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgT"]['name']);
        move_uploaded_file($_FILES["imgT"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO patiseries (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomT"]);
        unset($_POST["prixT"]);
        unset($_POST["descT"]);
        unset($_POST["imgT"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function puddings()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM puddings ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createPuddings()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomP']);
    $prix = htmlentities($_POST['prixP']);
    $desc = htmlentities($_POST['descP']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgP"]) && $_FILES["imgP"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgP"]['name']);
        move_uploaded_file($_FILES["imgP"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO puddings (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomP"]);
        unset($_POST["prixP"]);
        unset($_POST["descP"]);
        unset($_POST["imgP"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function gateaux()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM gateaux ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createGateaux()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomG']);
    $prix = htmlentities($_POST['prixG']);
    $desc = htmlentities($_POST['descG']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgG"]) && $_FILES["imgG"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgG"]['name']);
        move_uploaded_file($_FILES["imgG"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO gateaux (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomG"]);
        unset($_POST["prixG"]);
        unset($_POST["descG"]);
        unset($_POST["imgG"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function specialdesert()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM specialdesert ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createSpecialdesert()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomD']);
    $prix = htmlentities($_POST['prixD']);
    $desc = htmlentities($_POST['descD']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgD"]) && $_FILES["imgD"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgD"]['name']);
        move_uploaded_file($_FILES["imgD"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO specialdesert (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomD"]);
        unset($_POST["prixD"]);
        unset($_POST["descD"]);
        unset($_POST["imgD"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function boissonstar()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM boissonstar ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createBoissonstar()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomS']);
    $prix = htmlentities($_POST['prixS']);
    $desc = htmlentities($_POST['descS']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgS"]) && $_FILES["imgS"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgS"]['name']);
        move_uploaded_file($_FILES["imgS"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO boissonstar (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomS"]);
        unset($_POST["prixS"]);
        unset($_POST["descS"]);
        unset($_POST["imgS"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function boissonchaude()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM boissonchaude ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createBoissonchaude()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomB']);
    $prix = htmlentities($_POST['prixB']);
    $desc = htmlentities($_POST['descB']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgB"]) && $_FILES["imgB"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgB"]['name']);
        move_uploaded_file($_FILES["imgB"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO boissonchaude (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomB"]);
        unset($_POST["prixB"]);
        unset($_POST["descB"]);
        unset($_POST["imgB"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function cocktails()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM cocktails ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createCocktails()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomC']);
    $prix = htmlentities($_POST['prixC']);
    $desc = htmlentities($_POST['descC']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgC"]) && $_FILES["imgC"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgC"]['name']);
        move_uploaded_file($_FILES["imgC"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO cocktails (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomC"]);
        unset($_POST["prixC"]);
        unset($_POST["descC"]);
        unset($_POST["imgC"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function milkshakes()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM milkshakes ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createMilkshakes()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomM']);
    $prix = htmlentities($_POST['prixM']);
    $desc = htmlentities($_POST['descM']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgM"]) && $_FILES["imgM"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgM"]['name']);
        move_uploaded_file($_FILES["imgM"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO milkshakes (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomM"]);
        unset($_POST["prixM"]);
        unset($_POST["descM"]);
        unset($_POST["imgM"]);
        header("Location: admin.php");
    }
    return $erreur;
}

function vin()
{
    global $bdd;
    $membres = $bdd->query('SELECT * FROM vin ORDER BY id DESC');
    $aff = $membres->fetchAll();
    return $aff;
}

function createVin()
{
    global $bdd;
    $erreur = "";
    $validation = false;
    $nom = htmlentities($_POST['nomV']);
    $prix = htmlentities($_POST['prixV']);
    $desc = htmlentities($_POST['descV']);
    if (empty($nom) || empty($nom)) {
        $erreur = "Veuiller remplir le nom";
    }
    if (empty($prix) || empty($desc) || empty($nom)) {
        $erreur = "Veuiller remplir le prix";
    }

    if (isset($_FILES["imgV"]) && $_FILES["imgV"]['error'] > 0) {
        $validation = false;
        $erreur = "Veuiller indiquer un fichier";
    } else {
        $validation = true;
    }

    if ($validation) {
        $img = basename($_FILES["imgV"]['name']);
        move_uploaded_file($_FILES["imgV"]["tmp_name"], "../assets/image/" . $img);
        $valide = $bdd->prepare('INSERT INTO vin (image, nom, prix, description) VALUES (:image, :nom, :prixb, :descb)');
        $valide->execute(array(
            'image' => $img,
            'nom' => $nom,
            'prixb' => $prix,
            'descb' => $desc
        ));
        unset($_POST["nomV"]);
        unset($_POST["prixV"]);
        unset($_POST["descV"]);
        unset($_POST["imgV"]);
        header("Location: admin.php");
    }
    return $erreur;
}
function affichage1()
{
    global $bdd;
    $id = intval($_GET['id']);
    $tables = ['boissonchaude', 'boissonstar', 'breakfast', 'burgers', 'cocktails', 'cookies', 'gateaux', 'glaces', 'grillades', 'membre', 'milkshakes', 'patiseries', 'pattes', 'pizzas', 'puddings', 'salades', 'special', 'specialdesert', 'tartes', 'vin'];
    $results = [];

    foreach ($tables as $table) {
        $recuperation = $bdd->prepare("SELECT * FROM $table WHERE id = ?");
        $recuperation->execute([$id]);
        $rec = $recuperation->fetch();
        if (!empty($rec)) {
            $results[] = [
                'table' => $table,
                'data' => $rec
            ];
        }
    }

    return $results;
}



function effNouriture()
{
    global $bdd;
    $id = intval($_GET['id']);
    $tables = ['boissonchaude', 'boissonstar', 'breakfast', 'burgers', 'cocktails', 'cookies', 'gateaux', 'glaces', 'grillades', 'membre', 'milkshakes', 'patiseries', 'pattes', 'pizzas', 'puddings', 'salades', 'special', 'specialdesert', 'tartes', 'vin'];

    foreach ($tables as $table) {
        $stmt = $bdd->prepare("DELETE FROM $table WHERE id = ?");
        $stmt->execute([$id]);
    }

    header('Location: admin.php');
    exit();
}



function btnModif(){
    global $bdd;
    $erreur = "";
    $nommodif = $_POST['nomModif'];
    $prixmodif = $_POST['prixModif'];
    $desmodif = $_POST['desmodif'];
    if (isset($_GET['table'], $_GET['id'])) {
        $table = $_GET['table'];
        $id = intval($_GET['id']);
    
        $tables = ['boissonchaude', 'boissonstar', 'breakfast', 'burgers', 'cocktails', 'cookies', 'gateaux', 'glaces', 'grillades', 'membre', 'milkshakes', 'patiseries', 'pattes', 'pizzas', 'puddings', 'salades', 'special', 'specialdesert', 'tartes', 'vin'];
        if (!in_array($table, $tables)) {
            die("Nom de table invalide");
        }
    
        if (!empty($nommodif) && !empty($prixmodif) && !empty($desmodif)) {
            $modifier = $bdd->prepare("UPDATE $table SET nom = :nom, prix = :prix, description = :desc WHERE id = :id");
            $modifier->execute(array(
                'nom' => $nommodif,
                'prix' => $prixmodif,
                'desc' => $desmodif,
                'id' => $id
            ));
            header('Location: admin.php');
        } else {
            $erreur = "Remplir les champs";
        }
    } else {
        $erreur = "Paramètres manquants";
    }
    return $erreur;
}

function affReservation(){
    // Récupérer le nom de l'utilisateur
    global $bdd;
    $query = $bdd->query("SELECT reservation.*, membre.username FROM reservation reservation INNER JOIN membre membre ON reservation.id_membre = membre.id ORDER BY id DESC");
    $reservations = $query->fetchAll(PDO::FETCH_ASSOC);

    return $reservations;
}

function affAchat(){
    global $bdd;
    $sql = $bdd->query('SELECT * FROM achat ORDER BY id DESC');
    $ligne = $sql->fetchAll();
    return $ligne;
}

function modifPay() {
    global $bdd;
    if (!is_array($_POST['id_achat']) || !is_array($_POST['payement'])) {
        return;
    }

    $id_achats = $_POST['id_achat'];
    $payements = $_POST['payement'];

    foreach($id_achats as $key => $id_achat) {
        if (isset($payements[$key])) {
            $payement = $payements[$key];
            $stmt = $bdd->prepare("UPDATE achat SET payement = :payement WHERE id = :id");
            $stmt->execute(["payement" => $payement, "id" => $id_achat]);
        }
    }
}

function modifPayResevation() {
    global $bdd;
    if (!is_array($_POST['id_reservation']) || !is_array($_POST['payement'])) {

        return;
    }

    $id_reservation = $_POST['id_reservation'];
    $payements = $_POST['payement'];

    foreach($id_reservation as $key => $id_res) {
        if (isset($payements[$key])) {
            $payement = $payements[$key];
            $stmt = $bdd->prepare("UPDATE reservation SET payement = :payement WHERE id = :id");
            $stmt->execute(["payement" => $payement, "id" => $id_res]);
        }
    }
}


function ajoutRoom(){
    global $bdd;

    if(isset($_POST['enregistre'])) {
        $image = $_FILES['img']['name'];
        $ville = $_POST['villeajout'];
        $pays = $_POST['paysajout'];

        if(move_uploaded_file($_FILES['img']['tmp_name'], '../assets/image/'.$image)) {
            $ajout = $bdd->prepare("INSERT INTO rooms (image, ville, pays) VALUES (?, ?, ?)");
            $ajout->execute([$image, $ville, $pays]);

            if($ajout) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
