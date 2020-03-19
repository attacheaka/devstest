<?php


if (isset($_POST['addpatient'])) {
	
	extract($_POST);

   save_input_data("add_patient",$_POST);

	 $bd = new App\Database();
   $bd = $bd->getPDO();

   $req = $bd->prepare('SELECT numero_piece_identite FROM patient WHERE numero_piece_identite = ?');
   $req->execute([$numero_piece_identite]);
   clear_input_data('add_patient');

    

 
if (count($req->fetchAll()) > 0) {

  echo "<center> <h2 style='color:red'> Attention : Le numero de piece d'identite existe déja  </h2> </center>";

}else{


  $ins = $bd->prepare('INSERT INTO patient(numero_piece_identite,nom,prenom,sexe,date_de_naissance,lieu_de_naissance,nationalite,taille,poids,adresse,numero) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
     
  $ins->execute([
       $numero_piece_identite,
       $nom,
       $prenom,
       $sexe,
       $date_de_naissance,
       $lieu_de_naissance,
       $nationalite,
       intval($taille),
       intval($poids),
       $adresse,
       $numero
    ]); 

clear_input_data('add_patient');
header('Location: accueil');

}


}
