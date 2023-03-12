<div>
<h2 class="page-title"> Vols </h2>
<?php
	if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {

		$Vol = null;

		if (isset($_GET['action']) && isset($_GET['idvol']))
		{
			$action = $_GET['action'];
			$idvol = $_GET['idvol'];
			switch($action)
			{
				case "sup" : deleteVol ($idvol) ; break; 
				case "edit" : $Vol = selectWhereVol($idvol); break; 
			}
		}

		$lesAvions = selectAllAvion();
		$lesPilotes = selectAllPilote();
		require_once ("vue/form_insert_vol.php");

		if (isset($_POST['Valider']))
		{
			insertVol($_POST);  // appel de la fonction d'insertion 
			echo "<br> Insertion réussie du vol.";
		}

		else if (isset($_POST['Modifier']))
		{
			updateVol($_POST); 
			//on recharge la page 
			header("Location: index.php?page=3"); 
		}
	}

	if (isset($_POST['Filtrer']))
	{
		$mot = $_POST['mot'];
		$lesVols = selectSearchVol ($mot);
	}
	else if ($_SESSION['role']=="admin")
	{
		// Récupérer les vols de la base de données
		$lesVols = selectAllVol();
	}
	else if ($_SESSION['role']=="pilote")
	{
		// Récupérer les vols de la base de données
		$lesVols = selectPiloteVol($_SESSION['iduser']);
	}
	
	//afficher les Vols
	require_once ("vue/lister_vol.php"); 
?>
</div>