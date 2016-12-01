<?php

if ((isset($_GET["action"])) != false) {
    $action = $_GET["action"];
}else{
    $action = "readAll";
}
require_once File::build_path(array("controller", "ControllerProduits.php"));
$class_methods = get_class_methods('ControllerProduits');
if (in_array($action, $class_methods)) {
    ControllerProduits::$action(); // Appel de la méthode statique $action de ControllerVoiture
}else{
    $pagetitle = "Error";
    $controller = "figurines";
    $view = "error";
    require_once File::build_path(array("view", "view.php"));
}

?>
