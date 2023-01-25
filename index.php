<?php
session_start();
$_SESSION['password'] = "check";

if($_POST['password'] === $_SESSION['password']) {
    echo "Voici le contenu protégé si le mot de passe est OK";
} else {
    echo "Ouuupsss, mot de passe incorect";
}