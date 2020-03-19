<?php
namespace App\packages;

/**
 *  Component popup by Attache 
 */
class Bootstrap_popup
{
	
	private $header;
	private $body;
	private $footer;


	public function __construct(string $header=null,string $body=null,string $footer=null)
	{
		$this->header = $header;
		$this->body = $body;
		$this->footer = $footer;
	}
   


    public function Ti_default($datas=null,$icon,$id): string {

      if ($_SESSION['auth']->membre_id == $datas->post_createur) {           
                          

          	$details = '<i  class="'.$icon.'" data-toggle="modal" data-target="#myModal'.$id.'">  </i>';
                      $details .= '
                          
                           <div class="modal fade" id="myModal'.$id.'">
                                  <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                         <div class="modal-header">
                                             '.$this->header.'
                                         </div>
                                          <div class="modal-body">
                                            '.$this->body.'
                                       </div>
                                    </div>
                                  </div>
                          </div>';

       }else{
          $details = '';
       }
       return $details;

    }




}
