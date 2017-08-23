<?php
session_start();
?>
<div style="margin-left: 15%;margin-right: 15%;padding-bottom: 15px;">
	<div class="page-header">
  	<h2>Ajouts</h2>
	</div>
  <div class="page-header">
    <h2><small>Lots</small></h2>
  </div>
  <form id="form1">
    <div class="row">
     <div class="input-groupe col-lg-6">
       <label for="exampleInputEmail1">Date Pêche</label>
       <input type="date" class="form-control" id="dp" placeholder="">
     </div>
     <div class="input-groupe col-lg-6">
       <label for="exampleInputPassword1">Bateau</label>
       <input type="text" class="form-control" id="bateau" placeholder="">
     </div>
    </div>
    <div class="row">
     <div class="input-groupe col-lg-6">
       <label for="exampleInputEmail1">Id Lot</label>
       <input type="text" class="form-control" id="idlot" placeholder="">
     </div>
     <div class="input-groupe col-lg-6">
       <label for="exampleInputPassword1">Prix Départ</label>
       <input type="text" class="form-control" id="prixdepart" placeholder="">
     </div>
    </div>
    <div class="row">
     <div class="input-groupe col-lg-6">
       <label for="exampleInputEmail1">Espece</label>
       <input type="text" class="form-control" id="espece" placeholder="">
     </div>
     <div class="input-groupe col-lg-6">
       <label for="exampleInputPassword1">Taille</label>
       <input type="text" class="form-control" id="taille" placeholder="">
     </div>
    </div>
    <div class="row">
     <div class="input-groupe col-lg-6">
       <label for="exampleInputEmail1">Presentation</label>
       <input type="text" class="form-control" id="presentation" placeholder="">
     </div>
     <div class="input-groupe col-lg-6">
       <label for="exampleInputPassword1">Qualite</label>
       <input type="text" class="form-control" id="qualite" placeholder="">
     </div>
    </div>
    <div class="row">
     <div class="input-groupe col-lg-6">
       <label for="exampleInputEmail1">Bac</label>
       <input type="text" class="form-control" id="bac" placeholder="">
     </div>
     <div class="input-groupe col-lg-6">
       <label for="exampleInputPassword1">Poids Brut Lot</label>
       <input type="text" class="form-control" id="poidbrut" placeholder="">
     </div>
    </div>
    <div class="row">
     <div class="input-groupe col-lg-6">
       <label for="exampleInputEmail1">Date Enchère</label>
       <input type="date" class="form-control" id="dateenchere" placeholder="">
     </div>
     <div class="input-groupe col-lg-6">
       <label for="exampleInputPassword1">Code Etat</label>
       <input type="text" class="form-control" id="codeetat" placeholder="">
     </div>
    </div>
     <button type="submit" class="btn btn-default" id="submitLot">Enregistrer</button>
    </form>
    <div class="alert alert-success fade in" id="success-alert" role="alert"><strong>Ajout effectué !</strong></div>
    <div class="alert alert-danger fade in" id="danger-alert" role="alert"><strong>Ajout refusé.</strong></div>

    <div class="page-header">
      <h2><small>Bateau</small></h2>
    </div>
    <form id="form2">
      <div class="row">
       <div class="input-groupe col-lg-6">
         <label for="exampleInputPassword1">Nom Bateau</label>
         <input type="text" class="form-control" id="nomBateau" placeholder="">
       </div>
       <div class="input-groupe col-lg-6">
         <label for="exampleInputEmail1">Immatriculation</label>
         <input type="text" class="form-control" id="immat" placeholder="">
       </div>
      </div>
      <button type="submit" class="btn btn-default" id="submitBateau">Enregistrer</button>
      </form>
      <div class="alert alert-success fade in" id="success-alert2" role="alert"><strong>Ajout effectué !</strong></div>
      <div class="alert alert-danger fade in" id="danger-alert2" role="alert"><strong>Ajout refusé.</strong></div>

			<div class="page-header">
	      <h2><small>Salle</small></h2>
	    </div>
	    <form id="form3">
	      <div class="row">
	       <div class="input-groupe col-lg-6">
	         <label for="exampleInputPassword1">Nom salle</label>
	         <input type="text" class="form-control" id="nomSalle" placeholder="">
	       </div>
	       <div class="input-groupe col-lg-6">
	         <label for="exampleInputEmail1">capacite</label>
	         <input type="text" class="form-control" id="capacite" placeholder="">
	       </div>
	      </div>
	      <button type="submit" class="btn btn-default" id="submitSalle">Enregistrer</button>
	      </form>
	      <div class="alert alert-success fade in" id="success-alert3" role="alert"><strong>Ajout effectué !</strong></div>
	      <div class="alert alert-danger fade in" id="danger-alert3" role="alert"><strong>Ajout refusé.</strong></div>

</div>
<script src="js/ajouts.js" charset="utf-8"></script>
