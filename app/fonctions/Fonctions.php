<?php

 //  fonctionn pour enregistrer les donnees dans les inputs 

    if (!function_exists('save_input_data')) {
                function save_input_data($name,$data){
                    $_SESSION[$name] = $data;
                }
            }


    if (!function_exists('get_input')) {
                function get_input($name,$key){                  
                    return !empty($_SESSION[$name][$key]) 
                    ? $_SESSION[$name][$key] 
                    : ' ';
                }
            }

 

 if (!function_exists('clear_input_data')) {
                    function clear_input_data($name){
                        if (isset($_SESSION[$name])) {
                             $_SESSION[$name] = [] ;
                            
                        }
                    }
                }


// 

  function OptionTopic($string, $datas=null){


           if ($string =='OptionModifier') {
  
                      $ajHtml = "<a href=modifier>  <i class=\"fas fa-book fa-md\"></i> </a> ";

             
           }elseif ($string =='OptionVoir'){
               $ajHtml = "  &nbsp; <a href=patient&p=".$datas->id.">  <i class=\"fas fa-eye fa-md\"></i>  </a> ";
           }elseif ($string=="OptionSup") {         
                          
                    $ajHtml = ' &nbsp; <i  class="fas fa-trash-alt fa-md text-primary" data-toggle="modal" data-target="#myModal2'.$datas->id.'">  </i>';
                    $ajHtml .= '
                         <div class="modal fade" id="myModal2'.$datas->id.'">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h4 class="modal-title">Voulez-vous vraiment supprimer ce partient: '.$datas->nom." ".$datas->prenom.' de votre registre ? </h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       </div>
                                        <div class="modal-body">
                                            
                                             <center>
                                             <p> Cette action est irrervible  </p>
                                                <a class="btn btn-danger" href="delete&p='.$datas->id.'"> Oui  </a>
                                                 <button type="button" class="btn btn-primary" data-dismiss="modal">Non</button>
                                            </center>
                                      </div>
                                  </div>
                                </div>
                        </div>';
              
               
           }else{
              $ajHtml = "Imposssible d'activer la fonctionnalité ";
           }
                   
  
           return $ajHtml;
       }

