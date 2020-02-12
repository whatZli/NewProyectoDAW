<div class="aside-left"></div>
<div class="content">
    <form name="logIn" action="<?php echo $_SERVER['PHP_SELF'] . "?pag=modifyUser&cod=" . $aUsuario[0] ?>" method="post" enctype="multipart/form-data">
        <fieldset> 
            <h2>Modify User</h2>
            <label for="codUser">Username</label>
            <input disabled type="text" name="codUser" id="codUser" value="<?php echo $aUsuario[0] ?>" placeholder="Your username">
            <label for="typeUser">Type user</label>
            <select name="typeUser" id="typeUser">
                <?php
                if ($aUsuario[1] === "admin") {
                    echo '<option value="admin" selected>Admin</option>';
                    echo '<option value="registrado">Register</option>';
                } else {
                    echo '<option value="admin" >Admin</option>';
                    echo '<option value="registrado" selected>Register</option>';
                }
                ?>
            </select>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $aUsuario[2] ?>" placeholder="Your name">
            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname" value="<?php echo $aUsuario[3] ?>" placeholder="Your last name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $aUsuario[4] ?>" placeholder="Your mail">

            <label for="provincia">Cod location</label>
            <input type="number" min="999" max="99999" name="provincia" id="provincia" value="" placeholder="Your cod location" onblur="provincias(this)" style="width: 150px; display: inline-block;">

            <div id="locateList" style="display:inline-block"></div>

            <input type="submit" name="btnModifyUser" value="Modify user">
        </fieldset>
    </form>
</div> 
<div class="aside-right">
    <h2>Menu</h2>
    <nav>
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>"> <li>Back to Management</li></a>
    </nav>
</div>