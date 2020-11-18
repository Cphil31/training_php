<?php 
 global $bdd;
 
 $req = $bdd->query('SELECT * FROM produit ');
 $produitTab = $req->fetchAll();