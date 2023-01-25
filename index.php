<?php
session_start();
$_SESSION['password'] = "check";

if($_POST['password'] === $_SESSION['password']) {
    echo $_SESSION['password'];
} else {
    echo "Ouuupsss, mot de passe incorect";
}