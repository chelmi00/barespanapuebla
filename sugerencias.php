<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sugerencias</title>

    <link href="img/escudo.png" rel="icon" style="object-fit: scale-down;">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="baresp.css">

    <script src="baresp.js"></script>
</head>
<body>

<nav class="navbar">
    <a href="javascript:void(0)" onclick="inicio()">CAFE · BAR ESPAÑA</a>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Sugerencias</h2>
        </div>
        <div class="col-md-4"></div>
        <div class="hidden-xs hidden-sm col-md-4">
            <a href="javascript:void(0)" onclick="conocenos()"><h2>Conócenos</h2></a>
        </div>
    </div>
</div>

<div class="sug">
    <p>A pe&shy;sar de siem&shy;pre ha&shy;cer&shy;lo lo me&shy;jor po&shy;si&shy;ble, es&shy;ta&shy;mos
        dis&shy;pues&shy;tos a me&shy;jo&shy;rar. Por ello, tie&shy;ne la op&shy;ción de de&shy;jar&shy;nos
        al&shy;gu&shy;na re&shy;co&shy;men&shy;da&shy;ción o su&shy;ge&shy;ren&shy;cia, re&shy;lle&shy;nan&shy;do el si&shy;guien&shy;te
        for&shy;mu&shy;la&shy;rio.</p>
</div>

<form id="myform" method="GET" action="sugerencias.php">
    <fieldset>
        <div class="row">
            <div class="col-xs-12 col-md-5">
                <div class="col-xs-3 col-md-2">
                    <label>Nombre</label>
                </div>
                <div class="col-xs-9">
                    <input type="text" name="nombre" placeholder="Introduzca su nombre" required>
                </div>
            </div>
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-5">
                <div class="col-xs-3 col-md-2">
                    <label>Apellidos</label>
                </div>
                <div class="col-xs-9">
                    <input type="text" name="apellidos" placeholder="Introduzca sus apellidos" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-5">
                <div class="col-xs-3 col-md-2">
                    <label>Teléfono</label>
                </div>
                <div class="col-xs-9">
                    <input type="tel" name="numero" placeholder="Introduzca su número de teléfono" required>
                </div>
            </div>
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-5">
                <div class="col-xs-3 col-md-2">
                    <label>Email</label>
                </div>
                <div class="col-xs-9">
                    <input type="email" name="email" placeholder="Introduzca su correo electrónico" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p>
                    <textarea rows="4" name="suge" placeholder="Escriba su sugerencia" size="15px" required></textarea>
                </p>
            </div>
        </div>
        <div class="row" id="sub">
            <div class="col-xs-6" href="">
                <input type="submit" value="Enviar" id="envio">
            </div>
            <div class="col-xs-6" href="">
                <input type="reset" value="Restablecer">
            </div>
        </div>
    </fieldset>
</form>

<footer class="container">
    <div class="row">
        <div id="nosotros" class="col-xs-12 col-md-5">
            <div class="row">
                <p>Síguenos:</p>
            </div>
            <div class="row">
                <div class="main center">
                    <div class="box">
                        <a class="icon-box center" href="https://www.instagram.com/barespanapuebla/" target="_blank">
                            <i class="fab fa-instagram fa-3x"></i>
                        </a>
                        <a href="https://www.instagram.com/barespanapuebla/" target="_blank">
                            <div class="inner-box center"><p>Instagram</p></div>
                        </a>
                    </div>
                    <div class="box">
                        <a class="icon-box center ib-f" href="https://www.facebook.com/pages/category/Bar/Cafe-Bar-Espa%C3%B1a-Puebla-809729442528464/" target="_blank">
                            <i class="fab fa-facebook fa-3x"></i>
                        </a>
                        <a href="https://www.facebook.com/pages/category/Bar/Cafe-Bar-Espa%C3%B1a-Puebla-809729442528464/" target="_blank">
                            <div class="inner-box center"><p>Facebook</p></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="javascript:void(0)" onclick="conocenos()"><p>Conócenos</p></a>
            </div>
        </div>
        <div class="col-xs-0 col-md-2"></div>
        <div id="datos" class="col-xs-12 col-md-5">
            <p class="info">
                Dirección:
            </p>
            <p>
                C/Arrabal, 33, 49300 - Puebla de Sanabria
            </p>
            <p class="info">
                Teléfono:
            </p>
            <p>
                980620554
            </p>
        </div>
    </div>
</footer>

<div id="popup" class="modal">
    <div class="modal-content">
        <span class="cerrar">&times;</span>
        <div class="texto">
            <h3>Enviado</h3>
            <h3>Correctamente</h3>
            <?php
                $nombre = $_REQUEST["nombre"];
                $apellidos = $_REQUEST["apellidos"];
                $numero = $_REQUEST["numero"];
                $email = $_REQUEST["email"];
                echo "<p>$nombre $apellidos</p>";
            ?>
        </div>
    </div>
</div>

</body>
</html>