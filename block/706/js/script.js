
/* Click Tab Table Detail product */
function openTab(evt, nameTab) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(nameTab).style.display = "block";
    evt.currentTarget.className += " active";
}

function clickButtonUp() {
    document.getElementById("btn-up").style.opacity = "0";
    document.getElementById("btn-down").style.opacity = "1";
    document.getElementById("hide").style.display = "block";
    document.getElementById("show").style.display = "none";
}

function clickButtonDown() {
    document.getElementById("btn-up").style.opacity = "1";
    document.getElementById("btn-down").style.opacity = "0";
    document.getElementById("hide").style.display = "none";
    document.getElementById("show").style.display = "block";
}