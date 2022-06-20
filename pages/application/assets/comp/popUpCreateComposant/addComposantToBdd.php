<?php
$bdd = new PDO('mysql:host=localhost;dbname=devappsocial', "root", "");

include "../../../../page-inscription-connection/form-connect/session.php";
if (session::ouvrir()) {
    $id = session::lire_param("id");
    $req = $bdd->prepare('INSERT INTO composants(name,codeHtml, codeCss, codeJs, fk_id) VALUES(:name, :codeHtml, :codeCss, :codeJs, :fk_id)');
    $req->execute(array('name' => $_POST['name'], 'codeHtml' => $_POST['codeHtml'], 'codeCss' => $_POST['codeCss'], 'codeJs' => $_POST['codeJs'], 'fk_id' => $id));
}




