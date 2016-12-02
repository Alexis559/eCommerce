<?php

$nom = htmlspecialchars($client->getNomClient());
$prenom = htmlspecialchars($client->getPrenomClient());
$mail = htmlspecialchars($client->getMail());
$adresse = htmlspecialchars($client->getAdresse());
$telephone = htmlspecialchars($client->getTelephone());
$dateNaissance = htmlspecialchars($client->getDateNaissance());
if(($client->getSexe()) == 0){
	$sexe = "homme";
}else{
	$sexe = "femme";
}
$login = htmlspecialchars($client->getLogin());
$mdp = htmlspecialchars($client->getMdp());               
                
echo "Nom: " . $nom . "<br> Prénom: " . $prenom . "<br> Mail: " . $mail . " <br>Adresse: " . $adresse . " <br>Telephone: " . $telephone . " <br>Date de naissance: " . $dateNaissance . " <br>Sexe: " . $sexe . " <br>Login: " . $login . "<br>Mot de passe: " . $mdp;

//echo '<p><a href=http://infolimon.iutmontp.univ-montp2.fr/~sancheza/eCommerce/source/index.php?action=delete&numProduit=' . rawurlencode($client->getNumProduit()) . '>Supprimer</a></p>';
echo '</br><p><a href=http://infolimon.iutmontp.univ-montp2.fr/~sancheza/eCommerce/source>Retour</a></p>';
?>
