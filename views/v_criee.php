<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>La Criée ACCUEIL | Poulgoazec</title>
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	    <center><h1 style="font-size: 55px; !important">La Criée <small>Poulgoazec</small></h1></center>
	  <div class="jumbotron jumbotron-opacity jumbotron-shadow diff-hauteur">
	  	<?php include('./views/v_menu.php');?>
	  	<span id="corps">
		    <center>
					<div class="page-header">
				  	<h2>Bienvenue</h2>
					</div>

				<p class="text-justify" style="width:80%">
					La Criée de Poulgoazec est située sur la commune de Plouhinec, département du Finistère (29), à
					proximité de la Pointe du Raz sur la zone de pêche Atlantique Nord Est. Une criée est une vente aux
					enchères d’une marchandise par lots.<br>
					La Criée de Poulgoazec est un organisme dépendant de la Chambre de Commerce et d’Industrie
					(CCI) de Quimper (Concessionnaire) entretenu par le Conseil Général du Finistère (Concédant).
					Le site géographique de vente est identifié F-29.197.500-CE sur le quartier maritime d’Audierne (AD).<br><br>

					La flotte du port d’Audierne est constituée de 40 bateaux (en grande majorité de moins de 12 mètres)
					qui y déposent leur pêche tous les jours. On y compte également une quinzaine de bateaux
					« extérieurs » qui effectuent des apports de façon irrégulière. La pêche pratiquée est qualifiée de
					« Petite pêche » et de « Pêche côtière », pour ces pêches l’absence du bateau du port est inférieure à
					24 heures et jamais supérieure à 96 heures (ce type de pêche représente 92% de la
					pêche métropolitaine).
				</p>
				</center>
	    </span>
	  </div>
	</div>
	<script>
	$('.changePageOffre').click(function()
	{
	  $.ajax({
	  	url : "./views/v_offre.php",
	  	type : "GET",
	  	data : "?action=" + $('.changePageOffre').attr('class'),
	  	success : function(html){
	  		$('#corps').empty();
	  		$('#corps').append(html);
	  	}
	  });
	});

	$('.changePagePanier').click(function()
	{
	  $.ajax({
	    url : "./views/v_panier.php",
	    type : "GET",
	    data : "?action=" + $('.changePagePanier').attr('class'),
	    success : function(html){
	      $('#corps').empty();
	      $('#corps').append(html);
	    }
	  });
	});

	$('.changePageAdmin').click(function()
	{
	  $.ajax({
	    url : "./views/v_admin.php",
	    type : "GET",
	    data : "?action=" + $('.changePageAdmin').attr('class'),
	    success : function(html){
	      $('#corps').empty();
	      $('#corps').append(html);
	    }
	  });
	});

	$('.changePageStats').click(function()
	{
	  $.ajax({
	    url : "./views/v_stats.php",
	    type : "GET",
	    data : "?action=" + $('.changePageStats').attr('class'),
	    success : function(html){
	      $('#corps').empty();
	      $('#corps').append(html);
	    }
	  });
	});

	$('.changePageAjouts').click(function()
	{
	  $.ajax({
	    url : "./views/v_ajouts.php",
	    type : "GET",
	    data : "?action=" + $('.changePageAjouts').attr('class'),
	    success : function(html){
	      $('#corps').empty();
	      $('#corps').append(html);
	    }
	  });
	});

	$('.changePageProfil').click(function()
	{
	  $.ajax({
	    url : "./views/v_profil.php",
	    type : "GET",
	    data : "?action=" + $('.changePageProfil').attr('class'),
	    success : function(html){
	      $('#corps').empty();
	      $('#corps').append(html);
	    }
	  });
	});

	$('.changePageSalleAdmin').click(function()
	{
	  $.ajax({
	    url : "./views/v_salleAdmin.php",
	    type : "GET",
	    data : "?action=" + $('.changePageSalleAdmin').attr('class'),
	    success : function(html){
	      $('#corps').empty();
	      $('#corps').append(html);
	    }
	  });
	});

	</script>
</body>
</html>
