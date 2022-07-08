//Boutton Composant
let button = document.getElementById("composants");
let popUpCompo = document.getElementById("popUpComposant");
button.addEventListener("click", () => {
    if(getComputedStyle(popUpCompo).display != "none"){
        popUpCompo.style.display = "none";
    } else {
        popUpCompo.style.display = "block";
            /* On prépare la requête AJAX : URL, méthode et paramètres */
            const requete = fetch('assets/comp/bouttonComposants/selectComp.php', {
                method: 'POST'
            });

            /* On lance la requête AJAX grâce à fetch */
            requete.then(traiterReponse).then(traiterJson).catch(traiterErreur);
        }

        /* Cette fonction traite la réponse du serveur */
        function traiterReponse(reponse) {
            return reponse.json();
        }

        /* Cette fonction traite le texte reçu dans la réponse du serveur */
        function traiterJson(obj) {
            let html = "";
        for (comp of obj) {
            html += '<div id="' + comp.id + '" class="choixComposants" onclick="clickComp(' + comp.id + ')">' +
                    '<h2>'+ comp.name + '</h2>' +
                    '</div>';
        }
        document.getElementById("popUpComposant").innerHTML = html;
        }

        /* Cette fonction traite les cas d'erreur */
        function traiterErreur(texte) {
            alert(texte);
        }

})



