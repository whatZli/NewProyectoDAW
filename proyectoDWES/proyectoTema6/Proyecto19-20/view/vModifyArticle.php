
<div class="aside-left"></div>
<div class="content">
   <form name="logIn" action="<?php echo $_SERVER['PHP_SELF']."?pag=modifyArticle&cod=".$aArticulo[0] ?>" method="post" enctype="multipart/form-data">
        <fieldset> 
            <h2>New article</h2>
            <label for="name">Title</label>
            <input type="text" name="title" id="title" value="<?php echo $aArticulo[1];?>">
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Description"><?php echo $aArticulo[2];?></textarea>
            <label for="creator">Creator</label>
            <input disabled type="text" name="creator" id="creator" value="<?php echo $aArticulo[6];?>" >
            <label for="date">Creation date</label>
            <input disabled type="text" name="date" id="date" value="<?php echo $aArticulo[4];?>" >
            <label for="visited">Times visited</label>
            <input disabled type="text" name="visited" id="visited" value="<?php echo $aArticulo[5];?>" >
            <input type="submit" name="btnModifyArticle" value="Modify article">
        </fieldset>
    </form>
</div> 
<div class="aside-right">
    <h2>Menu</h2>
    <nav>
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>"> <li>Back to Management</li></a>
    </nav>
</div>