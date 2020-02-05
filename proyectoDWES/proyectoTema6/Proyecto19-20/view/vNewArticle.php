<div class="aside-left"></div>
<div class="content">
   <form name="logIn" action="<?php echo $_SERVER['PHP_SELF']."?create=true" ?>" method="POST">
        <fieldset> 
            <h2>New article</h2>
            <label for="name">Title</label>
            <input type="text" name="title" id="title" value="" placeholder="Title of article">
            <label for="description">Description</label>
            <textarea id="description" name="description" form="usrform" placeholder="Description"></textarea>
            <label for="image">Image</label>
            <input id="image" type="file" name="pic" accept="image/*">
            <input type="submit" name="send" value="Create article">
        </fieldset>
    </form>
</div> 
<div class="aside-right">
    <h2>Menu</h2>
    <nav>
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>"> <li>Back to Management</li></a>
    </nav>
</div>