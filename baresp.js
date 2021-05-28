function inicio() {

    let act = window.location.href;
    let a = document.referrer;
    let n = sessionStorage.getItem("n");
    let k = sessionStorage.getItem("k");
    if (k === "ok"){
        sessionStorage.setItem("k", 'notok');
        window.history.go(-1);
    }
    if (act.includes("sugerencias.php") || act.includes("carta.php")){
        if (a.includes("index.php"))
            window.history.go(-1);
        else
            window.location.replace("index.php");
    }
    else if (act.includes("conocenos.php")){
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
    window.location="carta.php";
}

function sugerencias() {
    aIndex();
    subir();
    window.location="sugerencias.php";
}

function conocenos(){
    let act = window.location.href;
    let a = document.referrer;
    if (!(act.includes("sugerencias.php") || act.includes("carta.php")))
        aIndex();
    if ((act.includes("sugerencias.php") || act.includes("carta.php")) && !a.includes("index.php")){
        sessionStorage.setItem("n", 'error');
        history.replaceState(null, "", "index.php");
    }
    if ((act.includes("sugerencias.php") || act.includes("carta.php")) && a.includes("index.php"))
        sessionStorage.setItem("n", 'ok');
    subir();
    window.location="conocenos.php";
}

function refresh() {
    let act = window.location.href;
    if (act.includes("index.php") || act.includes("conocenos.php"))
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
    sessionStorage.setItem("k", 'ok');
    window.location="respuesta.php";
}

function volver() {
    if (!window.location.href.includes("respuesta.php"))
        return;

    window.history.go(-1);
}
window.onclick = volver;

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
// window.onload = modifyHeight;