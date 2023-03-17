<h2> Liste des Avions </h2>

<form method="post">
	Filtrer par :
	<input type="text" name="mot" />
	<input type="submit" name="Filtrer" value="Filtrer" />
</form>

<table border="1">
	<tr> 
		<td> Id Avion </td>
		<td> Modèle Avion </td>
		<td> Aéroport </td>

		<?php

			if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin") {
				echo "<td> Opérations </td>";
			}

		?>
	</tr>

	<?php
		foreach ($lesAvions as $Avion)
		{
			echo "<tr>"; 
			echo "<td>".$Avion['idavion']."</td>";
			echo "<td>".$Avion['modele']."</td>";
			$AeroportSelect = selectWhereAeroport($Avion['idaeroport']);
			echo "<td>".$AeroportSelect['nomaeroport']."</td>";
			
			if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin") {
				echo "<td>
					<a href='index.php?page=1&action=sup&idavion=".$Avion['idavion']."'>
						<img src='images/supprimer.png' height='30' width='30' />
					</a>
					<a href='index.php?page=1&action=edit&idavion=".$Avion['idavion']."'>
						<img src='images/editer.png' height='30' width='30' />
					</a>
				</td>"; 

				echo "</tr>";
			}
		}
	?>
</table>