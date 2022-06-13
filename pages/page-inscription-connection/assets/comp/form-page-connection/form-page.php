<div class="contentFormulaire">
    <h1 class="titre-form">Connection</h1>
    <form class="formulaire-block" method="post">
        <input type="text" class="formulaire" name="pseudoConnection" id="pseudoConnection" placeholder="Pseudo" required>
        <input type="password" class="formulaire" name="passwordConnection" id="passwordConnection" placeholder="Password" required>
        <input type="submit" class="formulaire-submit" name="submitConnection" id="submitConnection">
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
