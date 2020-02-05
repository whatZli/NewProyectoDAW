<?php

if (isset($_GET['a'])) {

    $a = ($_GET['a']);

    $con = mysqli_connect('192.168.20.19', 'userDAW2051920', 'paso', 'DAW2051920');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "ajax_demo");
    $sql = "SELECT * FROM `articulos` WHERE `titulo_articulo` LIKE '%$a%'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<a href='index.php?pag=article&cod=".$row['cod_articulo']."'>".$row['titulo_articulo']."</a><br>";
    }
    mysqli_close($con);
}


