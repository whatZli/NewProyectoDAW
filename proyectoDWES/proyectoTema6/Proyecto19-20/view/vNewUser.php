<div class="aside-left"></div>
<div class="content">
   <form name="logIn" action="<?php echo $_SERVER['PHP_SELF']."?pag=newUser" ?>" method="post" enctype="multipart/form-data">
        <fieldset> 
            <h2>New User</h2>
            <label for="codUser">Username</label>
            <input type="text" name="codUser" id="codUser" value="" placeholder="Your username">
            <label for="typeUser">Type user</label>
            <select name="typeUser" id="typeUser">
                <option value="admin">Admin</option>
                <option value="registrado" selected>Register</option>
            </select>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="" placeholder="Your name">
            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname" value="" placeholder="Your last name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="" placeholder="Your mail">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" placeholder="">
            
            <label for="provincia">Cod location</label>
            <input type="number" min="999" max="99999" name="provincia" id="provincia" value="" placeholder="Your cod location" onblur="provincias(this)">
            
            <label for="image">Image</label>
            <input id="fileToUpload" type="file" name="fileToUpload" accept="image/*">
            <input type="submit" name="btnNewArticle" value="Create user">
        </fieldset>
    </form>
</div> 
<div class="aside-right">
    <h2>Menu</h2>
    <nav>
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>"> <li>Back to Management</li></a>
    </nav>
</div>