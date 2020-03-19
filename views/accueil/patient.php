<br><br>
<div class="container-fluid">
	<h2> Informations sur le patient </h2><br>

<a href='addpatient' class='btn btn-primary'> Ajouter un patient </a> <br><br>

<table class="table table-hover shadow" style="border:2px solid #4e73df;">
  <thead>
    <tr class="btn-primary">
      <th scope="col"> </th>
      
    </tr>
    <tr>
      <?= $ajHtmlModif ?> 
      <?= $ajHtmlSup ?>
    </tr>
  </thead>
  <tbody>


    <tr >
      
      <td> 

         Numéro pièce d'identité :  <?= $datapatient->numero_piece_identite ?>  <br>
         Nom :    <?= $datapatient->nom  ?> <br>
         Prenoms :  <?= $datapatient->prenom  ?> <br>
         Sexe :  <?= $datapatient->sexe ?> <br> 
         Date de naissance :  <?= $datapatient->date_de_naissance ?> <br> 
         Lieu de naissance :  <?= $datapatient->lieu_de_naissance ?><br>
         Nationalité :  <?= $datapatient->nationalite ?> <br>
         Taille :  <?= $datapatient->taille." m" ?><br>
         Poids :  <?= $datapatient->poids." kg" ?><br> 
         Adresse : <?= $datapatient->adresse ?> <br>
         Numéro : <?= $datapatient->numero ?> <br>
    </td>
    </tr>

  </tbody>
</table> 


</div>
 <br><br>