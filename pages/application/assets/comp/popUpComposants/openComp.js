function clickComp(id) {
    //ajax
    param = new FormData();
    param.append('id', id);
    let requete = fetch('assets/comp/popUpComposants/openComp.php', {
        method: 'POST',
        body: param
    });

    requete.then(traiterReponse).then(traiterJson).catch(traiterErreur);

    function traiterReponse(reponse) {
        return reponse.json();
    }

    function traiterJson(obj) {
        editor.getDoc().setValue(obj.codeHtml);
        editorOfCss.getDoc().setValue(obj.codeCss);
        editorOfJs.getDoc().setValue(obj.codeJs);
    }

    function traiterErreur(texte) {
        alert(texte);
    }
}
