<br><br>
<div class="container-fluid">
  <h2> Ajoutez un patient </h2><br>


<table class="table table-hover shadow" style="border:2px solid #4e73df;">
  <thead>
    <tr class="btn-primary">
      <th scope="col"> </th>
   
    </tr>
  </thead>
  <tbody>


    <tr >
      
      <td> 
     <form method="POST">
        <div class="row">
          
             <div class="col-md-6">
                                 <div class="form-group">
                                  <label for="piece">Numéro pièce d'identité</label>
                                  <input value="<?= get_input('add_patient','numero_piece_identite'); ?>" type="text" class="form-control" name="numero_piece_identite" id="piece" />
                     </div>

                      <div class="form-group">
                                  <label for="nom">Nom </label>
                                  <input  value="<?= get_input('add_patient','nom'); ?>" type="text" class="form-control" name="nom" id="nom" />
                     </div>

                       <div class="form-group">
                                  <label for="prenom">Prenoms</label>
                                  <input type="text"  value="<?= get_input('add_patient','prenom'); ?>" class="form-control" name="prenom" id="prenom" />
                     </div>

                       <div class="form-group">
                                  <label for="sexe">Sexe  </label>
                                  <select  name="sexe" id="sexe">
                                     <option value="<?= get_input('add_patient','sexe'); ?>">
                                        <?php if (isset($_SESSION['add_patient'])) {
                                            echo get_input('add_patient','sexe');
                                        }  ?>
                                     </option>
                                     <option value="M"> Masculin</option>
                                     <option value="F"> Feminin </option>
                                  </select>
                     </div>

                      <div class="form-group">
                                  <label for="date_de_naissance"> Date de naissance </label>
                                  <input type="date"  value="<?= get_input('add_patient','date_de_naissance'); ?>"  class="form-control" name="date_de_naissance" id="date_de_naissance" />
                     </div>
                     
                     <div class="form-group">
                                  <label for="lieu_de_naissance">Lieu de naissance</label>
                                  <input type="text"  value="<?= get_input('add_patient','lieu_de_naissance'); ?>"  class="form-control" name="lieu_de_naissance" id="lieu_de_naissance" />
                     </div>


                     <div class="form-group">
                                  <label for="nationalite">Nationalite</label>
                                  <input type="text"  value="<?= get_input('add_patient','nationalite'); ?>"  class="form-control" name="nationalite" id="nationalite" />
                     </div>


                     <div class="form-group">
                                  <label for="taille"> Taille</label>
                                  <input type="text"  value="<?= get_input('add_patient','taille'); ?>" class="form-control" name="taille" id="taille" />
                     </div>


                     <div class="form-group">
                                  <label for="poids">Poids </label>
                                  <input type="text"  value="<?= get_input('add_patient','poids'); ?>"  class="form-control" name="poids" id="poids" />
                     </div>

                        <div class="form-group">
                                  <label for="adresse"> Adresse </label>
                                  <input type="text"  value="<?= get_input('add_patient','adresse'); ?>"  class="form-control" name="adresse" id="adresse" />
                     </div>


                        <div class="form-group">
                                  <label for="numero"> Numéro </label>
                                  <input type="text"  value="<?= get_input('add_patient','numero'); ?>"  class="form-control" name="numero" id="numero" />
                     </div>


                       <button type="sublmite" class="btn btn-primary" name="addpatient"> Enregistrer </button>
     
             </div>
        </div> 
    </form>
    </td>
    </tr>


  </tbody>
</table> 


</div>
 <br><br>