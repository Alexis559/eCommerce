<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php
            echo $pagetitle;
            ?>
        </title>
    </head>
    <body>
        <header style="border: 2px solid black;">
            <div>
                <h1 style="text-align: center">Figurines</h1>
            </div>
            <div style="text-align: center;">
                <nav>
                    <ul id="navigation">
                        <li style="display: inline;"><a href="index.php?action=readAll">Liste des figurines</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <?php
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
        ?>
        <footer>
            <p style="border: 1px solid black;text-align:right;padding-right:1em;">
                Figurines
            </p>
        </footer>
         
    </body>
</html>


