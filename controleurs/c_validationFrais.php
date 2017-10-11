<?php
include("vues/v_sommaireC.php");
$idComptable = $_SESSION['idUtilisateur'];
$mois = getMois(date("d/m/Y"));
$action = $_REQUEST['action'];
    switch($action){
        case 'selectMois':{
            include 'vues/v_choixMois.php';
            break;
        }
    }
?>