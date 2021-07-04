//this is used for our mobile nav div
function showHideNav() {
    /*
        get our dropdown ul navigation
        get COMPUTED style (wont work if not computed)
        toggle display
    */
    var dropdownNav = document.getElementById("dropdownNavigation");
    var icon = dropdownNav.childNodes[0];
    var content = dropdownNav.childNodes[1];
    var display = getComputedStyle(content).display;

    var hidden = (display === "none");

    if(hidden) {
        icon.innerHTML = "&#10005;";
        content.style.display = "block";
    } else {
        icon.innerHTML = "&#9776;";
        content.style.display = "none";
    }
}

/*
//rotate an element
function rotateElement(elem, deg) {
    elem.style.webkitTransform = 'rotate('+deg+'deg)';
    elem.style.mozTransform    = 'rotate('+deg+'deg)';
    elem.style.msTransform     = 'rotate('+deg+'deg)';
    elem.style.oTransform      = 'rotate('+deg+'deg)';
    elem.style.transform       = 'rotate('+deg+'deg)';
}

//function for getting the screen current width/height
function screenWidth() {
    return window.innerWidth || document.documentElement.clientWidth ||
    document.body.clientWidth;
}

function screenHeight() {
    return window.innerHeight|| document.documentElement.clientHeight||
    document.body.clientHeight;
}
*/
