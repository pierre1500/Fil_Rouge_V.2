<div class="contentFormulaire">
    <h1 class="titre-form">Inscription</h1>
    <form class="formulaire-block" method="post">
        <input type="text" class="formulaire" name="pseudoInscription" id="pseudoInscription" placeholder="Pseudo" required>
        <input type="email" class="formulaire" name="emailInscription" id="emailInscription" placeholder="Address mail" required>
        <input type="password" class="formulaire" name="passwordInscription" id="passwordInscription" placeholder="Password" required>
        <input type="text" class="formulaire" name="verifyPassword" id="verifyPassword" placeholder="Password again" required>
        <input type="submit" class="formulaire-submit" name="submitInscription" id="submitInscription">
    </form>
    <?php
    @include_once "assets/comp/form-page-inscription/database.php";
    ?>
</div>

