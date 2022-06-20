//Composant bandeau
let popCreateComposant = document.getElementById("popUpCreateComposant");
let createNewComposant = document.getElementById("createComposant");
createNewComposant.addEventListener("click", () => {
    if(getComputedStyle(popCreateComposant).display !== "flex"){
        popCreateComposant.style.display = "flex";
    }
})
//Close Pop Up
let closePopUpCreateComposant = document.getElementById('closePopUpCreateComposant');
closePopUpCreateComposant.addEventListener("click", closePopUp);
function closePopUp(evt){
    popCreateComposant.style.display = "none";
}
let formCreateComposant = document.getElementById('formCreateComposant');
formCreateComposant.addEventListener("submit", (evt) => {
    evt.preventDefault();
    let form = new FormData(formCreateComposant);
    form.append('codeHtml', editor.getValue());
    form.append('codeCss', editorOfCss.getValue());
    form.append('codeJs', editorOfJs.getValue());
    let requete = fetch('assets/comp/popUpCreateComposant/addComposantToBdd.php', {
        method: 'POST',
        body: form
    });
    requete.then(traiterReponse).then(traiterJson).catch(traiterErreur);
});


function traiterReponse(reponse) {
    return reponse.text();
}

/* Cette fonction traite le texte reçu dans la réponse du serveur */
function traiterJson(obj) {
    if (obj === 'OK') {
        window.location = 'http://localhost:63342/Mon%20Fil%20rouge%20v.2/index.php';
    }
}

/* Cette fonction traite les cas d'erreur */
function traiterErreur(texte) {
    alert(texte);
}
