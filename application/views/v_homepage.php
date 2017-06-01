	<?php

	/*

	$arrIntitule = array();

	$arrDesc = array();

	$arrPrix = array();

	$arrPhoto = array();

	$arrDate = array();



	foreach ($toutes as $une ){

		$arrIntitule[] = $une->manif_intitule;



		$arrDesc[] = $une->manif_description;



		$arrPrix[] = $une->manif_prix_place;



		$arrPhoto[] = $une->manif_photo;



		$arrDate[] = $une->manif_date;



	}

	*/?>

	<div class="container rel">

		<a href="#salles" class="box readmoreBlock abs topRight text-center animate fadeIn" data-wow-delay="0.25s">

			<img src="<?php echo base_url() ?>asset/images/2_arrow.png" /> Events

		</a>





		<div class="rel mtop clearfix">

			<div id="Manifestations" class="col-sm-12 card">

				<div id="carousel-example" class="carousel multi slide" data-ride="carousel">

					<ol class="carousel-indicators">

						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>

						<li data-target="#carousel-example" data-slide-to="1"></li>

					</ol>

					<div class="carousel-inner">

						<div class="item active">

							<div class="col-sm-4">

								<div class="thumbnail">

									<img src="<?php /* echo base_url() */?>asset/photos/<?php echo "salle-01.jpg";?>" class="img-responsive" />

									<div class="panel-body">

										<p><?php /* echo $arrIntitule[0]; */?></p>

										<p><?php /* echo $arrDate[0]; */?></p>

										<p><?php /* echo $arrPrix[0]; */?></p>

									</div>

								</div>

							</div>

							<div class="col-sm-4">

								<div class="thumbnail">

									<img src="<?php /*echo base_url() */?>asset/photos/<?php echo "salle-01.jpg";?>" class="img-responsive" />

									<div class="panel-body">

										<p><?php/* echo $arrIntitule[1]; */?></p>

										<p><?php/* echo $arrDate[1]; */?></p>

										<p><?php/* echo $arrPrix[1]; */?></p>

									</div>

								</div>

							</div>

							<div class="col-sm-4">

								<div class="thumbnail">

									<img src="<?php echo base_url() ?>asset/photos/<?php echo "salle-01.jpg";?>" class="img-responsive" />

									<div class="panel-body">

										<p><?php/* echo $arrIntitule[2]; */?></p>

										<p><?php/* echo $arrDate[2]; */?></p>

										<p><?php/* echo $arrPrix[2]; */?></p>

									</div>

								</div>

							</div>

						</div>

						<div class="item">

							<div class="col-sm-4">

								<div class="thumbnail">

									<img src="<?php echo base_url() ?>asset/photos/<?php echo "salle-01.jpg";?>" class="img-responsive" />

									<div class="panel-body">

										<p><?php/* echo $arrIntitule[3]; */?></p>

										<p><?php/* echo $arrDate[3]; */?></p>

										<p><?php/* echo $arrPrix[3]; */?></p>

									</div>

								</div>

							</div>

							<div class="col-sm-4">

								<div class="thumbnail">

									<img src="<?php  echo base_url() ?>asset/photos/<?php echo "salle-01.jpg";?>" class="img-responsive" />

									<div class="panel-body">

										<p><?php/* echo $arrIntitule[4]; */?></p>

										<p><?php/* echo $arrDate[4]; */?></p>

										<p><?php/* echo $arrPrix[4]; */?></p>

									</div>

								</div>

							</div>

							<div class="col-sm-4">

								<div class="thumbnail">

									<img src="<?php echo base_url() ?>asset/photos/<?php echo "salle-01.jpg";?>" class="img-responsive" />

									<div class="panel-body">

										<p><?php/* echo $arrIntitule[5]; */?></p>

										<p><?php/* echo $arrDate[5]; */?></p>

										<p><?php/* echo $arrPrix[5]; */?></p>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<!-- FEATURE IMAGE -->

		<div class="rel clearfix">

			<div id="salles" class="col-md-9 top nopad">

				<div id="mov-carousel-example" class="carousel single slide" data-ride="carousel">

					<ol class="carousel-indicators">

						<li data-target="#mov-carousel-example" data-slide-to="0" class="active"></li>

						<li data-target="#mov-carousel-example" data-slide-to="1"></li>

						<li data-target="#mov-carousel-example" data-slide-to="2"></li>

						<li data-target="#mov-carousel-example" data-slide-to="3"></li>

					</ol>

					<div class="carousel-inner">

						<div class="item active">

							<img src="<?php echo base_url() ?>asset/photos/salle-01.jpg" />

							<div class="carousel-caption">

								<h3>Event</h3><br>

							</div>

						</div>

						<div class="item">

							<img src="<?php echo base_url() ?>asset/photos/salle-02.jpg" />

							<div class="carousel-caption">

								<h3>Event</h3><br>

							</div>

						</div>

						<div class="item">

							<img src="<?php echo base_url() ?>asset/photos/salle-03.jpg" />

							<div class="carousel-caption">

								<h3>Event</h3><br>

							</div>

						</div>

						<div class="item">

							<img src="<?php echo base_url() ?>asset/photos/salle-04.jpg" />

							<div class="carousel-caption">

								<h3>Event</h3><br>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="col-md-3 nopad">

				<div class="box big sliderBlock abs mleft animate fadeIn" data-wow-delay="0.25s">

					<p>Come to our community events!</p>

					<div class="mindivdr"></div>

				</div>

			</div>

		</div>



	</div>

</div>