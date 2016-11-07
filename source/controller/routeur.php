<?php
require_once File::build_path(array("controller", "ControllerProduits.php"));
$action = $_GET['action'];    // recupère l'action passée dans l'URL
ControllerProduits::$action(); // Appel de la méthode statique $action de ControllerVoiture
?>
