<div style="float:left;">
    <h6>Cuenta de administrador<br> de usuarios:</h6>
    <p>admin/paso</p>
    <h6>Cuenta de editor<br> de artículos:</h6>
    <p>usuario1/paso</p>
</div>


<form name="formLogin" action="<?php echo $_SERVER['PHP_SELF'] . "?pag=administrator" ?>" method="POST">
    <fieldset> 
        <h2>Login</h2>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" placeholder="Your username">
        <label for="subject">Password</label>
        <input type="password" name="password" id="password" value="" placeholder="Your password">
        <input type="submit" name="logIn" value="Login">
    </fieldset>
</form>