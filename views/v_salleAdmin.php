<?php
session_start();
?>
<div style="margin-left: 15%;margin-right: 15%;padding-bottom: 15px;">
  <button class="btn btn-default" id="resetSalle">Remise à zéro des salles</button>
	<div class="page-header">
  	<h2>Gestion salle</h2>
	</div>
  <div class="table-responsive">
    <div class="panel panel-default">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Capacité</th>
          </tr>
        </thead>
        <tbody id="tSalle">
        </tbody>
      </table>
    </div>
  </div>

  <div class="table-responsive">
    <div class="panel panel-default">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Salle</th>
            <th><a href="#" id="reload"><span class="glyphicon glyphicon-refresh"/></a></th>
          </tr>
        </thead>
        <tbody id="tPersonne">
        </tbody>
      </table>
    </div>
  </div>
  <div class="alert alert-success fade in" id="success-alert" role="alert"><strong>Acheteur mis dans une salle !</strong></div>
  <div class="alert alert-danger fade in" id="danger-alert" role="alert"><strong>Erreur, veuillez recommencer.</strong></div>
</div>
<script src="js/gestSalle.js" charset="utf-8"></script>
