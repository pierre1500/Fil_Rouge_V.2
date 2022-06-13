<?php
    define('HOST','localhost');
    define('DB_NAME','devappsocial');
    define('USER','root');
    define('PASS','');

    $pseudo = $_POST["pseudoInscription"];
    $email = $_POST["emailInscription"];
    $password = $_POST["passwordInscription"];

    if (!empty($pseudo) && !empty($email) && !empty($password)) {
        try {
            $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//On insère les données reçues
            $sth = $db->prepare("INSERT INTO users(pseudo, email, password) VALUES(:pseudo, :email, :password)");
            $sth->bindParam(':pseudo', $pseudo);
            $sth->bindParam(':email', $email);
            $sth->bindParam(':password', $password);
            $sth->execute();

            header("Location:page-connection.php");
        } catch (PDOException $e) {
            echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
        }
    }
?>