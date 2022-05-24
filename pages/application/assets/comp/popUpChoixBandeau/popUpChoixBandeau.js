//Composant bandeau
let bandeau = document.getElementById("bandeau");
let popUpbandeau = document.getElementById("popUpChoixBandeau");
bandeau.addEventListener("click", () => {
    if(getComputedStyle(popUpbandeau).display != "none"){
        popUpbandeau.style.display = "none";
    } else {
        popUpbandeau.style.display = "block";
        popUpCompo.style.display = "none";
    }
})
//Close Pop Up
let closePopUpBandeau = document.getElementById('closePopUpBandeauChoix');
closePopUpBandeau.addEventListener("click", closePopUp);
function closePopUp(evt){
    popUpbandeauChoix.style.display = "none";
}