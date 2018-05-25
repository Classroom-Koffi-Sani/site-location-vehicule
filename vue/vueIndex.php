<?php
	require 'includes/header.php';
?>
<div class="container" id="bodyTop">
	<div class="row">
		<div class="col-xs-12">
				
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-7">

					<div class="smallWindowsRight reservationForm">
						<div class="title">
							<center>
								<i class="fa fa-dollar"> </i>
								<b>Les tops avec les meilleurs des prix !</b>
							</center>
						</div>

						<div class="contents rmUnderline">
						
								<b>Allez ! Réservez-vous les véhivules de classe cinq étoiles</b>&nbsp;&nbsp;
								<span style="color: #d9d714;">
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
								</span>
								<div style="height: 10px;"></div>
								<a href="#" class="btn btn-success btn-sm">
									<i class="fa fa-share"> </i>
									<b>OK, j'y vais !</b>
								</a>
								<a href="#" class="btn btn-default btn-sm">
									<i class="glyphicon glyphicon-hand-right"> </i>
									<b>Je veux visiter</b>
								</a>
								<div style="height: 10px;"></div>
								Suivez - nous sur nos pages officielles :
								<div style="height: 10px;"></div>
								<a href="#" style="color: #1b86c4;">
									<i class="fa fa-facebook-square fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #c4371b;">
									<i class="fa fa-google fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #5d67b4;">
									<i class="fa fa-yahoo fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #1f7493;">
									<i class="fa fa-linkedin fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #df780a;">
									<i class="fa fa-instagram fa-2x"> </i>
								</a>

								<span class="pull-right">
									<a href="#" style="color: #df780a;"><i class="fa fa-envelope fa-2x"> </i></a>
								</span>
							
							
						</div>

					</div>

					
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-5">
					<div class="panel panel-danger reservationForm">
						<div class="panel-heading">
							<center>
								
								<b>Réservation</b>
							</center>
						</div>
						<div class="panel-body">
							
								<label>Date début</label> : La date du début de location<br />
								<input type="number" id="jourD" name="jourDebut" max="31" min="1" placeholder="1" />
								<input type="number" id="moisD" name="moisDebut" max="12" min="1" placeholder="1" />
								<input type="number" id="anneeD" name="anneeDebut" max="2019" min="2018" placeholder="2018" />
								<div style="height: 10px;"></div>
								<label>Date fin</label> : La date de fin de location<br />
								<input type="number" id="jourA" name="jourFin" max="31" min="1" placeholder="1" />
								<input type="number" id="moisA" name="moisFin" max="12" min="1" placeholder="1" />
								<input type="number" id="anneeA" name="anneeFin" max="2019" min="2018" placeholder="2018" /><br />
								<div style="height: 10px;"></div>
								<button class="btn btn-danger btn-sm" id="submit_date_reservation">
									<i class="fa fa-calendar"> </i>
									<b>Soumettre la date</b>
									<i class="fa fa-chevron-right"> </i>
								</button>

							
						</div>
					</div>
				</div>

			</div>
			<div class="row">
			<center><?php echo($check==0) ? '<br /><br /><h1><i class=\'fa fa-times\'> </i> Aucun Enregitrement !</h1>' : ''; ?></center>
				<div class="col-xs-12"><br />
					<div class="principalBanner">
						<?php while($data=$req->fetch()) { ?>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<div class="img-V">
									<img class="img-rounded" src="images_voitures/<?php echo($data['image']); ?>" width="100%" />
								</div>
								<br />
								<div class="voitureDesc">
									<center><b><?php echo($data['marque']." ".$data['modele']); ?></b></center>
									Nombre de chaises : 5<?php echo($data['chaises']); ?> chaises<br />
									Source d'énergie : <?php echo($data['couleur']); ?>
									<div style="height: 10px;"></div>
									<center>
										<a href="afficher/?id=<?php echo($data['id']); ?>" class="btn btn-info btn-sm">
											<i class="glyphicon glyphicon-eye-open"> </i>
											<b>Afficher</b>
										</a>
										<a href="date_reservation/?id=<?php echo($data['id']); ?>" class="btn btn-warning btn-sm">
											<i class="fa fa-share"> </i>
											<b>Réserver</b>
										</a>
									</center>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			

			<div class="col-xs-12">
				
				
			</div>

		</div>
	</div>
</div>

<?php if($check!=0) { ?>

<div class="plusOptionVoiture">
	Pour plus de choix de véhicules ...
</div>

<center>
	<div style="height: 15px;"></div>
	<div class="btn btn-info btn-lg discoverBtn">
		<b>Cliquez ici !</b>
		<i class="fa fa-chevron-down"> </i>
	</div>

	<div class="btn btn-info btn-lg deplierBtn">
		<b>Déplier la page</b>
		<i class="fa fa-chevron-up"> </i>
	</div>
</center>
<?php } ?>
<br />

<?php
	$query0="SELECT * FROM vehicules LIMIT 0,18";
	$req0=$bdd->prepare($query0);
	$req0->execute();
?>


<div class="container" id="bodyBottom">
	
	<div class="row">
		<?php while($data0=$req0->fetch()) { ?>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<div class="img-V">
									<img class="img-rounded" src="images_voitures/<?php echo($data0['image']); ?>" width="100%" />
								</div>
								<br />
								<div class="voitureDesc">
									<center><b><?php echo($data0['marque']." ".$data0['modele']); ?></b></center>
									Nombre de chaises : 5<?php echo($data0['chaises']); ?> chaises<br />
									Source d'énergie : <?php echo($data0['couleur']); ?>
									<div style="height: 10px;"></div>
									<center>
										<a href="afficher/?id=<?php echo($data0['id']); ?>" class="btn btn-info btn-sm">
											<i class="glyphicon glyphicon-eye-open"> </i>
											<b>Afficher</b>
										</a>
										<a href="../date_reservation/?id=<?php echo($id); ?>" class="btn btn-warning btn-sm">
											<i class="fa fa-share"> </i>
											<b>Réserver</b>
										</a>
									</center>
								</div>
							</div>
						<?php } ?>
		
		<center>
			<a href="#" class="btn btn-primary">
				<i class="fa fa-plus-circle"> </i>
				<b>Voir plus de résultats</b>
			</a>
		</center><br />

	</div>
</div>

