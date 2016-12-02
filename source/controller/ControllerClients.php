<?php
    // chargement du modèle
require_once File::build_path(array("model", "ModelClients.php"));
require_once File::build_path(array("lib", "Security.php"));

class ControllerClients {

    public static function readAll() {
        $tab_clients = ModelClients::getAllClients();     //appel au modèle pour gerer la BD
        $controller = "clients";
        $view = "listClients";
        $pagetitle = "Liste des clients";
        require File::build_path(array("view", "view.php")); //"redirige" vers la vue
    }
    
    public static function read() {
        $num = ModelClients::getClientByNum($_GET['numClient']);
        if ($num == false) {
            $controller = "clients";
            $view = "error";
            $pagetitle = "Erreur";
            require File::build_path(array("view", "view.php"));
        } else {
            $controller = "clients";
            $view = "detailClient";
            $pagetitle = "Détails clients";
            require File::build_path(array("view", "view.php"));
        }
    }
    
    public static function create() {
        $controller = "clients";
        $view = "createUser";
        $pagetitle = "Créer un compte";
        require File::build_path(array("view","view.php"));
    }
    
    public static function created() {
        $controller = "clients";
        $view = "created";
        $pagetitle = "Creation compte";
        //Verification mot de passe1 et mot de passe2 coincident si oui on chiffre et on envoie a la bdd
        if( strcmp ( $_POST['mdp'] , $_POST['mdpConf'] ) == 0 ){

           $mdp_crypt = Security::chiffrer($_POST['mdp']);
            if(strcmp ( $_POST['sexe'] , "homme" ) == 0){ //0 = homme et 1 = femme
                $client = new ModelClients($_POST['nomClient'], $_POST['prenomClient'], $_POST['mail'], $_POST['adresse'], $_POST['telephone'], $_POST['dateNaissance'], 0, $_POST['login'], $mdp_crypt, 0);
            }
           //$mdp_crypt = Security::chiffrer($_POST['mdp']);
            if(strcmp ( $_POST['sexe'] , "homme" ) == 0){ //0 = homme et 1 = femme
                $client = new ModelClients($_POST['nomClient'], $_POST['prenomClient'], $_POST['mail'], $_POST['adresse'], $_POST['telephone'], $_POST['dateNaissance'], 0, $_POST['login'], $_POST['mdp'], 0);

            }else{
                $client = new ModelClients($_POST['nomClient'], $_POST['prenomClient'], $_POST['mail'], $_POST['adresse'], $_POST['telephone'], $_POST['dateNaissance'], 1, $_POST['login'], $mdp_crypt, 0);
            }
            $client->save();
            $tab_clients = ModelClients::getAllClients();
            require File::build_path(array("view", "view.php"));
        }else{
            $view = "error";
            $pagetitle = "Erreur";
            require File::build_path(array("view", "view.php"));
        }       
    }
    
    public static function delete() {
        $client = ModelClients::getClientByNum($_GET['numClient']);
        $client->delete();
        $controller = "clients";
        $view = "deleted";
        $pagetitle = "Client supprimé";
        require File::build_path(array("view", "view.php"));
    }   
    
}    

?>

