<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>IUT de Troyes - Etudiants Etrangers</title>

	<meta name="description" content="Site de présentation de l’IUT de Troyes à destination des étudiants étrangers. ">

	<meta name="author" content="Louti">

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/rotate.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/animate.css">

	<link href="<?php echo base_url() ?>asset/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/jquery-ui.css"/>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">      <!--[if lt IE 9]>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?> application/libraries/sortGrid/stylesortgrid.css" />

    <script src="<?php echo base_url() ?> application/libraries/sortGrid/sortgrid.js"></script>

	<![endif]-->

</head>

<body>

<div class="wrapper">

	<header class="header">

		<div class="navhead">

			<div class="container">

				<div class="col-sm-1 col-xs-4 mobleft">

					<div class="text-left">

						<a href="#" class="logoFA"><i class="fa fa-ravelry" aria-hidden="true"></i></a>

					</div>

				</div>

				<div class="mobmenu"><i class="fa fa-navicon"></i></div>



				<div class="col-sm-10 col-xs-3 colMenu">

					<div class="colMenuBack"></div>

					<div class="text-center">

						<ul class="list-inline">

							<li><a href="http://loutidev.michaeldelaborde.com" class="rndbtn">Home</a></li>

							<li><a href="#" class="rightButMar">Studying at the IUT</a></li>

							<li><a href="#">Articles</a></li>

							<li><a href="#">Events</a></li>

							<li><?= anchor('connexion', "Connexion"); ?></li>

						</ul>

					</div>

				</div>

				<div class="col-sm-1 col-xs-4 mcright">

				</div>

			</div>

		</div>

		<div class="pagehead text-center">

			<h1><span>IUT de Troyes</span></h1>

			<p>Site de présentation de l’IUT de Troyes à destination des étudiants étrangers.</p>

		</div>

	</header>

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

			<img src="<?php echo base_url() ?>asset/images/2_arrow.png" /> Salles

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

								<h3>Le Vauban</h3><br>

							</div>

						</div>

						<div class="item">

							<img src="<?php echo base_url() ?>asset/photos/salle-02.jpg" />

							<div class="carousel-caption">

								<h3>Espace Raudin</h3><br>

							</div>

						</div>

						<div class="item">

							<img src="<?php echo base_url() ?>asset/photos/salle-03.jpg" />

							<div class="carousel-caption">

								<h3>Le Picolo</h3><br>

							</div>

						</div>

						<div class="item">

							<img src="<?php echo base_url() ?>asset/photos/salle-04.jpg" />

							<div class="carousel-caption">

								<h3>Salle Renoir</h3><br>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="col-md-3 nopad">

				<div class="box big sliderBlock abs mleft animate fadeIn" data-wow-delay="0.25s">

					<p>Des salles spéctaculaires, disponibles toute l'année.</p>

					<div class="mindivdr"></div>

				</div>

			</div>

		</div>



	</div>

</div>

<footer class="mtop">

	<div class="container inner clearfix">

		<div class="col-sm-6 col-md-3 col-xs-12">

			<h5>Contact</h5>

			<p>

				<small><b>Address</b></small>

				<small>13 rue des Bidons, Troyes</small>

			</p>

			<p>

				<small><b>Email</b></small>

				<small>stpavut@pavut.com</small>

			</p>

			<p>

				<small><b>Portable</b></small>

				<small>06 07 08 09</small>

			</p>

		</div>

		<div class="col-sm-6 col-md-6 col-xs-12 pull-right">

			<h5>Localisation</h5>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84945.2225780809!2d4.006252218494381!3d48.2924994551982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee9857e787b7b1%3A0x57dd125566e84f75!2sTroyes!5e0!3m2!1sen!2sfr!4v1490185292762" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>

	</div>

	<div class="subfooter">

		Copyright @2016 Saint Pavut

	</div>

</footer>

</div>

<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>asset/js/jquery.imagelistexpander.js"></script>

<script src="<?php echo base_url() ?>asset/js/wow.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script src="<?php echo base_url() ?>asset/js/rotate.js"></script>

<script src="<?php echo base_url() ?>asset/js/scripts.js"></script>

</body>
</html>