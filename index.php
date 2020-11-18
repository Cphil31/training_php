<?php

$bdd = new PDO('mysql:host=localhost;dbname=garden','root','');
$req = $bdd->query('SELECT * FROM produit ');
$produitTab = $req->fetchAll();
var_dump($produitTab); 
?>