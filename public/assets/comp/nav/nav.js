let popUpFriend = document.getElementById("popUpFriend");
document.getElementById("myContact").addEventListener('click', function() {
    if (popUpFriend.style.display == "none") {
        popUpFriend.style.display = "block";
    }
    else {
        popUpFriend.style.display = "none";
    }
}
);