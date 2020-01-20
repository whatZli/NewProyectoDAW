<!---------------------MENU------------------------>
<div class="menu">
    <ul>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?pag=main";?>" <?php if(!isset($_GET['pag']) || $_GET['pag']==='main'){echo 'class="menu-active"';}?>>Home</a></li>
        <li id="mdwes"><a  href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwes"; ?>" <?php if(isset($_GET['pag']) && $_GET['pag']==='dwes'){echo 'class="menu-active"';}?>>DWES</a>
            <ul class="dropdown-1">
                <li><a href="#">Tema 1 (PDF)</a></li>
                <li><a href="#">Tema 2 (PDF)</a></li>
                <li><a href="#">Tema 3</a></li>
                <li><a href="#">Tema 4</a></li>
                <li><a href="#">Tema 5</a>
                    <ul class="dropdown-2">
                        <li><a href="#">Mostrar variables superglobales</a></li>
                        <li><a href="#">Control de acceso con header()</a></li>
                        <li><a href="#">Control de acceso header() + BD</a></li>
                        <li><a href="#">LogIn-LogOut</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li id="mdwec"><a  href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec"; ?>" <?php if(isset($_GET['pag']) && $_GET['pag']==='dwec'){echo 'class="menu-active"';}?>>DWEC</a>
            <ul class="dropdown-1"> 
                <li><a href="#">Tema 1. Navegadores y repaso HTML/CSS</a></li>
                <li><a href="#">Tema 2. Tipos de datos y bucles</a></li>
                <li><a href="#">Tema 3. Clases</a></li>
                <li><a href="#">Tema 4. Formularios</a></li>
                <li><a href="#">Tema 5. DOM</a></li>
            </ul>
        </li>
        <li id="mdiw"><a  href="<?php echo $_SERVER['PHP_SELF'] . "?pag=diw"; ?>" <?php if(isset($_GET['pag']) && $_GET['pag']==='diw'){echo 'class="menu-active"';}?>>DIW</a>
            <ul class="dropdown-1">
                <li><a href="#">Tema 1</a>
                    <ul class="dropdown-2">
                        <li><a href="#">PR-1-1-1 <br>Color</a></li>
                        <li><a href="#">PR-1-1-2 <br>Complementario</a></li>
                        <li><a href="#">PR-1-2-1 <br>Tipografía</a></li>
                        <li><a href="#">PR-1-3-1 <br>Wireframe</a></li>
                        <li><a href="#">PR-1-4-1 <br>Guía de estilo</a></li>
                        <li><a href="#">PR-1-4-2 <br>Prototipo</a></li>
                    </ul>
                </li>
                <li><a href="#">Tema 2</a>
                    <ul class="dropdown-2">
                        <li><a href="#">PR-2-1 <br>HTML5</a></li>
                        <li><a href="#">PR-2-2 <br>Selectores Bas.</a></li>
                        <li><a href="#">PR-2-3 <br>Selectores Ava.</a></li>
                        <li><a href="#">PR-2-4</a></li>
                        <li><a href="#">PR-2-5 <br>Pseudo elementos</a></li>
                        <li><a href="#">PR-2-6 <br>Cajas</a></li>
                        <li><a href="#">PR-2-7</a></li>
                        <li><a href="#">PR-2-8</a></li>
                        <li><a href="#">PR-2-9-1 <br>FlexBox I</a></li>
                        <li><a href="#">PR-2-9-2 <br>FlexBox II</a></li>
                        <li><a href="#">PR-2-10-1 <br>Transiciones I</a></li>
                        <li><a href="#">PR-2-10-2 <br>Transiciones II</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li id="mdaw"><a  href="<?php echo $_SERVER['PHP_SELF']."?pag=daw";?>" <?php if(isset($_GET['pag']) && $_GET['pag']==='daw'){echo 'class="menu-active"';}?>>DAW</a>
            <ul class="dropdown-1">
                <li><a href="proyectoDAW/doc/tema1.pdf" target="_blank">Conceptos (PDF)</a></li>
                <li><a href="proyectoDAW/doc/tema2.pdf" target="_blank">Documentación (PDF)</a></li>
                <li><a href="proyectoDAW/doc/tema3.pdf" target="_blank">FTP y SFTP (PDF)</a></li>
                <li><a href="proyectoDAW/doc/tema4.pdf" target="_blank">GIT (PDF)</a></li>
            </ul>
        </li>
    </ul>
</div>
<span id="btn-overlay-nav" onclick="openNav()">&#9776; DAW</span>
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="<?php echo $_SERVER['PHP_SELF']."?pag=main";?>">HOME</a>
        <a href="<?php echo $_SERVER['PHP_SELF']."?pag=dwes";?>">DWES</a>
        <a href="<?php echo $_SERVER['PHP_SELF']."?pag=dwec";?>">DWEC</a>
        <a href="<?php echo $_SERVER['PHP_SELF']."?pag=diw";?>">DIW</a>
        <a href="<?php echo $_SERVER['PHP_SELF']."?pag=daw";?>">DAW</a>
    </div>
</div>
