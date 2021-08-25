<?php
    $serveur = "localhost";
    $dbname = "formulaire";
    $login = "root";
    $mdp = "";
    $connect = mysqli_connect($serveur,$dbname,$login,$mdp);
    if(!$connect)
    {
        echo "La connexion est faible!";
    }
?>