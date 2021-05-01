function openNav() {
    let navBar = document.querySelector("#navBar");

    let screenWidth = screen.width;
    

    if (screenWidth <= 674) {
        if (navBar.style.visibility == "visible") {
            navBar.style.visibility = "hidden";
        }

        else if (navBar.style.visibility == "hidden") {
            navBar.style.visibility = "visible";
        }

        else {
            navBar.style.visibility = "visible";
        }
    }

    else {
        return;
    }
    

}
