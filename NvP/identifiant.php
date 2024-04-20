<?php

    include 'page-connexion.php';

    if (!empty($_POST["login"]))
    {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        $sql = "INSERT INTO identifiant VALUES (null, '$login', '$mdp', NOW() ) ";
        echo $sql;
        $reponse = $connexion->prepare($sql);
        $reponse->execute();
    }

?>