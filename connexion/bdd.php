<?php
function bdd(){
    try{
        $bdd = new PDO('mysql:dbname=hotela;host=localhost',"root","");
        $bdd->exec('SET NAMES UTF8');
    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    return $bdd;
}