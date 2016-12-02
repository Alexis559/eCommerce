
        <?php
        foreach ($tab_clients as $client) {
          $numClientHTML = htmlspecialchars($client->getNumClient());
          $numClientURL = rawurlencode($client->getNumClient());
          $lien = "http://infolimon.iutmontp.univ-montp2.fr/~sancheza/eCommerce/source/index.php?controller=clients&action=read&numProduit=";
           echo '<p class="fig" style="display: none;"> N°Client: <a href="'. $lien . $numClientURL . '">' . $numClientHTML . '</a></p>';
        }        
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script> 
        $(document).ready(function(){
            $(".fig").slideDown("slow");
        });
        </script>