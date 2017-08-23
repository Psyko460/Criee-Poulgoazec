<?php
session_start();
?>

<div style="margin-left: 15%;margin-right: 15%;padding-bottom: 15px;">
  <div class="page-header">
  <h2>Panier</h2>
  </div>
  <div class="panel panel-default">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Date Peche</th>
                  <th>Date Enchere</th>
                  <th>Nom Espece</th>
                  <th>Specification</th>
                  <th>Libelle</th>
                  <th>Tare</th>
                </tr>
            </thead>
            <tbody id="tabPanier">
            </tbody>
        </table>
    </div>
  </div>
</div>
<span id="alerte"/>
<script src="js/panier.js" charset="utf-8"></script>
