<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    @include_once 'public/assets/link/link.php';
    ?>
    <title>Index</title>
</head>
<body>
<div class="container">
<!-- Nav -->
    <?php
    @include_once 'public/assets/comp/nav/nav.php';
    ?>
    <div class="middlePage">
<!-- Barre Nav -->
    <?php
    @include_once 'public/assets/comp/barSearch/barSearch.php';
    ?>
        <?php
        @include_once 'public/assets/comp/navMiddle/navMiddle.php';
        ?>
    </div>
    <div class="flexForProfil">
        <!--Profil-->
    <?php
    @include_once 'public/assets/comp/profil/profil.php';
    ?>
        <!--Amis-->
        <?php
        @include_once 'public/assets/comp/amis/amis.php';
        ?>

    </div>
</div>
</body>
</html>
