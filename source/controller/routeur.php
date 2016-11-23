<?php

if ((isset($_GET["action"])) != false) {
    $action = $_GET["action"];
}else{
    $action = "readAll";
}
require_once File::build_path(array("controller", "ControllerProduits.php"));
ControllerProduits::$action(); // Appel de la méthode statique $action de ControllerVoiture
?>
