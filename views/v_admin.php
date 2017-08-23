<?php
session_start();
?>
<div style="margin-left: 15%;margin-right: 15%;padding-bottom: 15px;">
	<div class="page-header">
  	<h2>Administration</h2>
	</div>
	<div id="day">
		<div class="page-header">
  		<h2><small>Enchère du jour</small></h2>
		</div>
		<div class="table-responsive">
      <div class="panel panel-default">
				<table class="table table-bordered table-striped">
					<thead>
				  	<tr>
					    <th>Lot id</th>
					    <th>Date Pêche</th>
					    <th>Id du bateau</th>
					    <th>Prix depuis la dernière actualisation</th>
					    <th><a href="#" id="reloadDay"><span class="glyphicon glyphicon-refresh"/></a></th>
				  	</tr>
					</thead>
					<tbody id="enchereJour">
					</tbody>
				</table>
      </div>
		</div>
		<span id="alerteJour"></span>
	</div>
	<div id="enValid">
		<div class="page-header">
  		<h2><small>Enchère à valider</small></h2>
		</div>
    <div class="panel panel-default">
      <div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
					  <tr>
					    <th>Id Lot</th>
							<th>Id Bateau</th>
	            <th>Date Pêche</th>
					    <th>Acheteur</th>
					    <th>Meilleure Enchère</th>
					    <th>Validation</th>
					    <th><a href="#" id="reloadValid"><span class="glyphicon glyphicon-refresh"/></a></th>
					  </tr>
					</thead>
					<tbody id="enchereValid">
					</tbody>
				</table>
				<span id="alerteValid"></span>
	    </div>
		</div>
		<div class="alert alert-success fade in" id="success-alert" role="alert"><strong>Enchère validé !</strong></div>
    <div class="alert alert-danger fade in" id="danger-alert" role="alert"><strong>Enchère refusé.</strong></div>

	</div>
</div>
<script src="js/administration.js" charset="utf-8"></script>
