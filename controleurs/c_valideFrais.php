<?php
include("vues/v_sommaireC.php");
$idComptable = $_SESSION['idUtilisateur'];
$mois = getMois(date("d/m/Y"));
$action = $_REQUEST['action'];
    switch($action){
        case 'voirFiche':{
            $idVisiteur;
            $nom=$_REQUEST["visiteur"];
            include 'vues/v_voirFiche.php';
            break;
        }
    }
    
//$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$mois);
//$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$mois);
?>