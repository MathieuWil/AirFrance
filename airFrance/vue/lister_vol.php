<h2> Liste des Vols </h2>

<form method="post">
	Filtrer par :
	<input type="text" name="mot" />
	<input type="submit" name="Filtrer" value="Filtrer" />
</form>

<table border="1">
	<tr> 
		<td> Id Vol </td>
		<td> Ville de départ </td>
		<td> Ville de d'arrivée </td>
		<td> Avion </td>
		<td> Pilote </td>

		<?php

			if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin") {
				echo "<td> Opérations </td>";
			}

		?>
	</tr>

	<?php
		foreach ($lesVols as $Vol)
		{
			echo "<tr>"; 
			echo "<td>".$Vol['idvol']."</td>";
			echo "<td>".$Vol['depart']."</td>";
			echo "<td>".$Vol['arrive']."</td>";
			$AvionSelect = selectWhereAvion($Vol['idavion']);
			echo "<td>".$AvionSelect['modele']."</td>";
			$PiloteSelect = selectWhereUserID($Vol['idpilote']);
			echo "<td>".$PiloteSelect['nom']." ".$PiloteSelect['prenom']."</td>";
			
			if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin") {
				echo "<td>
					<a href='index.php?page=3&action=sup&idvol=".$Vol['idvol']."'>
						<img src='images/supprimer.png' height='30' width='30' />
					</a>
					<a href='index.php?page=3&action=edit&idvol=".$Vol['idvol']."'>
						<img src='images/editer.png' height='30' width='30' />
					</a>
				</td>"; 

				echo "</tr>";
			}
		}
	?>
</table>