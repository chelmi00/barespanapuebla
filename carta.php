<?php
    $dbhost = "localhost";
    $dbuser = "id16790866_barespanapuebla";
    $dbpass = "RELLENAR";
    $dbname = "id16790866_carta";
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF-8'"));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $error) {
        die("Error conexión BBDD " . $error->getMessage());
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.80.0" />
    <title>Nuestra Carta</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/"/>

    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet" />
    <link href="baresp.css" rel="stylesheet" />
    <link href="navbar.css" rel="stylesheet" />
    <link href="footer.css" rel="stylesheet" />

    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="baresp.js"></script>

    <link href="src/icon.png" rel="icon" style="object-fit: scale-down" />
</head>

<body data-spy="scroll">

    
    <nav class="navbar navbar-expand-md navbar-dark py-0 fixed-top">
        <div class="home">
          <div class="nav-logo mx-0 mx-sm-2 my-0">
            <a onclick="inicio()" href="javascript:void(0)" class="home">
              <img src="src/logo_dia.png" class="dia img-logo" />
              <img src="src/logo_noche.png" class="noche img-logo" />
            </a>
          </div>
        </div>
    </nav>

    <main>

        <div class="carta">
            <div class="container">
                <img class="container sep" src="src/carta.jpg">
            </div>
        </div>

        <div>
            <div class="container sep">
                <h2>También puede encontrar <a href="src/carta.pdf" target="_blank">nuestra carta</a> en formato PDF</h2>

                <div class="takeaway">
                    <h2>Take Away</h2>
                    <p>
                        Nues&shy;tra for&shy;ma de ges&shy;tio&shy;nar el <em>take away</em> es pu&shy;ra&shy;men&shy;te
                        per&shy;so&shy;nal, llá&shy;me&shy;nos o ven&shy;ga al lo&shy;cal y le aten&shy;de&shy;re&shy;mos
                        en&shy;can&shy;ta&shy;dos.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="footer" class="container">
        <div class="row py-2">
            <div id="nosotros" class="col-12 col-md-5">
            <div class="row">
                <p class="nosotros static">Síguenos:</p>
            </div>
            <div class="row">
                <div class="main center">
                <div class="box">
                    <a
                    class="icon-box center"
                    href="https://www.instagram.com/barespanapuebla/"
                    target="_blank"
                    ></a>
                    <a
                    href="https://www.instagram.com/barespanapuebla/"
                    target="_blank"
                    >
                    <div class="inner-box center">
                        <p class="caja">Instagram</p>
                    </div>
                    </a>
                </div>
                <div class="box">
                    <a
                    class="icon-box center ib-f"
                    href="https://www.facebook.com/pages/category/BarCafe-Bar-Espa%C3%B1a-Puebla-809729442528464/"
                    target="_blank"
                    ></a>
                    <a
                    href="https://www.facebook.com/pages/category/BarCafe-Bar-Espa%C3%B1a-Puebla-809729442528464/"
                    target="_blank"
                    >
                    <div class="inner-box center">
                        <p class="caja">Facebook</p>
                    </div>
                    </a>
                </div>
                </div>
            </div>
            <div class="row">
                <a
                class="nosotros"
                href="javascript:void(0)"
                onclick="conocenos()"
                >
                <p class="nosotros">Conócenos</p>
                </a>
            </div>
            </div>
            <div class="col-0 col-md-2"></div>
            <div id="datos" class="col-12 col-md-5">
            <p class="info static">Dirección:</p>
            <p class="valor static">
                C/Arrabal, 33, 49300 - Puebla de Sanabria
            </p>
            <p class="info static">Teléfono:</p>
            <p class="valor static">980620554</p>
            </div>
        </div>
        </div>
    </footer>
    <h3>Nota: Esta sección sigue en desarrollo</h3>
</body>
</html>
