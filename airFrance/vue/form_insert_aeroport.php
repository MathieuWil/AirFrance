<h2> Ajout d'un Fournisseur </h2>
<form method="post" action="">
	<table>

		<tr> 
			<td> Nom Aeroport : </td>
			<td>
				<input type="text" name="nomaeroport"
					value ="<?= ($Aeroport!=null) ? $Aeroport['nomaeroport'] : '' ?>" />
			</td>
		</tr>
		<tr> 
			<td> Ville Aeroport : </td>
			<td>
				<input type="text" name="villeaeroport"
					value ="<?= ($Aeroport!=null) ? $Aeroport['villeaeroport'] : '' ?>" />
			</td>
		</tr>


		<!-- Boutons Annuler & Confirmer -->
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"></td>
			<td> <input type="submit" 
					<?= ($Aeroport!=null) ? ' name ="Modifier" value="Modifier" ' :
																	' name="Valider" value="Valider" ' ?> />
			</td>
		</tr>

		<?= ($Aeroport!=null) ? '<input type="hidden" name="idaeroport" value="'.$Aeroport['idaeroport'].'" />' : '' ?>

	</table>
</form>