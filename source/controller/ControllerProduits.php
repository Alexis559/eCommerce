<?php
    require_once ('../model/ModelProduis.php');
    
    class ControllerProduits {
        
        public static function readAll() {
            $tabe_p= Model::getAllProduits();
            require_once File::build_path(array('view','Produits','Produits.php'));
        }
    }
?>

