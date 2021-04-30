function openNav() {
    let navBar = document.querySelector("#navBar");
    if (screen.width <= "674px") {
        if (navBar.style.visibility == "visible") {
            navBar.style.visibility = "collapse";
        }

        else {
            navBar.style.visibility = "visible";
        }
    }
    else { return }

}
