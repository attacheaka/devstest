<?php

$pagesTitle = "Informations sur un patient";


if (isset($_GET['p'])) {
	 $_GET['p'] = (int) $_GET['p'];

  $db = new App\Database();
  $db = $db->getPDO();
       //On récupère les infos  sur le patient 
        $query=$db->prepare('SELECT  *
       FROM patient WHERE id= ?');
       $query->execute([$_GET['p']]);
       $datapatient=$query->fetch();

 $ajHtmlModif = OptionTopic("OptionModifier",$datapatient); 
 $ajHtmlSup = OptionTopic("OptionSup",$datapatient);  
}

