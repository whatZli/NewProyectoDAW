<?php
require '../core/validacionFormulariosAlexDominguez.php';
require '../config/DBconf.php';


    $entradaOK = true;

//Declaración del array de errores
    $aErrores['codigo'] = null;
    $aErrores['descripcion'] = null;
    $aErrores['volumenNegocio'] = null;

//Declaración del array de datos del formulario
    $aFormulario['codigo'] = null;
    $aFormulario['descripcion'] = null;
    $aFormulario['volumenNegocio'] = null;
if (isset($_POST['enviar'])) {
    $codigo = strtoupper($_POST['codigo']);
    $aErrores['codigo'] = validacionFormularios::comprobarAlfabetico($_POST['codigo'], 3, 1, 1);
    if (!isset($_POST['descripcion']) || $_POST['descripcion'] == null) {
        $_POST['descripcion'] = 'Descripción '.$codigo;
    }
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfaNumerico($_POST['descripcion'], 255, 1, 1);
    if (!isset($_POST['volumenNegocio']) || $_POST['volumenNegocio'] == null) {
        $_POST['volumenNegocio'] = 1;
    }
    $aErrores['volumenNegocio'] = validacionFormularios::comprobarEntero($_POST['volumenNegocio'], PHP_INT_MAX, 1, 1);

    foreach ($aErrores as $campo) { //recorre el array en busca de mensajes de error
        if ($campo != null) {
            $entradaOK = false; //cambia la condiccion de la variable
        }
    }

    if ($entradaOK) { //si el valor es true procesamos los datos que hemos recogido 
        try {
            $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWD);
        } catch (Exception $e) {
            die("No se ha podido establecer la conexión:<br> " . $e->getMessage());
        }
        try {
            
            if ($codigo != NULL) {
                $sql = "INSERT INTO `Departamento` (`CodDepartamento`, `DescDepartamento`, `FechaBaja`, `VolumenNegocio`) VALUES (:codigo, :descripcion, NULL, :volumenNegocio);"; //Los : que van delante, es para indicar que sera una consulta preparada
                $stmt = $conn->prepare($sql);

                $stmt->bindParam(":codigo", $codigo);
                $stmt->bindParam(":descripcion", $_POST['descripcion']);
                $stmt->bindParam(":volumenNegocio", $_POST['volumenNegocio']);
                $stmt->execute();
                
            }
        } catch (Exception $e) {
            die("Error en la insercción de datos:<br> " . $e->getMessage());
        }
    }
}
?>
<head>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<?php require '../core/cabecera.php'; ?>
<h1>Añadir del Departamento</h1>

<form style="text-align: center;" action="<?php basename($_SERVER['PHP_SELF']) ?>" method="post">
    <label for="codigo">Codigo</label>
    <input type="text" name="codigo" maxlength="3" value="<?php if(isset($aErrores['codigo']) || $aErrores['codigo'] != null){echo $_POST['codigo'];}?>"><?php if($aErrores['codigo'] != null){echo '<div class="error">'.$aErrores['codigo'].'</div><br>';} ?><br>
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" value="<?php if(isset($aErrores['descripcion']) || $aErrores['descripcion'] != null){echo $_POST['descripcion'];}?>"><?php if($aErrores['descripcion'] != null){echo '<div class="error">'.$aErrores['descripcion'].'</div><br>';} ?><br>
    <label for="volumenNegocio">Volumen de Negocio</label>
    <input type="text" name="volumenNegocio" value="<?php if(isset($aErrores['volumenNegocio']) || $aErrores['volumenNegocio'] != null){echo $_POST['volumenNegocio'];}?>"><?php if($aErrores['volumenNegocio'] != null){echo '<div class="error">'.$aErrores['volumenNegocio'].'</div><br>';} ?><br>

    <input type="submit" name="enviar" value="Añadir" style="width: 100px;font-size: 20px;display:inline-block; margin:20px; background-color: #0D47A1; padding:10px; border-radius: 10px; color: white;">
    <div id="botonCancelar" style="display:inline-block; margin:20px; background-color: #78909C; padding:10px; border-radius: 10px;">
        <a href="../mtoDepartamentos.php"><h3>Volver</h3></a>
    </div>
</form>

</div>
<a href="../../../../../mtoDepartamentos.php">
    <footer>
        <address>
            &copy2019 Alex Dominguez
        </address>
    </footer>
</a>
</body>
</html> 



