<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="salir" class="btn-menu btn btn-warning" value="Cerrar Sesión"> 
    <?php if ($aDatosUsuarioVista['perfil'] == "usuario") { ?>
        <input type="submit" name="perfil" class="btn-menu btn btn-secondary" value="Perfil">
    <?php } ?>




    <div class="contenedor"><br><br>

        <h4>Hola <?php echo ucfirst($aDatosUsuarioVista['descUsuario']) ?>. </h4>
        <?php if ($aDatosUsuarioVista['perfil'] == "usuario") { ?>
            <div class="espacioDepartamentos">
                Espacio para los departamentos
            </div>
        <?php } else { ?>
            <div class="espacioDepartamentos">
                Espacio para los usuarios
            </div>
        <?php } ?>

        <div class="cuadro">
            <table>
                <tr>
                    <th>Usuario</th>
                    <td><?php echo $aDatosUsuarioVista['codigo'] ?></td>
                </tr>
                <tr>
                    <th>Perfil</th>
                    <td> <?php echo $aDatosUsuarioVista['perfil'] ?></td>
                </tr>
                <tr>
                    <th>Nº conexiones</th>
                    <td> <?php echo $aDatosUsuarioVista['contadorAccesos'] ?></td>
                </tr>
                <?php if ($aDatosUsuarioVista['contadorAccesos'] != 1) { ?>
                    <tr>
                        <th>Última conexión</th>
                        <td><?php echo $aDatosUsuarioVista['ultimaConexion']; ?></td>
                    </tr>
                <?php } ?>
            </table>
            <?php if ($aDatosUsuarioVista['perfil'] == "usuario") { ?>
                <input style="width: 100%; margin-top: 10px;"type="submit" name="gestionDept" class="btn-menu btn btn-secondary" value="Gestión de departamentos">
            <?php } else { ?>
                <input style="width: 100%; margin-top: 10px;"type="submit" name="gestionUsu" class="btn-menu btn btn-secondary" value="Gestión de usuarios">
            <?php } ?>
        </div>


    </div>

</form>