// BOUTON CHOIX DU LANGAGE
const langages = document.querySelector(".langages");
const menu = document.querySelector(".menuChoixLang");
const liste = document.querySelectorAll(".lang");
for (const lang of liste) {
    lang.addEventListener('click', selectLang);
}

langages.addEventListener("click", clickLangages);

function clickLangages(e) {
    langages.classList.toggle('langages-open');
    langages.classList.toggle('langages-close');
}

function selectLang(e) {
    const idLang = e.target.id;
    menu.className = "menuChoixLang menu-" + idLang;
    langEditor(idLang)
}

// EDITEUR DU LANGAGE SELECTIONNE
function langEditor(lang) {
    if (lang == "html")
    {
        document.getElementById("cssEditor").style.display = "none";
        document.getElementById("htmlEditor").style.display = "block";
        document.getElementById("jsEditor").style.display = "none";
    }
    else if (lang == "css")
    {
        document.getElementById("htmlEditor").style.display = "none";
        document.getElementById("cssEditor").style.display = "block";
        document.getElementById("jsEditor").style.display = "none";
    }
    else if (lang == "js")
    {
        document.getElementById("htmlEditor").style.display = "none";
        document.getElementById("cssEditor").style.display = "none";
        document.getElementById("jsEditor").style.display = "block";
    }

}