function footer__send () {
    var article__display = document.getElementById("article__display_send");

    if (article__display.style.display === "none") {
        article__display.style.display = "inline";     
    }
    else {
        article__display.style.display = "none";
    }
}
function display__none_send () {
    var article__display = document.getElementById("article__display_send");

    if (article__display.style.display === "inline") {
        article__display.style.display = "none";
    }
    else {
        article__display.style.display = "inline";
    }
}
//
//
function footer__sos () {
    var article__display = document.getElementById("article__display_sos");

    if (article__display.style.display === "none") {
        article__display.style.display = "inline";     
    }
    else {
        article__display.style.display = "none";
    }
}
function display__none_sos () {
    var article__display = document.getElementById("article__display_sos");

    if (article__display.style.display === "inline") {
        article__display.style.display = "none";
    }
    else {
        article__display.style.display = "inline";
    }
}
//
//
function footer__order () {
    var article__display = document.getElementById("article__display_order");

    if (article__display.style.display === "none") {
        article__display.style.display = "inline";     
    }
    else {
        article__display.style.display = "none";
    }
}
function display__none_order () {
    var article__display = document.getElementById("article__display_order");

    if (article__display.style.display === "inline") {
        article__display.style.display = "none";
    }
    else {
        article__display.style.display = "inline";
    }
}

function footerButton() {
    var open = document.getElementById("footer__button");
    var name = document.getElementById("footer__button_name");
    var footer = document.getElementById("footer__body");
    var chup = document.getElementById("chevronup");
    var chdow = document.getElementById("chevrondown");

    if (footer.style.display === "none") {
        footer.style.display = "inline";
        name.innerHTML = "Закрыть";
        chup.style.display = "none";
        chdow.style.display = "inline";
    }
    else {
        footer.style.display = "none";
        name.innerHTML = "Открыть";
        chup.style.display = "inline";
        chdow.style.display = "none";
    }
}
