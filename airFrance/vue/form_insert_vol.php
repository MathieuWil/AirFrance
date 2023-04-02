<h2> Ajout d'un Vol </h2>
<form method="post" action="">
	<table class="no_bg">

		<tr> 
			<td> Ville de départ : </td>
			<td>
				<input type="text" name="depart"
					value ="<?= ($Vol!=null) ? $Vol['depart'] : '' ?>" />
			</td>
		</tr>

		<tr> 
			<td> Ville d'arrivée : </td>
			<td>
				<input type="text" name="arrive"
					value ="<?= ($Vol!=null) ? $Vol['arrive'] : '' ?>" />
			</td>
		</tr>


		<tr> 
			<td> Avion : </td>
			<td>
				<select name="idavion">
					<?php
					foreach ($lesAvions as $Avion) {
						echo "<option value='".$Avion['idavion']."'>";
						echo $Avion['modele']; 
						echo "</option>";
					}
					?>	
				</select>
			</td>
		</tr>

		<tr> 
			<td> Pilote : </td>
			<td>
				<select name="idpilote">
					<?php
					foreach ($lesPilotes as $Pilote) {
						echo "<option value='".$Pilote['iduser']."'>";
						echo $Pilote['prenom']; 
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
					<?= ($Vol!=null) ? ' name ="Modifier" value="Modifier" ' :
									   ' name="Valider" value="Valider" ' ?> />
			</td>
		</tr>

		<?= ($Vol!=null) ? '<input type="hidden" name="idvol" value="'.$Vol['idvol'].'" />' : '' ?>

	</table>
</form>