<?php

class Controller{
    function __construct() {
        echo '<p>Controlador Base</p>';
        $this->view=new View();
    }
}