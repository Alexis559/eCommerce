<?php
if ((isset($_GET["controller"])) != false) {
    $controller = $_GET["controller"];
}else{
    $controller = "produits";
}
$controller_class = "Controller".ucfirst($controller);
if ((isset($_GET["action"])) != false) {
    $action = $_GET["action"];
}else{
    $action = "readAll";
}
if( ! ( class_exists ( $controller_class ) ) ){
	$controller_class = "ControllerProduits";
}
require_once File::build_path(array("controller", "$controller_class.php"));
$class_methods = get_class_methods($controller_class);
if (in_array($action, $class_methods)) {
    $controller_class::$action(); // Appel de la méthode statique $action de ControllerVoiture
}else{
    $pagetitle = "Error";
    $controller = $controller_class;
    $view = "error";
    require_once File::build_path(array("view", "view.php"));
}

?>
