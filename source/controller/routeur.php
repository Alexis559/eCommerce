<?php
    require_once File::build_path(array("controller","ControllerProduits.php"));
    require_once File::build_path(array("controller","ControllerClients.php"));
    $action = "readAll";
    $controller = "produits";

    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    $controller_class = "Controller".ucfirst($controller);

    if(!class_exists($controller_class)) {
        $action = "readAll";
        $controller = "produits";
    }

    if(!in_array($action, get_class_methods($controller_class))) {
        $action = "readAll";
        $controller = "produits";
    }
    $controller_class::$action();
?>
