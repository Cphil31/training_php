<?php 
 
function afficher ()
{
    //On explique a php qu'on vas utiliser la connection sur cette page , on mets global.
    global $bdd;
    //on fait une requete
    $req = $bdd->query('SELECT * FROM produit ');

  
    $produitTab = $req->fetchAll();

    return $produitTab;
} 