/* On prépare la requête AJAX : URL, méthode et paramètres */
const requete2 = fetch('public/assets/comp/amis/connectBddAmis.php', {
    method: 'POST'
});

/* On lance la requête AJAX grâce à fetch */
requete2.then(traiterReponse).then(traiterJson).catch(traiterErreur);


/* Cette fonction traite la réponse du serveur */
function traiterReponse(reponse) {
    return reponse.json();
}

/* Cette fonction traite le texte reçu dans la réponse du serveur */
function traiterJson(obj) {
    let html = "";
    for (let friend of obj) {
        html += '<div class="friend" id="' + friend.id + '">' + '<img class="imgFriend" src="public/assets/images/ellipse.png">' +
            '<p class="pseudoFriend">'+ friend.pseudo + '</p>' + '<img class="imgConnect" src="public/assets/images/ellipseConnect.png">' +
            ' <p class="connectFriend">' + friend.connect + '</p>' + '</div>';
    }
    document.getElementById("friendList").innerHTML = html;
}

/* Cette fonction traite les cas d'erreur */
function traiterErreur(texte) {
    alert(texte);
}
