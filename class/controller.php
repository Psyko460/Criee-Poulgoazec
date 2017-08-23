<?php
(session_status() === PHP_SESSION_ACTIVE)?: session_start();
// créer une vue
// table stats -> nbre de connexion -> derniere connexion -> date derniere enchere -> moyenne des encheres effectués ( total )
// vue nbr enchere par acheteur  ( enchere totale  et pas enchere fini )
function connection()
{
  $user = "root";
  $pass = "ArtemisLL";

  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=poulgoazec', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  }
  catch(Exception $e)
  {
    echo $e->getMessage();
  }
  return $bdd;
}

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'loadOffer' : loadOffer();break;
        case 'postOffer' : postOffer();break;
        case 'adminLoadOffer' : adminLoadOffer();break;
        case 'nbEnchereParAcheteur' : nbEnchereParAcheteur();break;
        case 'updateStats' : updateStats();break;
        case 'statistique' : statistique();break;
        case 'loadBasket' : loadBasket();break;
        case 'loadProfil' : loadProfil();break;
        case 'updateProfil' : updateProfil();break;
        case 'validAuction' : validAuction();break;
        case 'addLot' : addLot();break;
        case 'addBateau' : addBateau();break;
        case 'getSalle' : getSalle();break;
        case 'inscriptionSalle' : inscriptionSalle();break;
        case 'getAllSalle' : getAllSalle();break;
        case 'getAllInscrit' : getAllInscrit();break;
        case 'postPersonneSalle' : postPersonneSalle();break;
        case 'resetSalle' : resetSalle();break;
        case 'addSalle' : addSalle();break;
    }
}

