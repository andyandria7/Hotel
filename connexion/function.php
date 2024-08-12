<?php
function affichage()
{
    global $bdd;
    $sql = $bdd->query('SELECT * FROM slider ORDER BY id DESC');
    $ligne = $sql->fetchAll();
    return $ligne;
}
function affchambre(){
    global $bdd;
    $membres = $bdd->query('SELECT * FROM rooms ORDER BY id DESC');
    $aff = $membres->fetchAll();
    
    return $aff;
}


function inscription()
{
    global $bdd;
    $erreur = array();
    $validation = false;
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $pass = $_POST['pass'];
    $passV = $_POST['passV'];

    if (!empty($username) && !empty($email) && !empty($pass)) {
        $user = strlen($username);
        if ($user <= 50) {
            $nameExist = $bdd->prepare('SELECT username FROM membre WHERE username = ?');
            $nameExist->execute([$username]);
            $existUser = $nameExist->fetchColumn();
            if (!$existUser) {
                if ($pass == $passV) {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if (strlen($pass) >= 6) {
                            if (preg_match('/[A-Z]/', $pass)) {
                                if (preg_match('/[0-9]/', $pass)) {
                                    $validation = true;
                                } else {
                                    $erreur[] = "Le mot de passe doit contenir au moins un chiffre";
                                }
                            } else {
                                $erreur[] = "Le mot de passe doit contenir au moins une majuscule";
                            }
                        } else {
                            $erreur[] = "Le mot de passe doit contenir au moins 6 caractères";
                        }
                    } else {
                        $erreur[] = "Votre email est incorrect";
                    }
                } else {
                    $erreur[] = "Vos mots de passe ne correspondent pas";
                }
            } else {
                $erreur[] = 'Ce nom d\'utilisateur existe déjà';
            }
        } else {
            $erreur[] = "Votre nom d'utilisateur est trop long";
        }
    } else {
        $erreur[] = "Veuillez remplir tous les champs";
    }

    if ($validation) {
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

        $valid = $bdd->prepare('INSERT INTO membre(username, email, pass) VALUES (:username, :email, :pass)');
        $valid->execute([
            'username' => $username,
            'email' => $email,
            'pass' => $pass_hash
        ]);

        // unset($_POST['username']);
        // unset($_POST['email']);
    }

    return $erreur;
}


function connexion()
{
    global $bdd;
    $erreur = array();
    $user = htmlspecialchars($_POST['username']);
    $pass = $_POST['pass'];

    if (!empty($user) && !empty($pass)) {
        $exist = $bdd->prepare("SELECT * FROM membre WHERE username = :user OR email = :user");
        $exist->execute(['user' => $user]);
        $response = $exist->fetch();

        if ($response && password_verify($pass, $response['pass'])) {
            $_SESSION['id'] = (int) $response['id'];
            $_SESSION['username'] = $response['username'];
            $_SESSION['email'] = $response['email'];
            // Ne stockez pas le mot de passe en session
            unset($_SESSION['pass']);
            header("Location: membre.php");
            exit; // Assurez-vous de terminer le script après la redirection
        } else {
            $erreur[] = "Nom d'utilisateur ou mot de passe incorrect";
        }
    } else {
        $erreur[] = "Veuillez remplir les formulaires";
    }
    return $erreur;
}



function deconnection()
{
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    header("Location: index.php");
}

function aff()
{
    global $bdd;
    $tables = ['boissonchaude', 'boissonstar', 'breakfast', 'burgers', 'cocktails', 'cookies', 'gateaux', 'glaces', 'grillades', 'membre', 'milkshakes', 'patiseries', 'pattes', 'pizzas', 'puddings', 'salades', 'special', 'specialdesert', 'tartes', 'vin'];
    $results = [];

    foreach ($tables as $table) {
        $aff = $bdd->query("SELECT * FROM $table ORDER BY id DESC");
        $results[$table] = $aff->fetchAll();
    }

    return $results;
}

