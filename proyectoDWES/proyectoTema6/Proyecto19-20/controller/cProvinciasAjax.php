<?php

if (isset($_GET['cod'])) {
    $cod = ($_GET['cod']);
    $con = mysqli_connect('192.168.20.19', 'userDAW2051920', 'paso', 'DAW2051920');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "ajax_demo");
    $sql = "SELECT * FROM `Provincias` WHERE `Id_Provincia` LIKE '$cod'";
    $result = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_array($result)) {
        echo '<input type="text" disabled value="'.$row['Provincia'].'"></input>';
//        echo "<a href='index.php?pag=article&cod=".$row['cod_articulo']."'>".$row['titulo_articulo']."</a><br>";
    }
    
    mysqli_close($con);
}


