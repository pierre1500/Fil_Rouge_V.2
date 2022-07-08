<?php
include '../../../../pages/page-inscription-connection/form-connect/session.php';
if (session::ouvrir()) {

    $idUser = session::lire_param("id");
    $bdd = new PDO('mysql:host=localhost;dbname=devappsocial', "root", "");
    $req = $bdd->prepare('SELECT f.user1_id as id,u.pseudo as pseudo,u.connect FROM users u Inner JOIN friends f ON u.id = f.user1_id WHERE f.user2_id = :idUser UNION  SELECT
    f.user2_id as id, u.pseudo as pseudo,u.connect FROM users u INNER JOIN friends f ON u.id = f.user2_id WHERE f.user1_id = :idUser');
    $req->execute(array('idUser' => $idUser));
    $resultat = $req->fetchAll();
    echo json_encode($resultat);
}