function reservation()
{
    global $bdd;
    if (isset($_SESSION['id'], $_POST['room_type'], $_POST['room_number'], $_POST['person_number'], $_POST['child_number'], $_POST['res_facilities'], $_POST['arriver'], $_POST['depart'], $_POST['message'])) {
        $idUser = intval($_SESSION['id']);
        $room_type = $_POST['room_type'];
        $room_number = $_POST['room_number'];
        $person_number = $_POST['person_number'];
        $child_number = $_POST['child_number'];
        $res_facilities = $_POST['res_facilities'];
        $arriver = $_POST['arriver'];
        $depart = $_POST['depart'];
        $message = $_POST['message'];
        $prix = $_POST['room_price']; 
        $payement = "Réserver";

        $insert = $bdd->prepare('INSERT INTO reservation (id_membre, chambre, nchambre, npersonne, nenfant, restauration, arriver, depart, message, prix, payement) VALUES (:id_membre, :chambre, :nchambre, :npersonne, :nenfant, :restauration, :arriver, :depart, :message, :prix, :payement)');
        $insert->execute(array(
            'id_membre' => $idUser,
            'chambre' => $room_type,
            'nchambre' => $room_number,
            'npersonne' => $person_number,
            'nenfant' => $child_number,
            'restauration' => $res_facilities,
            'arriver' => $arriver,
            'depart' => $depart,
            'message' => $message,
            'prix' => $prix,
            'payement' => $payement,
        ));

        return "Votre réservation a été enregistrée avec succès.";
    } else {
        return "Tous les champs du formulaire doivent être remplis.";
    }
}



// function achat() {
//     global $bdd;

//     try {
//         if(isset($_GET['table'], $_GET['id'], $_GET['nom'], $_GET['prix'])) {
//             $table = $_GET['table'];
//             $id = $_GET['id'];
//             $nomNouriture = $_GET['nom'];
//             $prix = $_GET['prix'];
//             $idUser = $_SESSION['id'];
//             $idNom= $_SESSION['username'];

//             $tables = ['boissonchaude', 'boissonstar', 'breakfast', 'burgers', 'cocktails', 'cookies', 'gateaux', 'glaces', 'grillades', 'membre', 'milkshakes', 'patiseries', 'pattes', 'pizzas', 'puddings', 'salades', 'special', 'specialdesert', 'tartes', 'vin'];

//             if (!in_array($table, $tables)) {
//                 throw new Exception("Nom de table invalide");
//             }

//             $queryNourriture = $bdd->prepare("SELECT * FROM $table WHERE id = :id AND nom = :nom AND prix = :prix");
//             $queryNourriture->execute(array('id' => $id, 'nom' => $nomNouriture, 'prix' => $prix));
//             $nourriture = $queryNourriture->fetch(PDO::FETCH_ASSOC);

//             $queryUtilisateur = $bdd->prepare("SELECT * FROM membre WHERE id = :id AND username = :username");
//             $queryUtilisateur->execute(array('id' => $idUser, 'username' => $idNom));
//             $utilisateur = $queryUtilisateur->fetch(PDO::FETCH_ASSOC);

//             $recuperation = $bdd->prepare("INSERT INTO achat(id_utilisateur, id_nourriture, nom_utilisateur, nom_nourriture, prix) VALUES (:id_utilisateur, :id_nourriture, :nom_utilisateur, :nom_nourriture, :prix)");
//             $recuperation->execute(array(
//                 'id_utilisateur' => $idUser, 
//                 'id_nourriture' => $id,
//                 'nom_utilisateur' => $idNom,
//                 'nom_nourriture' => $nomNouriture,
//                 'prix' => $prix
//             ));

//             return [$nourriture, $utilisateur];
//         }
//     } catch (PDOException $e) {
//         echo "Erreur PDO : " . $e->getMessage();
//     } catch (Exception $e) {
//         echo "Erreur : " . $e->getMessage();
//     }
// }

function achat(){
    global $bdd;
    $idUser = $_SESSION['id'];
    $nomUser = $_SESSION['username'];
    $idNouriture = $_POST['id'];
    $nomNouriture = $_POST['nom'];
    $prixNouriture = $_POST['prix'];

    try {
        $sql = $bdd->prepare('INSERT INTO achat (id_utilisateur, id_nourriture, nom_utilisateur, nom_nourriture, prix) VALUES (:id_utilisateur, :id_nourriture, :nom_utilisateur, :nom_nourriture, :prix)');
        $sql->execute([
            'id_utilisateur' => $idUser, 
            'id_nourriture' => $idNouriture,
            'nom_utilisateur' => $nomUser,
            'nom_nourriture' => $nomNouriture,
            'prix' => $prixNouriture
        ]);
        echo "Achat effectué avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de l'achat : " . $e->getMessage();
    }
}
?>
