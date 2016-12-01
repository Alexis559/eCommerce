<?php

echo "Numero Produit: " . htmlspecialchars($f->getNumProduit()) . "<br> Nom Produit: " . htmlspecialchars($f->getNomProduit()) . "<br> Quantité en stock: " . htmlspecialchars($f->getQteStock()) . " <br>Catégorie: " . htmlspecialchars($f->getCategorie()) . " <br>Prix: " . htmlspecialchars($f->getPrix()) . " <br>Poids: " . htmlspecialchars($f->getPoids()) . " <br>Hauteur: " . htmlspecialchars($f->getHauteur()) . " <br>Univers: " . htmlspecialchars($f->getUnivers());
echo '<p><a href=http://infolimon.iutmontp.univ-montp2.fr/~sancheza/eCommerce/source/index.php?action=delete&numProduit=' . rawurlencode($f->getNumProduit()) . '>Supprimer</a></p>';
echo '</br><p><a href=http://infolimon.iutmontp.univ-montp2.fr/~sancheza/eCommerce/source>Retour</a></p>';
?>
