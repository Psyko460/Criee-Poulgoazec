<?php
session_start();
?>
<div style="margin-left: 15%;margin-right: 15%;padding-bottom: 15px;">
	<div class="page-header">
  	<h2>Profil</h2>
	</div>
  <form style="" role="form" id="form1" accept-charset="UTF-8" action="criee.php" method="POST">
    <fieldset>
      <div class="form-group input-group">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login
        </span>
        <input class="form-control" placeholder="Login" name="login" type="text" required="" autofocus="">
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Mot de passe
        </span>
        <input class="form-control" placeholder="Password" name="pwd" type="password" value="" required="" disabled>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Raison sociale entreprise
        </span>
        <input class="form-control" placeholder="Raison Sociale entreprise" name="rse" type="text" value="" required="" >
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-road" aria-hidden="true"></span> Adresse
        </span>
        <input class="form-control" placeholder="Adresse" name="adresse" type="text" value="" required="" >
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Ville
        </span>
        <input class="form-control" placeholder="Ville" name="ville" type="text" value="" required="" >
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Code postal
        </span>
        <input class="form-control" placeholder="Code postal" name="cp" type="text" value="" required="" >
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">
          <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Enregistrer
        </button>
      </div>
			<div class="form-group">
				<div class="alert alert-success fade in" id="success-alert" role="alert"><strong>Profil mis à jour !</strong></div>
		    <div class="alert alert-danger fade in" id="danger-alert" role="alert"><strong>Echec.</strong></div>
			</div>
    </fieldset>
  </form>
</div>
<script src="js/profil.js" charset="utf-8"></script>
