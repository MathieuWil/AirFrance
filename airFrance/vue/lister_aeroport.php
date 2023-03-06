<h2> Liste des Aéroports </h2>

<form method="post">
	Filtrer par :
	<input type="text" name="mot" />
	<input type="submit" name="Filtrer" value="Filtrer" />
</form>

<table border="1">
	<tr> 
		<td> Id Aéroport </td>
		<td> Nom Aeroport </td>
		<td> Ville Aeroport </td>

		<?php

			if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin") {
				echo "<td> Opérations </td>";
			}

		?>
	</tr>

	<?php
		foreach ($lesAeroports as $Aeroport)
		{
			echo "<tr>"; 
			echo "<td>".$Aeroport['idaeroport']."</td>";
			echo "<td>".$Aeroport['nomaeroport']."</td>";
			echo "<td>".$Aeroport['villeaeroport']."</td>";
			
			if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin") {
				echo "<td>
					<a href='index.php?page=2&action=sup&idaeroport=".$Aeroport['idaeroport']."'>
						<img src='images/supprimer.png' height='30' width='30' />
					</a>
					<a href='index.php?page=2&action=edit&idaeroport=".$Aeroport['idaeroport']."'>
						<img src='images/editer.png' height='30' width='30' />
					</a>
				</td>"; 

				echo "</tr>";
			}
		}
	?>
</table>