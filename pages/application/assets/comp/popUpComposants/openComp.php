<?php

//connect to bdd
$bdd = new PDO('mysql:host=localhost;dbname=devappsocial', "root", "");

//requette
$req = $bdd->prepare('SELECT * FROM composants WHERE id = :id');
$req->execute(array('id' => $_POST['id']));
$composant = $req->fetch();
die(json_encode($composant));


