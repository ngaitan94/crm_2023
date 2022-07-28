<?php

require_once './includes/header.php';
require_once './includes/top-header.php';
require_once './includes/navbar.php';



$activePage = $_GET["page"];
switch($activePage) {
    case "inicio":
        require_once './templates/inicio.php';
        break;

    case "buscar":
        require_once './templates/buscar.php';
        break;
    
    case "crear":
        require_once './templates/nuevo.php';
        break;

    case "enviar":
        require_once './templates/correos.php';
        break;
    
    default:
        require_once './templates/inicio.php';
        break;
}


require_once './includes/footer.php';