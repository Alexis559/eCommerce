<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>
	<?php echo $pagetitle; ?>
	</title>
	<link rel="stylesheet" href="style.css">
</head>


<body>
	<header><!-- EN TETE DE LA PAGE ! -->
		<div id="logo">
			<h1>eCommerce</h1>
		</div>
		<div id="menu">
			<nav>
				<?php
				require_once File::build_path(array("lib", "Session.php"));
				echo'<div><a href="index.php?action=readAll&controller=produits">Liste des figurines</a></div>';
				if(Session::is_admin() == true){
					echo('<div><a href="index.php?action=create&controller=produits">Ajouter une figurine</a></div>
				<div><a href="index.php?action=create&controller=clients">Client</a></div>');
				}
				?>
			</nav>
		</div>
		<?php
			if (isset($_SESSION['login'])) {
				echo ('<div id="connexion">
					<nav>
						<div><p>Bonjour, ' . $_SESSION['login'] . '</div>
						<div><a href="index.php?action=read&controller=clients">profil</a></div>
						<div><a href="index.php?action=deconnect&controller=clients">deconnexion</a></div>
					</nav>
				</div>');
			}else{
				echo ('<div id="connexion">
					<nav>
						<div><a href="index.php?action=connect&controller=clients">Connexion</a></div>
						<div><a href="index.php?action=create&controller=clients">S\'inscrire</a></div>
					</nav>
				</div>');
			}
		?>
	</header>
	 <?php
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
     ?>
	<footer>
		
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>