function openNav() {
    let navBar = document.querySelector("#navBar");

    if (navBar.style.visibility == "visible") {
        navBar.style.visibility = "collapse";
    }

    else {
        navBar.style.visibility = "visible";
    }
}