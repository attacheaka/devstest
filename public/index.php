<?php
session_start();

define('WEBROOT', dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('HOST',$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']);
define('URLRACINE',dirname(dirname($_SERVER['SCRIPT_NAME'])));
define('URLENCOURS', str_replace('url=','',$_SERVER['QUERY_STRING']));


require ROOT.'/vendor/autoload.php';
 
require ROOT.'/app/RequireFonctions.php';
$bd = new App\Database();
$config = App\Config::getInstance();

$p = $_GET['url'];

ob_start() ;

switch ($p) {
     
      case '':
          require ROOT.'/logique/accueil/index.php';
          require ROOT.'/views/accueil/index.php';
      break;

      case 'accueil':
          require ROOT.'/logique/accueil/index.php';
          require ROOT.'/views/accueil/index.php';
      break;

      case 'patient':
          require ROOT.'/logique/accueil/patient.php';
          require ROOT.'/views/accueil/patient.php';
      break;

      case 'delete':
          require ROOT.'/logique/accueil/delete.php';
      break;


      case 'update':
          require ROOT.'/logique/accueil/modifier_patient.php';
          require ROOT.'/views/accueil/modifier_patient.php';
      break;
      
   
   

      default:
          require ROOT.'/views/404.php'; 
      break;

    }

$content = ob_get_clean();

require  ROOT.'/views/default.php' ;
