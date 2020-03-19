<?php

$pagesTitle = 'Liste des partients';

$sqlpatient = 'SELECT id,numero_piece_identite,nom,prenom,sexe FROM patient LIMIT 50';
$datapatients = $bd->query($sqlpatient)->fetchAll();

