<div id="home">
	<h2 class="page-title"> Accueil </h2>

	<br/>

	<p>
		Utilisateur connecté
		<br />
		<?php
			echo $_SESSION['nom'];
			echo " ";
			echo $_SESSION['prenom'];
		?>
		<br /><br /><br /><br />
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
		Ce site a été réalisé par Mathieu, Elian, Ilyes et Baptiste du CFA Insta <br/><br/>
		Site créé le 28/02/2023. <br/><br/>

		Pas de droits réservés <br/><br/>

		Bonne visite <br/>
	</p>
</div>