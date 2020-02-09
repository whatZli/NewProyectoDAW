<div class="aside-left"></div>
<div class="content">
    <h1>Users Management</h1>
    <?php
    for ($i = 0; isset($aUsuario[$i]); $i++) {
        echo '<div class="articulo">';
            echo '<img src="storage/img_users/'.$aUsuario[$i][6].'" alt="imagen">';
            echo '<h4>'.$aUsuario[$i][2].'</h4>';
//            echo '<h6>'.$aUsuario[$i][3].'</h6>';
//            echo '<h6>Email: '.$aUsuario[$i][4].'</h6>';
            echo '<div class="controlers">';
            echo '<a href="'.$_SERVER['PHP_SELF']."?pag=modifyUser&cod=".$aUsuario[$i][0].'">Modify</a>';
            echo '<a href="'.$_SERVER['PHP_SELF']."?drop=".$aUsuario[$i][0].'">Drop</a>';
            echo '</div>';
//              echo $aUsuario[$i][0];
//            echo $aUsuario[$i][1];
//            echo $aUsuario[$i][2];
//            echo $aUsuario[$i][3];
//            echo $aUsuario[$i][4];
//            echo $aUsuario[$i][5];
//            echo $aUsuario[$i][6];
        echo '</div>';
    }
//    ?>
</div> 
<div class="aside-right">
    <div class="perfil">
        <img src="storage/img_users/<?php echo $_SESSION['usuarioDAW2051920']->getImg_usuario();?>" alt="">
        <h4>Welcome <?php echo $_SESSION['usuarioDAW2051920']->getNom_usuario();?></h4>
    </div>
    
    <h2>Menu</h2>
    <nav>
        <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=newUser" ?>"> <li>Create new user</li></a>
        <a href="<?php echo $_SERVER['PHP_SELF'] . "?close=true" ?>"><li>Log out</li></a>
    </nav>
</div>