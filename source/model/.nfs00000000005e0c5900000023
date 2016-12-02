<?php

require_once File::build_path(array("model", "Model.php"));

class ModelClients {

    private $numClient;
    private $nomClient;
    private $prenomClient;
    private $mail;
    private $adresse;
    private $telephone;
    private $dateNaissance;
    private $sexe;
    private $login;
    private $mdp;
    private $isAdmin;
    
    function getIsAdmin() {
        return $this->isAdmin;
    }
    
    function getNumClient(){
        return $this->numClient;
    }
            
    function getNomClient() {
        return $this->nomClient;
    }

    function getPrenomClient() {
        return $this->prenomClient;
    }

    function getMail() {
        return $this->mail;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getLogin() {
        return $this->login;
    }

    function getMdp() {
        return $this->mdp;
    }
    
    function setIsAdmin($isAdmin){
        $this->isAdmin = $isAdmin;
    }

    function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
    }

    function setPrenomClient($prenomClient) {
        $this->prenomClient = $prenomClient;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }
    

    //constructeur
    function __construct($nomClient = NULL, $prenomClient = NULL, $mail = NULL, $adresse = NULL, $telephone = NULL, $dateNaissance = NULL, $sexe = NULL, $login = NULL, $mdp = NULL, $isAdmin = NULL) {
        
        if (!is_null($nomClient) && !is_null($prenomClient) && !is_null($mail) && !is_null($adresse) && !is_null($telephone) && !is_null($dateNaissance) && !is_null($sexe) && !is_null($login) && !is_null($mdp) && !is_null($isAdmin)) {
            $this->nomClient = $nomClient;
            $this->prenomClient = $prenomClient;
            $this->mail = $mail;
            $this->adresse = $adresse;
            $this->telephone = $telephone;
            $this->dateNaissance = $dateNaissance;
            $this->sexe = $sexe;
            $this->login = $login;
            $this->mdp = $mdp;
            $this->isAdmin = $isAdmin;
        }
    }
    
    static public function getAllClients() {
        try {
            $rep = Model::$pdo->query('SELECT * FROM Clients');
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelClients');
            $tab_cl = $rep->fetchAll();
            return $tab_cl;
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ method getAllClients() /!\ )');
        }
    }
    
    static public function getClientByNum($numClient) {
        $sql = "SELECT * from Clients WHERE numClient=:num_client";
        try {
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "num_client" => $numClient,
                    //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête	 
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelClients');
            $tab_cl = $req_prep->fetchAll();
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ method getClientByNum() /!\ )');
        }

        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_cl)) {
            return false;
        }

        return $tab_cl[0];
    }
    
    public function save() {
       $sql = "INSERT INTO Clients (nom, prenom, mail, adresse, telephone, dateNaissance, sexe, login, mdp, isAdmin) VALUES (:nom_tag, :pre_tag, :mail_tag, :adr_tag, :tel_tag, :age_tag, :sex_tag, :log_tag, :mdp_tag, :isA_tag)";
        try {
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                "nom_tag" => $this->getNomClient(),
                "pre_tag" => $this->getPrenomClient(),
                "mail_tag" => $this->getMail(),
                "adr_tag" => $this->getAdresse(),
                "tel_tag" => $this->getTelephone(),
                "age_tag" => $this->getDateNaissance(),
                "sex_tag" => $this->getSexe(),
                "log_tag" => $this->getLogin(),
                "mdp_tag" => $this->getMdp(),
                "isA_tag" => $this->getIsAdmin(),
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ methode save /!\ )');
        }
    }
    
    public function delete() {
        $sql = "DELETE FROM Clients WHERE Clients.numClient = :numCl_tag";
        try {
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                "numCl_tag" => $this->getNumClient(),
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            echo('Error tout casse ( /!\ method delete /!\ )');
        }
    }  

    
            
       
}

?>