function loadBasket() {
  try{
    $db = connection();
    $result = $db->query("SELECT l.id,l.DatePeche,l.dateEnchere,e.nomEspece,t.specification,q.libelle,b.tare,l.prixEnchere
                        FROM lot l,espece e,taille t,qualite q,bac b
                        WHERE e.id = l.Espece AND t.id = l.taille AND q.id = l.qualite AND b.id = l.Bac AND l.Acheteur = ".$_SESSION["id"]." ORDER BY l.dateEnchere");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

/* Faire en sorte que les offres affichées soit celles qui ont une validation = 0 et non 1 ou 2 */
function loadOffer() {
  try{
    $db = connection();
    $result = $db->query("SELECT L.id AS id_LOT, L.datePeche, L.Bateau, GREATEST(IFNULL(Pmax.enchereMax, 0), L.prixDepart) AS prixMax
                          FROM lot AS L
                          LEFT JOIN (SELECT P.Lot, P.datePeche, P.Bateau, MAX(P.prixEnchere) AS enchereMax
                              FROM poster AS P
                              GROUP BY P.Lot, P.DatePeche, P.Bateau) AS Pmax
                              ON L.id=Pmax.Lot AND L.datePeche=Pmax.datePeche AND L.Bateau=Pmax.Bateau
                          WHERE dateEnchere=CURDATE() AND valide=0");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

}

function postOffer() {
  try{
    $db = connection();
      if (!(empty($_POST['id_LOT']) || empty($_POST['datePeche']) || empty($_POST['Bateau']) || empty($_POST['enchere']))) {
        $q = $db->prepare('SELECT MAX(P.prixEnchere) AS prixMax FROM poster AS P WHERE P.Lot=:id_LOT AND P.datePeche=:datePeche AND P.Bateau=:id_BATEAU');
        $q->execute(array(
          ':id_LOT' => $_POST['id_LOT'],
          ':datePeche' => $_POST['datePeche'],
          ':id_BATEAU' => $_POST['Bateau']
        ));
        $r = $q->fetch();
        if ($r['prixMax'] < $_POST['enchere']) {
          $query = $db->prepare('INSERT INTO poster (prixEnchere, heureEnchere, Acheteur, Lot, datePeche, Bateau)'
                  . ' VALUES (:enchere, NOW(), :id_UTILISATEUR, :id_LOT, :datePeche, :id_BATEAU)');
          $query->execute(array(
            'enchere' => $_POST['enchere'],
            'id_UTILISATEUR' => $_SESSION['id'],
            'id_LOT' => $_POST['id_LOT'],
            'datePeche' => $_POST['datePeche'],
            'id_BATEAU' => $_POST['Bateau']
          ));
          $str = 'UPDATE lot SET acheteur='.$_SESSION['id'].', prixEnchere='.$_POST['enchere'].' WHERE Bateau='.$_POST['Bateau'].' AND id='.$_POST['id_LOT'].' AND DatePeche=""'.$_POST['datePeche'].'" ';
          $qry = $db->prepare($str);
          $qry->execute();
          echo('1');
        } else {
          echo '2';
        }
      }else{
        echo '3';
      }
      $db = null;
    }catch (PDOException $e) {
      echo $e->getMessage();
    }
}

function adminLoadOffer() {
  try {
    $db = connection();
    /*SELECT poster.lot, poster.bateau, poster.datePeche, any_value(acheteur.login) as acheteur, MAX(poster.prixEnchere) as prixEnchere
                          from poster
                          inner join lot on poster.lot = lot.id
                          inner join acheteur on poster.acheteur = acheteur.id
                          where lot.valide = 0
                          group by lot, bateau, datePeche*/
    $result = $db->query("SELECT lot.DatePeche, lot.Bateau, lot.id, acheteur.login, poster.prixEnchere, lot.valide
                          FROM lot, poster, acheteur
                          where valide = 0
                          AND poster.DatePeche = lot.DatePeche
                          AND poster.Bateau = lot.Bateau
                          AND poster.Lot = lot.id
                          AND poster.acheteur = lot.acheteur
                          AND acheteur.id = lot.acheteur");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function nbEnchereParAcheteur() {
  try{
    $db = connection();
    $result = $db->query("SELECT * FROM nbenchereparacheteur");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function updateStats() {
  try{
    $db = connection();
    $stmt = $db->prepare('CALL updateStats(:idAcheteur)');
    $stmt->execute(array(':idAcheteur' => $_SESSION["id"]));
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function statistique() {
  try{
    $db = connection();
    $result = $db->query("SELECT acheteur.login, timesConnect, lastConnect, avgEnchere
                          FROM stats
                          INNER JOIN acheteur ON acheteur.id = stats.acheteur");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function loadProfil(){
  try{
    $db = connection();
    $result = $db->query("SELECT * from acheteur where id = ".$_SESSION['id'].";");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function updateProfil(){
  try{
    $db = connection();
    $str = "UPDATE acheteur SET login='".$_POST['login']."', ville='".$_POST['ville']."', raisonSocialeEntreprise='".$_POST['rse']."', adresse='".$_POST['adresse']."', codePostale='".$_POST['cp']."' where id=".$_SESSION['id'].";";
    $query = $db->prepare($str);
    $query->execute();
    $db=null;
    echo('1');
  } catch (PDOException $e) {
    echo('2');
  }
}

function validAuction(){
  try{
  	$db = connection();
  	$requete = "UPDATE lot SET valide='1' WHERE id='".$_POST['id_LOT']."' AND Bateau='".$_POST['Bateau']."' AND DatePeche='".$_POST['datePeche']."' ";
  	$suppr = $db->prepare($requete);
  	$suppr->execute();
  	echo('1');
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function addLot(){
  try{
    $db = connection();
    $str = "INSERT INTO lot (DatePeche, Bateau, id, Espece, Taille, Presentation, Qualite, Bac, poidsBrutLot, prixEnchere, codeEtat, prixDepart) VALUES ('".$_POST['dp']."','".$_POST['bateau']."','".$_POST['idlot']."','".$_POST['espece']."','".$_POST['taille']."','".$_POST['presentation']."','".$_POST['qualite']."','".$_POST['bac']."','".$_POST['poidbrut']."','".$_POST['prixdepart']."','".$_POST['codeetat']."','".$_POST['prixdepart']."');";
    $query = $db->prepare($str);
    $query->execute();
    echo('1');
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function addBateau(){
  try{
    $db = connection();
    $str = "INSERT INTO bateau (nomBateau, immatriculationBateau) VALUES ('".$_POST['nom']."','".$_POST['immat']."');";
    $query = $db->prepare($str);
    $query->execute();
    echo('1');
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function getSalle(){
  try{
    $db = connection();
    $result = $db->query("SELECT salle FROM acheteur where id='".$_SESSION['id']."';");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function inscriptionSalle(){
  try{
    $db = connection();
    $str = "UPDATE acheteur SET salle='0' where id='".$_SESSION['id']."';";
    $query = $db->prepare($str);
    $query->execute();
    echo('1');
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function getAllSalle(){
  try{
    $db = connection();
    $result = $db->query("SELECT * FROM salle;");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function getAllInscrit(){
  try{
    $db = connection();
    $result = $db->query("SELECT * FROM acheteur WHERE salle IS NOT NULL;");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    echo json_encode($result->fetchAll());
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function postPersonneSalle(){
  try{
    $db = connection();
    $str = "UPDATE acheteur SET salle='".$_POST['salle']."' where id='".$_POST['id']."';";
    $query = $db->prepare($str);
    $query->execute();
    echo('1');
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function resetSalle(){
  try{
    $db = connection();
    $str = "UPDATE acheteur SET salle=NULL;";
    $query = $db->prepare($str);
    $query->execute();
    echo('1');
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function addSalle() {
  try{
    $db = connection();
    $str = "INSERT INTO salle (nom, capacite) VALUES ('".$_POST['nom']."','".$_POST['capacite']."');";
    $query = $db->prepare($str);
    $query->execute();
    echo('1');
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

/* Crptage des mot de passe de la base de données */

function cryptPasswordAcheteur(){
  try{
    $db = connection();
    $alter = "ALTER TABLE `acheteur` CHANGE COLUMN `pwd` `pwd` CHAR(255) NULL DEFAULT NULL AFTER `login`";
    $db->query($alter);
    $req = "SELECT id, pwd FROM acheteur";
    $rs = $db->query($req);
    $value = "";
    foreach ($rs->fetchAll() as $row)
    {
        $id = $row['id'];
        $pwd = hash('sha256', $row['pwd']);
        $req2= "UPDATE `acheteur` SET `pwd`='$pwd' WHERE `id`='$id';";
        $value .= $req2 . '<br>';
        $rs2 = $db->query($req2);
    }
    return $value;
    $db = null;
  }catch (PDOException $e) {
    echo $e->getMessage();
  }
}

?>
