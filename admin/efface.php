<?php

require "../connexion/bdd.php";
include "./functionAdmin.php";
$bdd = bdd();
if(isset($_GET["id"])){
    $id = intval($_GET["id"]);
    effroom($id);
}



effMembres();