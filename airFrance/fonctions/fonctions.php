<?php
	function connexion ()
	{
		$con = mysqli_connect("localhost:3307", "root", "", "air_france");
		if($con == null)
		{
			echo "Erreur de connexion à la BDD.";
		}
		return $con; 
	}

	function deconnexion ($con)
	{
		mysqli_close($con);
	}







    /*******************************************************/
	/**************** Fonctions user ***********************/
	/*******************************************************/

    function selectWhereUser($email, $mdp)
	{
		// Ecriture de la requete 
		$requete = "select * from user where email ='".$email."' and mdp ='".$mdp."';";

		// Connexion 
		$con = connexion ();

		$leResultat = mysqli_query($con, $requete);
		$unUser = mysqli_fetch_assoc($leResultat); //tableau associatif

		// Déconnexion 
		deconnexion($con);

		return $unUser; 
	}

    function selectWhereUserID($iduser)
	{
		// Ecriture de la requete 
		$requete = "select * from user where iduser =".$iduser.";";

		// Connexion 
		$con = connexion ();

		$leResultat = mysqli_query($con, $requete);
		$unUser = mysqli_fetch_assoc($leResultat); //tableau associatif

		// Déconnexion 
		deconnexion($con);

		return $unUser; 
	}




	function selectAllPilote()
	{
		$requete = "select * from user where role='pilote';";
		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		$lesPilotes = mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con);

		return $lesPilotes;
	}







    /****************************************************/
	/**************** Fonctions aeroport ****************/
	/****************************************************/


	function insertAeroport ($tab) // $tab <=> $_POST (formulaire) 
	{
		$requete = 
			"insert into aeroport values
			(null, '".$tab['nomaeroport']."', '".$tab['villeaeroport']."') ; ";

		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con); 
	}

	function selectWhereAeroport($idaeroport)
	{
		// Ecriture de la requete 
		$requete = "select * from aeroport where idaeroport = ".$idaeroport.";"; 
		// Connexion 
		$con = connexion ();
		
		$leResultat = mysqli_query($con, $requete);
		$Aeroport = mysqli_fetch_assoc($leResultat); //tableau associatif
		// Déconnexion 
		deconnexion($con);
		
		return $Aeroport; 
	}

	function selectAllAeroport ()
	{
		$requete = "select * from aeroport;";
		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		$lesAeroports = mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con);

		return $lesAeroports;
	}

	function deleteAeroport ($idaeroport) {
		//ecriture de la requete 
		$requete = "delete from aeroport where idaeroport = ".$idaeroport.";"; 
		//on se connecte
		$con = connexion ();
		//on execute la requete 
		mysqli_query($con, $requete); 
		//on se deconnecte 
		deconnexion($con);	
	}

	function updateAeroport ($aeroport) {
		//ecriture de la requete 
		$requete ="update aeroport set nomaeroport='".$aeroport['nomaeroport']."', villeaeroport='".$aeroport['villeaeroport']."' where idaeroport=".$aeroport['idaeroport'].";";
		//connexion 
		$con = connexion ();
		//execution de la requete
		mysqli_query($con, $requete);
		//deconnexion 
		deconnexion($con);
	}

	function selectSearchAeroport ($mot) {
		$requete ="select * from aeroport where nomaeroport like '%".$mot."%'  or villeaeroport like '%".$mot."%' ;";
		//connexion 
		$con = connexion ();
		//execution de la requete
		$lesAeroports = mysqli_query($con, $requete);
		//deconnexion 
		deconnexion($con);
		return $lesAeroports; 	
	}












    /****************************************************/
	/****************  Fonctions avion 	*****************/
	/****************************************************/


	function insertAvion ($tab) // $tab <=> $_POST (formulaire) 
	{
		$requete = 
			"insert into avion values
			(null, '".$tab['modele']."', '".$tab['idaeroport']."') ; ";

		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con); 
	}

	function selectWhereAvion($idavion)
	{
		// Ecriture de la requete 
		$requete = "select * from avion where idavion = ".$idavion.";"; 
		// Connexion 
		$con = connexion ();
		
		$leResultat = mysqli_query($con, $requete);
		$Avion = mysqli_fetch_assoc($leResultat); //tableau associatif
		// Déconnexion 
		deconnexion($con);
		
		return $Avion; 
	}

	function selectAllAvion ()
	{
		$requete = "select * from avion;";
		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		$lesAvions = mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con);

		return $lesAvions;
	}

	function deleteAvion ($idavion) {
		//ecriture de la requete 
		$requete = "delete from avion where idavion = ".$idavion.";"; 
		//on se connecte
		$con = connexion ();
		//on execute la requete 
		mysqli_query($con, $requete); 
		//on se deconnecte 
		deconnexion($con);	
	}

	function updateAvion ($avion) {
		//ecriture de la requete 
		$requete ="update avion set modele='".$avion['modele']."', idaeroport='".$avion['idaeroport']."' where idavion=".$avion['idavion'].";";
		//connexion 
		$con = connexion ();
		//execution de la requete
		mysqli_query($con, $requete);
		//deconnexion 
		deconnexion($con);
	}

	function selectSearchAvion ($mot) {
		$requete ="select * from avion where modele like '%".$mot."%';";
		//connexion 
		$con = connexion ();
		//execution de la requete
		$lesAvions = mysqli_query($con, $requete);
		//deconnexion 
		deconnexion($con);
		return $lesAvions; 	
	}












    /****************************************************/
	/******************* Fonctions vol ******************/
	/****************************************************/


	function insertVol ($tab) // $tab <=> $_POST (formulaire) 
	{
		$requete = 
			"insert into vol values
			(null, '".$tab['depart']."', '".$tab['arrive']."', '".$tab['idavion']."', '".$tab['idpilote']."') ; ";

		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con); 
	}

	function selectWhereVol($idvol)
	{
		// Ecriture de la requete 
		$requete = "select * from vol where idvol = ".$idvol.";"; 
		// Connexion 
		$con = connexion ();
		
		$leResultat = mysqli_query($con, $requete);
		$Vol = mysqli_fetch_assoc($leResultat); //tableau associatif
		// Déconnexion 
		deconnexion($con);
		
		return $Vol; 
	}

	function selectAllVol ()
	{
		$requete = "select * from vol;";
		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		$lesVols = mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con);

		return $lesVols;
	}

	function deleteVol ($idvol) {
		//ecriture de la requete 
		$requete = "delete from vol where idvol = ".$idvol.";"; 
		//on se connecte
		$con = connexion ();
		//on execute la requete 
		mysqli_query($con, $requete); 
		//on se deconnecte 
		deconnexion($con);	
	}

	function updateVol ($vol) {
		//ecriture de la requete 
		$requete ="update vol set depart='".$vol['depart']."', arrive='".$vol['arrive']."' , idavion='".$vol['idavion']."' , idpilote='".$vol['idpilote']."' where idvol=".$vol['idvol'].";";
		//connexion 
		$con = connexion ();
		//execution de la requete
		mysqli_query($con, $requete);
		//deconnexion 
		deconnexion($con);
	}

	function selectSearchVol ($mot) {
		$requete ="select * from vol where depart like '%".$mot."%'  or arrive like '%".$mot."%' ;";
		//connexion 
		$con = connexion ();
		//execution de la requete
		$lesVols = mysqli_query($con, $requete);
		//deconnexion 
		deconnexion($con);
		return $lesVols; 	
	}

// Ne retourner que les vols du pilote connecté
	function selectPiloteVol ($iduser)
	{
		$requete = "select * from vol where idpilote= ".$iduser.";";
		// Connexion 
		$con = connexion (); 

		// Execution de la requete 
		$lesVols = mysqli_query($con, $requete); 

		// Déconnexion 
		deconnexion($con);

		return $lesVols;
	}



?>