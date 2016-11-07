
        <?php
        foreach ($tab_f as $f) {
           echo '<p class="fig" style="display: none;"> N°Figurine: <a href="http://infolimon/~sancheza/eCommerce/source/index.php?action=read&numProduit=' . rawurlencode($f->getNumProduit()) . '">' . htmlspecialchars($f->getNumProduit()) . '</a></p>';
        }        
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script> 
        $(document).ready(function(){
            $(".fig").slideDown("slow");
        });
        </script>