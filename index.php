<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=garden','root','');


// pour aller sur une page en tapant directement l'url .
//si la page tapée n'exite pas on retournes sur accueil.
if (!empty($_GET['page']) && is_file('controllers/'.$_GET['page'].'.php')){
    include('controllers/'.$_GET['page'].'.php');
}
else{
    include('controllers/index.php');
}

?>  