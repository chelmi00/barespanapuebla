<?php
    $nombre = $_REQUEST["nombre"];
    $apellidos = $_REQUEST["apellidos"];
    $numero = $_REQUEST["numero"];
    $email = $_REQUEST["email"];
    $suge = $_REQUEST["suge"];

    require_once "conexion.php";

    $sql_insert = "INSERT INTO Sugerencias (nombre, apellidos, telefono, email, mensaje) " . " VALUES (:nombre, :apellidos, :telefono, :email, :mensaje)";

    try {
    $sentencia = $db->prepare($sql_insert);
    $sentencia->execute(array(
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'telefono' => $numero,
        'email' => $email,
        'mensaje' => $suge)
    );
        //echo "Insertado";
    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage());
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
    <title>Sugerencias</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/"/>

    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet" />
    <link href="baresp.css" rel="stylesheet" />
    <link href="navbar.css" rel="stylesheet" />
    <link href="footer.css" rel="stylesheet" />
    <link href="popup-y-conocenos.css" rel="stylesheet" />

    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="baresp.js"></script>

    <link href="src/icon.png" rel="icon" style="object-fit: scale-down" />
</head>

<body class="sugerencias">

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

    <main class="container">
        <div class="container letra">
            <div class="row">
                <div class="col-md-4">
                    <h2>Sugerencias</h2>
                </div>
                <div class="col-md-4"></div>
                <div class="d-none d-md-block col-md-4">
                    <a href="javascript:void(0)" onclick="conocenos()"><h2 class="dere">Conócenos</h2></a>
                </div>
            </div>
        </div>

        <div class="sug letra">
            <p>A pe&shy;sar de siem&shy;pre ha&shy;cer&shy;lo lo me&shy;jor po&shy;si&shy;ble, es&shy;ta&shy;mos
                dis&shy;pues&shy;tos a me&shy;jo&shy;rar. Por ello, tie&shy;ne la op&shy;ción de de&shy;jar&shy;nos
                al&shy;gu&shy;na re&shy;co&shy;men&shy;da&shy;ción o su&shy;ge&shy;ren&shy;cia, re&shy;lle&shy;nan&shy;do el si&shy;guien&shy;te
                for&shy;mu&shy;la&shy;rio.</p>
        </div>

        <form id="myform" class="letra" method="GET" action="javascript:" onsubmit="enviar()">
            <fieldset>
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="col-12 col-md-2 izq">
                            <label>Nombre</label>
                        </div>
                        <div class="col-12">
                            <input type="text" name="nombre" placeholder="Introduzca su nombre" >
                        </div>
                    </div>
                    <div class="col-12 col-md-2"></div>
                    <div class="col-12 col-md-5">
                        <div class="col-12 col-md-2 dere">
                            <label>Apellidos</label>
                        </div>
                        <div class="col-12">
                            <input type="text" name="apellidos" placeholder="Introduzca sus apellidos" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="col-12 col-md-2 izq">
                            <label>Teléfono</label>
                        </div>
                        <div class="col-12">
                            <input type="tel" name="numero" placeholder="Introduzca su número de teléfono" >
                        </div>
                    </div>
                    <div class="col-12 col-md-2"></div>
                    <div class="col-12 col-md-5">
                        <div class="col-12 col-md-2 dere">
                            <label>Email</label>
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" placeholder="Introduzca su correo electrónico" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>
                            <textarea rows="4" name="suge" placeholder="Escriba su sugerencia" size="15px" ></textarea>
                        </p>
                    </div>
                </div>
                <div class="row" id="sub">
                    <div class="col-6" href="">
                        <input type="submit" value="Enviar" id="envio">
                    </div>
                    <div class="col-6" href="">
                        <input type="reset" value="Restablecer">
                    </div>
                </div>
            </fieldset>
        </form>
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

    <div id="popup" class="modal">
        <div class="modal-content container">
            <span class="cerrar" onclick="">&times;</span>
            <div class="texto">
                <h3>Sugerencia Registrada</h3>
                <?php
                    echo "
                        <p>$nombre $apellidos, cuyo número de teléfono es $numero y cuyo email es $email, sugiere:</p>
                        <p>$suge</p>
                    ";
                ?>
            </div>
        </div>
    </div>

</body>
</html>