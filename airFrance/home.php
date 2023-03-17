<div id="home">
	<h2 class="page-title"> Accueil </h2>

	

	<p>
		Utilisateur connecté
		
		<?php
			echo $_SESSION['nom'];
			echo " ";
			echo $_SESSION['prenom'];
		?>
		
	</p>

		<button class="header_btn">
			<a href="index.php?page=1" id="boutton"><img src ="images/avion.png" width="50" height="50"> Avions </a>
		</button>

		<button class="header_btn">
			<a href="index.php?page=2" id="boutton"><img src ="images/aeroport.png" width="50" height="50"> Aeroport </a>
		</button>

		<button class="header_btn">
			<a href="index.php?page=3" id="boutton"><img src ="images/vol.png" width="50" height="50"> Vol </a>
		</button>

	<p>
		Ce site a été réalisé par Mathieu, Elian, Ilyes et Baptiste du CFA Insta
		Site créé le 28/02/2023.

		Pas de droits réservés

		Bonne visite
	</p>
</div>