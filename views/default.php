<?php
   if (session_status()== PHP_SESSION_NONE){
      session_start();
   }
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title> <?= $pagesTitle ?? ' ' ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/font-awesome.css" rel="stylesheet">
     <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <script type="text/javascript" src="js/jquery-1.11.min.js"></script> 
    
  </head>


<body id="page-top" style="background-color: #f8f9fc;">
  <a href="accueil" class="btn btn-secondary"> Home</a>
    <?= $content ?>
   
</body>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/search-sbi.js"></script>


</html>
