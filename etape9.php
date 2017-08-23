<?php
  foreach (glob("class/*") as $classFileName) {
      include $classFileName;
  }

  $class= array(
   "acheteur",
   "bac",
   "bateau",
   "espece",
   "lot",
   "peche",
   "poster",
   "presentation",
   "qualite",
   "taille"
  );

  try {
    $db = new PDO("mysql:host=localhost;dbname=poulgoazec", "root", "ArtemisLL");
    foreach ($class as $classe) {
      $q = $db->query("SELECT * FROM $classe");
      $q->setFetchMode(PDO::FETCH_CLASS, $classe);
      //add instancied classes into poulgoazec
      while ($tmp = $q->fetch()) {
        $poulgoazec[] = $tmp;
      }
    }
    $db = null;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

  echo '<table>';
  foreach ($poulgoazec as $tmp) {
    echo '<tr>';
    echo '<td>' . $tmp . '</td>';
    echo "</tr>\n";
  }
  echo '</table>';
?>
