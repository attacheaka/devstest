<?php
if (isset($_GET['p'])) {
  
 
 $_GET['p'] = (int) $_GET['p'];


   $bd = new App\Database();
   $bd = $bd->getPDO();

   $req = $bd->prepare('SELECT * FROM patient WHERE id = ?');
   $req->execute([$_GET['p']]);
   $data_patient = $req->fetch();

    $ajHtmlVoir = OptionTopic("OptionVoir",$data_patient); 
    $ajHtmlSup = OptionTopic("OptionSup",$data_patient);

}

if (isset($_POST['addpatient'])) {
	
 if (isset($_GET['p'])) {
   
  $_GET['p'] = (int) $_GET['p'];

                  extract($_POST);


                   $bd = new App\Database();
                   $bd = $bd->getPDO();

                   $req = $bd->prepare('SELECT numero_piece_identite FROM patient WHERE numero_piece_identite = ?');
                   $req->execute([$numero_piece_identite]);

                    

                 
                if (isset($numero_piece_identite)) {
                          if (count($req->fetchAll()) > 0) {

                            echo "<center> <h2 style='color:red'> Attention : Le numero de piece d'identite existe déja  </h2> </center>";

                          }else{
                              $num = $bd->prepare('UPDATE patient SET 
                                     numero_piece_identite = ? WHERE id = ?');
                              $num->execute([$numero_piece_identite,$_GET['p']]);

                          }
                }


                  $ins = $bd->prepare('UPDATE patient SET 
                    nom = ?,
                    prenom = ?,
                    sexe = ?,
                    date_de_naissance = ?,
                    lieu_de_naissance = ?,
                    nationalite = ?,
                    taille = ?,
                    poids = ?,
                    adresse = ?,
                    numero = ?
                    WHERE id = ?
                    ');
                     
                  $ins->execute([
                
                       $nom,
                       $prenom,
                       $sexe,
                       $date_de_naissance,
                       $lieu_de_naissance,
                       $nationalite,
                       intval($taille),
                       intval($poids),
                       $adresse,
                       $numero,
                       $_GET['p']
                    ]); 

                header('Location: accueil');

                
                  

 }


}
