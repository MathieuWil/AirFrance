<h2> Ajout d'un Avion </h2>
<form method="post" action="">
	<table>

		<tr> 
			<td> Modèle de l'Avion : </td>
			<td>
				<input type="text" name="modele"
					value ="<?= ($Avion!=null) ? $Avion['modele'] : '' ?>" />
			</td>
		</tr>
		<tr> 
			<td> Aeroport : </td>
			<td>
				<select name="idaeroport">
					<?php
					foreach ($lesAeroports as $Aeroport) {
						echo "<option value='".$Aeroport['idaeroport']."'>";
						echo $Aeroport['nomaeroport']; 
						echo "</option>";
					}
					?>	
				</select>
			</td>
		</tr>


		<!-- Boutons Annuler & Confirmer -->
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"></td>
			<td> <input type="submit" 
					<?= ($Avion!=null) ? ' name ="Modifier" value="Modifier" ' :
																	' name="Valider" value="Valider" ' ?> />
			</td>
		</tr>

		<?= ($Avion!=null) ? '<input type="hidden" name="idavion" value="'.$Avion['idavion'].'" />' : '' ?>

	</table>
</form>