<div id="avion">
<h2 class="page-title"> Avions </h2>
<?php
	if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {

		$Avion = null;

		if (isset($_GET['action']) && isset($_GET['idavion']))
		{
			$action = $_GET['action'];
			$idavion = $_GET['idavion'];
			switch($action)
			{
				case "sup" : deleteAvion ($idavion) ; break; 
				case "edit" : $Avion = selectWhereAvion($idavion); break; 
			}
		}

		$lesAeroports = selectAllAeroport();
		require_once ("vue/form_insert_avion.php");

		if (isset($_POST['Valider']))
		{
			insertAvion($_POST);  // appel de la fonction d'insertion 
			echo "<br> Insertion réussie de l'avion.";
		}

		else if (isset($_POST['Modifier']))
		{
			updateAvion($_POST); 
			//on recharge la page 
			header("Location: index.php?page=1"); 
		}
	}

	if (isset($_POST['Filtrer']))
	{
		$mot = $_POST['mot'];
		$lesAvions = selectSearchAvion ($mot);
	} else {
		// Récupérer les avions de la base de données
		$lesAvions = selectAllAvion();
	}
	
	//afficher les Avions
	require_once ("vue/lister_avion.php"); 
?>
</div>