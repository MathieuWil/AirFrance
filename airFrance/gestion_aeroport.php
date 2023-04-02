<div id="aeroport">
<h2 class="page-title"> Aéroports </h2>
<?php
	if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {

		$Aeroport = null;

		if (isset($_GET['action']) && isset($_GET['idaeroport']))
		{
			$action = $_GET['action'];
			$idaeroport = $_GET['idaeroport'];
			switch($action)
			{
				case "sup" : deleteAeroport ($idaeroport) ; break; 
				case "edit" : $Aeroport = selectWhereAeroport($idaeroport); break; 
			}
		}

		require_once ("vue/form_insert_aeroport.php");

		if (isset($_POST['Valider']))
		{
			insertAeroport($_POST);  // appel de la fonction d'insertion 
			echo "<br> Insertion réussie de l'aéroport.";
		}

		else if (isset($_POST['Modifier']))
		{
			updateAeroport($_POST); 
			//on recharge la page 
			header("Location: index.php?page=2"); 
		}
	}

	if (isset($_POST['Filtrer']))
	{
		$mot = $_POST['mot'];
		$lesAeroports = selectSearchAeroport ($mot);
	} else {
		// Récupérer les aeroports de la base de données
		$lesAeroports = selectAllAeroport();
	}
	
	//afficher les Aeroport 
	require_once ("vue/lister_aeroport.php"); 
?>
</div>