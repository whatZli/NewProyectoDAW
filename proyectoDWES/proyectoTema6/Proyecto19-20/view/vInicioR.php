<div class="aside-left"></div>
<div class="content">
    <h1>Article Management</h1>
    <?php
    for ($i = 0; isset($aArticulo[$i]); $i++) {
        echo '<div class="articulo">';
            echo '<img src="storage/img_articles/'.$aArticulo[$i][3].'" alt="imagen">';
            echo '<h2>'.$aArticulo[$i][1].'</h2>';
            echo '<h6>Date creation: '.$aArticulo[$i][4].'</h6>';
            echo '<h6>Creator: '.$aArticulo[$i][6].'</h6>';
            echo '<div class="controlers">';
            echo '<a href="'.$_SERVER['PHP_SELF']."?pag=modifyArticle&cod=".$aArticulo[$i][0].'">Modify</a>';
            echo '<a href="'.$_SERVER['PHP_SELF']."?drop=".$aArticulo[$i][0].'">Drop</a>';
            echo '</div>';
//              echo $aArticulo[$i][0];
//            echo $aArticulo[$i][1];
//            echo $aArticulo[$i][2];
//            echo $aArticulo[$i][3];
//            echo $aArticulo[$i][4];
//            echo $aArticulo[$i][5];
//            echo $aArticulo[$i][6];
        echo '</div>';
    }
    ?>
</div> 
<div class="aside-right">
    <h2>Menu</h2>
    <nav>
        <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=newArticle" ?>"> <li>Create new article</li></a>
        <a href="<?php echo $_SERVER['PHP_SELF'] . "?profile=true" ?>"> <li>Change profile</li></a>
        <a href="<?php echo $_SERVER['PHP_SELF'] . "?close=true" ?>"><li>Log out</li></a>
    </nav>
</div>