function inicio() {

    let act = window.location.href;
    let a = document.referrer;
    let n = sessionStorage.getItem("n");
    if (act.includes("sugerencias.php") || act.includes("carta.html")){
        if (a.includes("index.php"))
            window.history.go(-1);
        else
            window.location.replace("index.php");
    }
    else if (act.includes("conocenos.html")){
        if (a.includes("index.php") || n === "error")
            window.history.go(-1);
        else if (n === "ok")
            window.history.go(-2);
        else
            window.location.replace("index.php");
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
    if ((act.includes("sugerencias.php") || act.includes("carta.html")) && !a.includes("index.php")){
        sessionStorage.setItem("n", 'error');
        history.replaceState(null, "", "index.php");
    }
    if ((act.includes("sugerencias.php") || act.includes("carta.html")) && a.includes("index.php"))
        sessionStorage.setItem("n", 'ok');
    subir();
    window.location="conocenos.html";
}

function refresh() {
    let act = window.location.href;
    if (act.includes("index.php") || act.includes("conocenos.html"))
        window.location.reload();
    else
        window.location.replace("index.php");
}
function subir() {
    window.scrollTo(0, 0);
}

function aIndex() {
    let act = window.location.href;
    if (act.includes("index.php"))
        return;
    else
        history.replaceState(null, "", act + "index.php");
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