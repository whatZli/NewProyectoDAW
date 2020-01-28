<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="salir" class="btn-menu btn btn-warning" value="Cerrar Sesión"> 
    <?php if ($aDatosUsuarioVista['perfil'] == "usuario") { ?>
        <input type="submit" name="perfil" class="btn-menu btn btn-secondary" value="Perfil">
    <?php } ?>




    <div class="contenedor"><br><br>

        
        <?php if ($aDatosUsuarioVista['perfil'] == "usuario") { ?>
            <div class="espacioDepartamentos">
                <table border="1" style="text-align: center;">
                    <caption>Visualización de los departamentos</caption>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Volumen de negocio</th>
                            <th>Fecha de baja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; isset($aDepartamentosVista[$i]); $i++) {
                            if ($aDepartamentosVista[$i][3] != null) {
                                echo '<tr class="baja">';
                            } else {
                                echo '<tr class="alta">';
                            }
                            echo '<td>' . $aDepartamentosVista[$i][0] . '</td>';
                            echo '<td>' . $aDepartamentosVista[$i][1] . '</td>';
                            if ($aDepartamentosVista[$i][2] != null) {
                                echo '<td>' . $aDepartamentosVista[$i][2] . '</td>';
                            } else {
                                echo '<td>-</td>';
                            }

                            echo '<td>' . $aDepartamentosVista[$i][3] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <div class="espacioUsuarios">
                <table border="1" style="text-align: center;">
                    <caption>Visualización de los usuarios</caption>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Nº de accesos</th>
                            <th>Última conexión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; isset($aUsuariosVista[$i]); $i++) {
                            echo '<tr>';
                            echo '<td>' . $aUsuariosVista[$i][0] . '</td>';
                            echo '<td>' . $aUsuariosVista[$i][1] . '</td>';
                            echo '<td>' . $aUsuariosVista[$i][2] . '</td>';
                            echo '<td>' . $aUsuariosVista[$i][3] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>

        <div class="cuadro">
            <caption>Hola <?php echo ucfirst($aDatosUsuarioVista['descUsuario']) ?>.</caption>
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