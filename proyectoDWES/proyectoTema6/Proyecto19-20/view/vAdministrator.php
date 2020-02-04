<form name="formLogin" action="<?php echo $_SERVER['PHP_SELF']."?pag=administrator" ?>" method="POST">
    <fieldset> 
    <h2>Login</h2>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" placeholder="Your username">
        <label for="subject">Password</label>
        <input type="password" name="password" id="password" value="" placeholder="Your password">
        <input type="submit" name="logIn" value="Login">
    </fieldset>
</form>