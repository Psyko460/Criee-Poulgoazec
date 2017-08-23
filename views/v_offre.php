<?php
session_start();
?>
<div style="margin-left: 15%;margin-right: 15%;padding-bottom: 15px;">
	<button class="btn btn-default" id="inscription">Inscription salle</button>
	<span id="numeroSalle"></span>
	<div class="page-header">
  <h2>Les offres</h2>
	</div>
    <div class="table-responsive">
        <div class="panel panel-default">
			<table class="table table-bordered table-striped">
		  	<thead>
					<tr>
				    <th >Lot id</th>
				    <th>Date Pêche</th>
				    <th>Id du bateau</th>
				    <th>Prix depuis la dernière actualisation</th>
				    <th>Enchérir</th>
				    <th><a href="#" id="reload"><span class="glyphicon glyphicon-refresh"/></a></th>
					</tr>
				</thead>
				<tbody id="enchere">
				</tbody>
			</table>
        </div>
    </div>
	<span id="alerte">
	</span>
    <div class="alert alert-success fade in" id="success-alert" role="alert"><strong>Enchère effectuée !</strong></div>
    <div class="alert alert-danger fade in" id="danger-alert" role="alert"><strong>Enchère inférieure à la maximale, veuillez recommencer.</strong></div>
</div>
<script src="js/enchere.js" charset="utf-8"></script>
<script src="js/salle.js" charset="utf-8"></script>
