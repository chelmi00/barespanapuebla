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
        if (a.includes("index.html"))
            window.history.go(-1);
        else
            window.location.replace("index.html");
    }
    else if (act.includes("conocenos.php")){
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
    if ((act.includes("sugerencias.php") || act.includes("carta.php")) && !a.includes("index.html")){
        sessionStorage.setItem("n", 'error');
        history.replaceState(null, "", "index.html");
    }
    if ((act.includes("sugerencias.php") || act.includes("carta.php")) && a.includes("index.html"))
        sessionStorage.setItem("n", 'ok');
    subir();
    window.location="conocenos.php";
}

function refresh() {
    let act = window.location.href;
    if (act.includes("index.html") || act.includes("conocenos.php"))
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
    if (!window.location.href.includes("index.html"))
        return;
        
    var elem = document.getElementById("iframe").contentWindow.document.getElementById("body-carousel");
    let height = "height: " + elem.offsetHeight +"px;";
    document.getElementById("carousel-comida").setAttribute("style", height);
}
window.onresize = modifyHeight;
window.onload = modifyHeight;
