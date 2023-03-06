<?php
	session_start();

	require_once("fonctions/fonctions.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion des vols - Air France</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1>Gestion des vols - Air France</h1>
		<br>

		<?php
			if ( ! isset($_SESSION['email'])) {
				require_once("vue/form_connexion.php");
			}
			
			if (isset($_POST['seConnecter']))
			{
				$email = $_POST['email'];
				$mdp = $_POST['mdp'];

				$unUser = selectWhereUser($email, $mdp);

				if ($unUser == null)
				{
					echo "<br/> Veuillez vérifier vos identifiants";
				}
				else
				{
					echo "<br/> Bienvenue ".$unUser['nom']." ".$unUser['prenom'];

					// Sauvegarder les données dans la session
					$_SESSION['iduser'] = $unUser['iduser'];
					$_SESSION['email'] = $email;
					$_SESSION['nom'] = $unUser['nom'];
					$_SESSION['prenom'] = $unUser['prenom'];
					$_SESSION['role'] = $unUser['role'];

					// Recharger la page
					header("Location: index.php");
				}
			}

			if (isset($_SESSION['email'])) {
				echo '
					<button>
						<a href="index.php?page=0" id="boutton"><img src ="images/logo.png" width="30" height="30"> Accueil </a>
					</button>

          <button>
          	<a href="index.php?page=1" id="boutton"><img src ="images/avion.png" width="30" height="30"> Avions </a>
          </button>

          <button>
          	<a href="index.php?page=2" id="boutton"><img src ="images/aeroport.png" width="30" height="30"> Aeroport </a>
          </button>

          <button>
          	<a href="index.php?page=3" id="boutton"><img src ="images/vol.png" width="30" height="30"> Vol </a>
          </button>
					
					<button>
						<a href="index.php?page=4" id="boutton"><img src ="images/deconnexion.png" width="30" height="30"> Se déconnecter </a>
					</button>
				';
				
			
				if (isset($_GET['page'])){
					$page = $_GET['page'];
				} else {
					$page = 0; 
				}
				switch($page){
					case 0 : require_once("home.php"); break;
          case 1 : require_once("gestion_avion.php"); break;
          case 2 : require_once("gestion_aeroport.php"); break;
					case 3 : require_once("gestion_vol.php"); break;
          case 4 :
						// Retirer email de la session
						unset($_SESSION['email']);

						// Détruire la session
						session_destroy();

						// Recharge la page index
						header("Location: index.php");
						break;
				}
			}
		?>

	</center>
</body>
</html>