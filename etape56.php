<!DOCTYPE HTML>
<html>

<head>
        <title>CRIEE PHP | POULGOAZEC</title>
        <meta charset="utf-8">
        <meta name="CRIEE PHP | POULGOAZEC" content="165c. uniques">
</head>


<body>

	<table border style="width:25%">
	<tr align="center">
       <th>id</th>
       <th>Bateau</th>
       <th>Immat</th>
	</tr>
<?php

try{
	$bdd=new PDO('mysql:host=127.0.0.1;dbname=poulgoazec','root','ArtemisLL', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$resultSet = $bdd->query("SELECT * FROM bateau");

	while($donnees=$resultSet->fetch())
	{
		?>
			<tr align="center">
	            <td> <?php echo $donnees['id'] ; ?> </td>
	            <td> <?php echo $donnees['nomBateau'] ; ?> </td>
	            <td> <?php echo $donnees['immatriculationBateau'] ?> </td>
	        </tr>
        <?php
	}
  $bdd = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
	</table>

<form action="insertionBateau.php" method="post" style="width:25%">
<p>
<fieldset>
    <legend>Insertion de Bateau dans la BDD Poulgoazec :</legend>
    Id Bateau:<br>
    <input type="text" name="idBateau"/></br>
    Nom Bateau:<br>
    <input type="text" name="nomBateau"/></br>
    Immatriculation Bateau:<br>
    <input type="text" name="immatriculationBateau"/></br>
    <input type="submit" value="Valider"/>
</fieldset>
</p>
</form>



</body>
</html>
