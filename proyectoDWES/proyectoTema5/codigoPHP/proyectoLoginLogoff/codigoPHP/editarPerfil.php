<?php
session_start();
if (!isset($_SESSION["usuarioDAW205AppLogInLogOut"])) {
    header('Location: login.php');
}
if (isset($_POST['volver'])) {
    header('Location: programa.php');
}
if (isset($_POST['cambiarPassword'])) {
    header('Location: cambiarPassword.php');
}
if (isset($_POST['guardar'])) {
    require '../core/libreriaValidacionFormularios.php';
    //Declaración de variables
    $entradaOK = true;

//Declaración del array de errores
    $aErrores['descUser'] = null;

//Declaración del array de datos del formulario
    $aFormulario['descUser'] = null;

    $aErrores['descUser'] = validacionFormularios::comprobarAlfabetico($_POST['descUsuario'], 250, 1, 1);

    foreach ($aErrores as $campo) { //recorre el array en busca de mensajes de error
        if ($campo != null) {
            $entradaOK = false; //cambia la condiccion de la variable
        }
    }

    if ($entradaOK) { //si el valor es true procesamos los datos que hemos recogido   
        $aFormulario['descUser'] = $_POST['descUsuario']; //en el array del formulario guardamos los datos

        require '../config/conexion.php';
        try {
            $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exc) {
            echo "Error: $exc->getMessage() <br>";
            echo "Codigo del error: $exc->getCode() <br>";
        }
        try {
            $sql = "UPDATE `Usuario` SET `DescUsuario`=:descUser where `CodUsuario`=:codUser";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":codUser", $_SESSION['usuarioDAW205AppLogInLogOut']);
            $stmt->bindParam(":descUser", $aFormulario['descUser']);
            $stmt->execute();

            $_SESSION["descripcionDAW205AppLogInLogOut"]=$aFormulario['descUser'];
            header('Location: programa.php');
        } catch (PDOException $exc) {
            echo "Error: " . $exc->getMessage();
            echo "<br>Codigo del error: " . $exc->getCode();
            if ($exc->getCode() === "23000") {
                $aErrores['codUserDuplicado'] = "Ya existe este usuario";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Alex Dominguez Dominguez"/>
        <meta name="generator" content="notepad++"/>
        <meta name="robots" content="index, follow">
        <link rel="shortcut icon" type="image/png" href="../../core/images/favicon.png"/>
        <link href="css/reset.css"   rel="stylesheet"         type="text/css" >
        <title>Alex Dominguez</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../webroot/css/style.css"  rel="stylesheet"         type="text/css" title="Default style">
        <style>
            input,label{
                float:left;
            }
            .form-control{
                width: 70%;
                float: right;
            }
            input[type='submit']{
                margin: 10px;
                float:right;
            }
            #content{
                background: linear-gradient(to right,  hsl(211, 20%, 30%, 85%), hsl(211, 40%, 30%, 45%), hsl(211, 100%, 30% , 20%));
                width:650px;
                height: 500px;
                margin: auto;
                margin-top: 200px;
                padding: 50px;
                border-radius: 10px;
                color:white;
            }
        </style>
    </head>
    <body >
        <div id="topBar">Proyecto LogIn-LogOut</div>
        <div id="content">
            <?php if ($_COOKIE['idioma'] == "cas") {
                ?><h1>Edita tu perfil</h1>
            <?php } else if ($_COOKIE['idioma'] == "eng") { ?>
                <h1>Edit your profile</h1>
            <?php } ?>
            <form action="<?php echo 'editarPerfil.php' ?>" method="post">
                <div class="form-group">
                    <label for="loginUsuario">Usuario</label>
                    <input disabled type="text" name="loginUsuario" class="form-control" id="loginUsuario" aria-describedby="loginUsuario" value="<?php echo $_SESSION['usuarioDAW205AppLogInLogOut']; ?>">
                </div><br>
                <div class="form-group">
                    <label for="descUsuario">Descripción</label>
                    <input type="text" name="descUsuario" class="form-control" id="descUsuario" aria-describedby="loginUsuario" value="<?php echo $_SESSION['descripcionDAW205AppLogInLogOut']; ?>">
                </div><br>
                <div class="form-group">
                    <label for="sel1">Perfil</label>
                    <select disabled name="perfil" class="form-control" id="sel1">
                        <option value="<?php echo $_SESSION['perfilDAW205AppLogInLogOut']; ?>"><?php echo $_SESSION['perfilDAW205AppLogInLogOut']; ?></option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="numConUsuario">Veces conectado</label>
                    <input disabled type="text" name="numConUsuario" class="form-control" id="numConUsuario" aria-describedby="numConUsuario" value="<?php echo $_SESSION['numConexiónDAW205AppLogInLogOut']; ?>">
                </div><br>
                <div class="form-group">
                    <label for="uConexion">Conexión anterior</label>
                    <input disabled type="text" name="uConexion" class="form-control" id="uConexion" aria-describedby="uConexion" value="<?php echo $_SESSION['uConexiónDAW205AppLogInLogOut']; ?>">
                </div><br>
                <input type="submit" name="guardar" class="btn btn-primary" value="Guardar">
                <input type="submit" name="cambiarPassword" class="btn btn-secondary" value="Cambiar Password">
                <input type="submit" name="volver" class="btn btn-secondary" value="Volver">
                
            </form>
        </div>
    </body>
    <footer>
        <address>
            <a href="../../indexProyectoTema5.html">&copy2019 Alex Dominguez</a>
            <a href="http://daw-usgit.sauces.local/Alex/proyectoLogInLogOff/tree/master" target="_blank"><img src="../images/gitlab.png" alt="asd" width="40" style="float:right;"/></a>
        </address>
    </footer>
</body>
</html>