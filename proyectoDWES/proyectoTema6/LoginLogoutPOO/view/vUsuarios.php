<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="volver" style="width: 100px;" class="btn-menu btn btn-secondary" value="Volver">

    <div class="contenedor"><br><br>
        <h4>Gestión de departamentos</h4>

        <table id="gestDept"border="1" style="text-align: center;">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Alta/Baja</th>
                    <th>Visualizar</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
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
                    if ($aDepartamentosVista[$i][3] == null) {
                        echo '<td><a href="'.$_SERVER['PHP_SELF'].'?bajaCodDept='.$aDepartamentosVista[$i][0].'"><img src="webroot/images/baja.png" alt="Baja"></a></td>';
                    } else {
                        echo '<td><a href="'.$_SERVER['PHP_SELF'].'?altaCodDept='.$aDepartamentosVista[$i][0].'"><img src="webroot/images/alta.png" alt="Alta"></a></td>';
                    }

                    echo '<td><a href="'.$_SERVER['PHP_SELF'].'?visualizarCodDept='.$aDepartamentosVista[$i][0].'"><img src="webroot/images/view.png" alt="Ver"></a></td>';
                    
                    echo '<td><a href="'.$_SERVER['PHP_SELF'].'?modificarCodDept='.$aDepartamentosVista[$i][0].'"><img src="webroot/images/pencil.png" alt="Modificar"></a></td>';
                    
                    echo '<td><a href="'.$_SERVER['PHP_SELF'].'?borrarCodDept='.$aDepartamentosVista[$i][0].'"><img src="webroot/images/cross.png" alt="Borrar"></a></td>';
                    
                    
                    echo '</tr>';
                }
                ?>
            <img src="" alt="">
            </tbody>
        </table>

    </div>

</div>

</form>