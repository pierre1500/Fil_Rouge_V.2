<?php
require_once "lib/files/lib.php";
?>

<?php
require "assets/builds/php/sql.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    @include_once 'assets/link/link.php';
    codemirror::head();
    ?>
    <title>Application</title>
</head>
<body>
<!--Header-->
<div class="menu">
    <div id="application">
        <!--Shearch Bar principal -->
        <?php
        @include_once 'assets/comp/barreNav/barreNav.php'
        ?>
        <!-- Div qui contient boutton composants et pop up choix model -->
        <div id="option-container">
            <!--Boutton Composants-->
            <?php
            @include_once 'assets/comp/bouttonComposants/bouttonComposants.php';
            ?>
            <!-- Pop Up Composants-->
            <?php
            @include_once 'assets/comp/popUpComposants/popUpComposants.php';
            ?>
            <!--PopUp Choix Model Bandeau-->
            <?php
            @include_once 'assets/comp/popUpChoixBandeau/popUpChoixBandeau.php';
            ?>
            <!--PopUp Bandeau Model 1-->
            <?php
            @include_once 'assets/comp/popUpModel1/popUpModel1.php';
            ?>
            <!--Boutton Choix Langue-->
            <?php
            @include_once 'assets/comp/choixLangue/choixLangue.php';
            ?>
            <!--Boutton create composant-->
            <?php
            @include_once 'assets/comp/buttonCreateComposant/buttonCreateComposant.php';
            ?>
            <?php
            codemirror::body();
            ?>
            <!--Iframe Résultat-->
            <?php
            @include_once 'assets/comp/liveRoom/liveRoom.php';
            ?>
            <script src="assets/builds/js/application.js"></script>
            <script src="lib/files/codemirror.js"></script>
            <script src="assets/comp/bouttonComposants/bouttonComposants.js"></script>
            <script src="assets/comp/popUpChoixBandeau/popUpChoixBandeau.js"></script>
            <script src="assets/comp/choixLangue/choixLangue.js"></script>
            <script src="assets/comp/liveRoom/liveRoom.js"></script>
</body>
</html>
