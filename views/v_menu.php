<nav class="navbar navbar-inverse" id="menuList">
    <div class="container-fluid">
    <div class="navbar-header">
        <div class="navbar-brand">
            <?php
            $nom = str_replace('_', ' ', $_SESSION['login']);
            echo ucwords($nom);
            ?>
        </div>
    </div>
      <ul class="nav navbar-nav">
         <li>
            <a class="changePageOffre"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> Offres</a>
         </li>
         <?php
         try
	       {
      	  	$dbh = new PDO("mysql:host=localhost;dbname=poulgoazec", "root", "ArtemisLL");
      	  	$query = "SELECT numHabilitation from acheteur where login = '".$_SESSION['login']."'";
        		$res = $dbh->query($query);
        		if($resFetch = $res->Fetch()){
        			if($resFetch['numHabilitation']==1){
        				echo '<li>';
        				echo '<a class="changePageAdmin"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Administration</a>';
        				echo '</li>';
                echo '<li>';
        				echo '<a class="changePageStats"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Statistiques</a>';
        				echo '</li>';
                echo '<li>';
        				echo '<a class="changePageAjouts"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouts</a>';
        				echo '</li>';
                echo '<li>';
        				echo '<a class="changePageSalleAdmin"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Gestion salle</a>';
        				echo '</li>';
        			}else{
        				echo '<li>';
        				echo '<a class="changePagePanier"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Panier</a>';
        				echo '</li>';
        			}
    		    }
      	}
      	catch (Exception $e)
      	{
      	  echo "Unable to connect: " . $e->getMessage() ."<p>";
      	}
         ?>
       <li>
          <a class="changePageProfil"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</a>
       </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
         <li class="">
          <a href="/poulgoazec"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Déconnexion</a>
         </li>
       </ul>
     </div>
</nav>
