<?php
    try
        {
            $connexion = new PDO('mysql:host=localhost;dbname=registration;charset=utf8', 'root', '');
        }
            catch(Exception $e) 
        {
            die('Connexion échouée ! : '.$e->getMessage());  
        }
?>