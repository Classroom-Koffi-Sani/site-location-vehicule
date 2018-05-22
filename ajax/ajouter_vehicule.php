<center>
	<h3><i class="fa fa-plus"> </i> Ajouter un véhicule</h3>
	<div style="border: 1px solid #aaa; margin-right: 40px;"></div>
</center>

<h4 style="color: #e10a14;">
	<i class="fa fa-bar-chart-o"> </i>
	Rensignez les performances du véhicule
</h4>
<form>
<table width="95%" class="tableAjoutVehicule">
	<tr>
		<td>
			<label for="marque">Marque</label><br />
			<input class="form-control" type="text" name="marque" id="marque" />
		</td>
		<td>
			<label for="modele">Modèle</label><br />
			<input class="form-control" type="text" name="modele" id="modele" />
		</td>
		<td>
			<label for="serie">Numéro de serie</label><br />
			<input class="form-control" type="text" name="serie" id="serie" />
		</td>
		<td>
			<label for="fabricant">Fabricant</label><br />
			<input class="form-control" type="text" name="fabricant" id="fabricant" />
		</td>
	</tr>
	<tr>
		<td>
			<label for="couleur">Couleur</label><br />
			<input class="form-control" type="text" name="couleur" id="couleur" />
		</td>
		<td>
			<label for="contenance">Contenance réservoir</label><br />
			<input class="form-control" type="text" name="contenance" id="contenance" placeholder="180 Litres" />
		</td>
		<td>
			<label for="chaises">Nombre de chaises</label><br />
			<input class="form-control" type="number" name="chaises" id="chaises" min="1" max="10" />
		</td>
		<td>
			<label for="matricule">Numero d'immatrculation</label><br />
			<input class="form-control" type="text" name="matricule" id="matricule" />
		</td>

	</tr>
	<tr>
		<td>
			<label for="Vmax">Vitesse maximale</label><br />
			<input class="form-control" type="text" name="couleur" id="couleur" placeholder="220 km/h" />
		</td>
		<td>
			<label for="contenance">Transmission</label><br />
			
			<select class="form-control" name="contenance" id="transmission" >
				<option>Automatique</option>
				<option>Manuel</option>
			</select>
		</td>
		<td>
			<label for="acceleration">Accélération</label><br />
			<input class="form-control" type="text" name="acceleration" id="acceleration" placeholder="5.6s" />
		</td>
		<td>
			<label for="Pmoteur">Puissance du moteur</label><br />
			<input class="form-control" type="text" name="Pmoteur" id="Pmoteur" />
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td style="padding-left: 10px;">
			<label style="color: #fff; width: 100%;" for="file" class="btn btn-warning btn-sm">
				<i class="fa fa-image"> </i>
				<b>Ajouter une image du véhicule</b>
			</label>
			<input class="hide" type="file" name="file" id="file">
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit" class="btn btn-primary btn-sm">
				<i class="fa fa-plus"> </i>
				<b>Ajouter le véhicule</b>
			</button>
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

			

</form>