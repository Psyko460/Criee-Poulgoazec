<?php
session_start();
?>
<div style="margin-left: 15%;margin-right: 15%;padding-bottom: 15px;">
	<div class="page-header">
  	<h2>Statistiques</h2>
	</div>
	<div id="statsParAcheteur">
		<div class="page-header">
  		<h2><small>Nombre enchère validée par acheteur</small></h2>
		</div>
		<div class="table-responsive">
      <div class="panel panel-default">
				<table class="table table-bordered table-striped">
					<thead>
				  	<tr>
					    <th>Nom acheteur</th>
					    <th>Nombre enchère validée</th>
					    <th><a href="#" id="reloadParAcheteur"><span class="glyphicon glyphicon-refresh"/></a></th>
				  	</tr>
					</thead>
					<tbody id="nbEnchereValide">
					</tbody>
				</table>
      </div>
		</div>
    <span id="alerteStats1"></span>
	</div>

	<div id="stats">
		<div class="page-header">
  		<h2><small>Statistiques</small></h2>
		</div>
		<div class="table-responsive">
      <div class="panel panel-default">
				<table class="table table-bordered table-striped">
					<thead>
				  	<tr>
					    <th>Nom acheteur</th>
					    <th>Nombre de connexion</th>
							<th>Dernière connexion</th>
							<th>Moyenne des enchères</th>
					    <th><a href="#" id="reloadStats"><span class="glyphicon glyphicon-refresh"/></a></th>
				  	</tr>
					</thead>
					<tbody id="statsBody">
					</tbody>
				</table>
      </div>
		</div>
    <span id="alerteStats2"></span>
	</div>
</div>
<script src="js/require.js" charset="utf-8"></script>
<script src="js/stats.js" charset="utf-8"></script>
