<?php

if (isset($_GET['p'])){
	      $bd = new App\Database();
		  $bd = $bd->getPDO();
		
	      $delpatient = $bd->prepare('DELETE FROM patient WHERE id = ?');
	      $delpatient->execute([$_GET['p']]);


	      $_SESSION['flash']['success'] = "patient supprimé  ";
	      header('Location: accueil');

}