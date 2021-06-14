
    let screenWidth = screen.width;
    
    function openNav() {
    let navBar = document.querySelector("#navBar");



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


    if (screenWidth <= 674) {
        let burger1 = document.querySelector("#burger1");
        burger1.tabIndex = 1;
    }



document.getElementById("logo-img").onclick = function () {
    window.location.href = "index.html";
}
