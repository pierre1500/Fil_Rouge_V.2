<div id="popUpBandeauM1" class="popUpChoixModel">
    <div class="headerPopUp">
        <input class="shearch-bar" type="search">
        <div class="closePopUp" id="closePopUpBandeau"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <div class="bodyPopUp">

        <div class="popUpImageComposant">
            <?php echo '<h2 style="text-align: center";>' . $titre . '</h2>'; ?></h2>
            <img class="popUpImage" src="./imagesComposants/bandeauM1.PNG">
        </div>
        <div class="popUpBodyFlex">
            <div class="popUpCode">
                <h3>Html</h3>
                <code><?php echo htmlspecialchars($html); ?></code>
            </div>
            <div class="popUpCode">
                <h3>CSS</h3>
                <code><?php echo $css; ?></code>
            </div class="popUpCode">
            <div class="popUpCode">
                <h3>JavaScript</h3>
                <code><?php echo $js; ?></code>
            </div>
        </div>

    </div>
</div>
