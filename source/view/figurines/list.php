
        <?php
        foreach ($tab_f as $f) {
          $numProduitHTML = htmlspecialchars($f->getNumProduit());
          $numProduitURL = rawurlencode($f->getNumProduit());
          $lien = "http://infolimon.iutmontp.univ-montp2.fr/~sancheza/eCommerce/source/index.php?action=read&numProduit=";
           echo '<p class="fig" style="display: none;"> N°Figurine: <a href="'. $lien . $numProduitURL . '">' . $numProduitHTML . '</a></p>';
        }        
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script> 
        $(document).ready(function(){
            $(".fig").slideDown("slow");
        });
        </script>