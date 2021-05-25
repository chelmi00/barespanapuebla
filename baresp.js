function inicio() {

    let act = window.location.href;
    let a = document.referrer;
    let n = sessionStorage.getItem("n");
    if (act.includes("sugerencias.php") || act.includes("carta.html")){
        if (a.includes("index.html"))
            window.history.go(-1);
        else
            window.location.replace("index.html");
    }
    else if (act.includes("conocenos.html")){
        if (a.includes("index.html") || n === "error")
            window.history.go(-1);
        else if (n === "ok")
            window.history.go(-2);
        else
            window.location.replace("index.html");
    }
}

function carta() {
    aIndex();
    subir();
    window.location="carta.html";
}

function sugerencias() {
    aIndex();
    subir();
    window.location="sugerencias.php";
}

function conocenos() {
    let act = window.location.href;
    let a = document.referrer;
    if (!(act.includes("sugerencias.php") || act.includes("carta.html")))
        aIndex();
    if ((act.includes("sugerencias.php") || act.includes("carta.html")) && !a.includes("index.html")){
        sessionStorage.setItem("n", 'error');
        history.replaceState(null, "", "index.html");
    }
    if ((act.includes("sugerencias.php") || act.includes("carta.html")) && a.includes("index.html"))
        sessionStorage.setItem("n", 'ok');
    subir();
    window.location="conocenos.html";
}

function refresh() {
    let act = window.location.href;
    if (act.includes("index.html") || act.includes("conocenos.html"))
        window.location.reload();
    else
        window.location.replace("index.html");
}
function subir() {
    window.scrollTo(0, 0);
}

function aIndex() {
    let act = window.location.href;
    if (act.includes("index.html"))
        return;
    else
        history.replaceState(null, "", act + "index.html");
}

function enviar() {
    const modal = document.getElementById("popup");
    const span = document.getElementsByClassName("cerrar")[0];
    modal.style.display = "block";

    span.onclick = function () {
        modal.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
}

function modifyHeight(){
    if (sessionStorage.getItem("a") === 'ok') {
        sessionStorage.setItem("a", 'notok');
        return;
    }
    var width = window.innerWidth;
    if (width < 576){
        var elem = document.getElementById("iframe").contentWindow.document.getElementById("body-carousel");
        let height = "height: " + elem.offsetHeight +"px;";
        document.getElementById("carousel-comida").setAttribute("style", height);
    }
    sessionStorage.setItem("a", 'ok');
    window.location.reload();
}

window.onresize = modifyHeight;
window.onload = modifyHeight;