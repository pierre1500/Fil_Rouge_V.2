//Boutton Composant
let button = document.getElementById("composants");
let popUpCompo = document.getElementById("popUpComposant");
button.addEventListener("click", () => {
    if(getComputedStyle(popUpCompo).display != "none"){
        popUpCompo.style.display = "none";
    } else {
        popUpCompo.style.display = "block";
    }
})