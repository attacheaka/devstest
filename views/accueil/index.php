<br><br>
<div class="container-fluid">
	<h2>Listes des partients </h2><br>

<a href='addpatient' class='btn btn-primary'> Ajouter un patient </a> <br><br>

<table class="table table-hover shadow" style="border:2px solid #4e73df;">

  <thead>

    <tr class="btn-primary">
      <th scope="col">Numéro pièce identité</th>
      <th scope="col"> nom </th>
      <th scope="col"> prénoms </th>
      <th scope="col"> sexe </th>
      <th scope="col"> Options </th>
    </tr>
  </thead>
  <tbody>

  <?php
  	if (count($datapatients) > 0) {
  		
  		foreach ($datapatients as $datapatient) {
  		    
            $ajHtmlVoir = OptionTopic("OptionVoir",$datapatient);
            $ajHtmlModif = OptionTopic("OptionModifier",$datapatient); 
            $ajHtmlSup = OptionTopic("OptionSup",$datapatient);  


  ?> 

    <tr >
      <th scope="row"> <?= $datapatient->numero_piece_identite ?> </th>
      <td> <?= $datapatient->nom ?> </td>
      <td> <?= $datapatient->prenom ?> </td>
      <td> <?= $datapatient->sexe ?> </td>
      <td>
        <?= $ajHtmlModif ?> 
        <?= $ajHtmlVoir ?>
        <?= $ajHtmlSup ?>
    </td>
    <?php
    } }else{
        echo "<td> Aucune donnée enregistrée  </td>";
    }
    ?>
    </tr>
 

  </tbody>
</table> 


</div>
 <br><br>