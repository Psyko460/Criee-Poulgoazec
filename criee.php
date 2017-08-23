<?php
	session_start();
	include './class/controller.php';
	$login=$_REQUEST['login'];
	$pwd=$_REQUEST['pwd'];
		try
		{
		  $db =  new PDO("mysql:host=localhost;dbname=poulgoazec", "root", "ArtemisLL");
			$query = "SELECT id, pwd from acheteur where login = '$login'";

			$res = $db->query($query);
			$row = $res->fetch();
			if(hash('sha256', $pwd) == $row['pwd']) {
				$_SESSION['login'] = $_REQUEST['login'];
				$_SESSION['pwd'] = $_REQUEST['pwd'];
				$_SESSION["id"]= $row["id"];
				updateStats();
				include("./views/v_criee.php");
			}else{
				header('Location: index.php');
			}
			$db = null;
		}	catch (Exception $e) {
		  echo "Unable to connect: " . $e->getMessage() ."<p>";
		}

?>
