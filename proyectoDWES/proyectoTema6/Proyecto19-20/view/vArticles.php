<div class="search">
    <form action="<?php echo $_SERVER['PHP_SELF'] . "?pag=articles" ?>" name="formSearch" method="POST" autocomplete="off">
        <input type="text" name="title" placeholder="Search title of mount" onkeydown="showUser(this.value)"onkeyup="showUser(this.value)">
        <input type="submit" name="search" value="Search">
    </form>
    <div id="articlesList">

    </div>
</div>
<?php
if (!isset($aArticulo)) {
    echo '<div class="errores">There is no result for your search</div> ';
}
?>
<?php for ($i = 0; isset($aArticulo[$i]); $i++) { ?>
    <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=article&cod=" . $aArticulo[$i][0] ?>">
        <div class="article">
            <div class="image">
                <img src="storage/img_articles/<?php echo $aArticulo[$i][3]; ?>" alt="art">
            </div>
            <div class="text">
                <div class="title"><?php echo $aArticulo[$i][1]; ?></div>
                <div class="description">
                    <?php echo $aArticulo[$i][2]; ?>
                </div>
                <div class="readMore">
                    <p>Read more</p>
                </div>
            </div>
        </div>
    </a>
    <?php
//              echo $aArticulo[$i][0];
//            echo $aArticulo[$i][1];
//            echo $aArticulo[$i][2];
//            echo $aArticulo[$i][3];
//            echo $aArticulo[$i][4];
//            echo $aArticulo[$i][5];
//            echo $aArticulo[$i][6];
}
//echo $numeroPaginas;
//?>
<div class="pagination">
    <?php
//    echo '<a href="#">&laquo;</a>';
//    for ($i = 1; $i <= $numeroPaginas/3+1; $i++) {
//        if ($pagina === $i) {
//            echo '<a class="active" href="#">' . $i . '</a>';
//        } else {
//            echo '<a href="#">' . $i . '</a>';
//        }
//    }
//    echo '<a href="#">&raquo;</a>';
//    ?>
</div>

