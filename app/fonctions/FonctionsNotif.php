<?php

function msg_notif($mode,$type,$msg){
		if ($mode=='div') {
					if (isset($_SESSION['notifpar'])) {   
						foreach ($_SESSION['notifpar'] as $type => $msg) {
								
						  $msg = '<div class="alert alert-dismissible alert-'.$type.'">
									  <button type="button" class="close" data-dismiss="alert">&times;</button>
									  '.$msg.',
									</div>';
				               
						}
		       $_SESSION['notifpar'][$type];      
			   unset($_SESSION['notifpar']); 
		}
	
		}else if ($mode=='alerte') {
			
		}
}

