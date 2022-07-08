<?php
include "../../../../page-inscription-connection/form-connect/session.php";
if (session::ouvrir()) {

    $name = null;
    $codeHtml = null;
    $codeCss = null;
    $codeJs = null;

    $idUser = session::lire_param("id");
    $bdd = new PDO('mysql:host=localhost;dbname=devappsocial', "root", "");
    $req = $bdd->prepare('SELECT id,name FROM composants WHERE fk_id = :idUser');
    $req->execute(array('idUser' => $idUser));
    $resultat = $req->fetchAll();
    echo json_encode($resultat);
}



