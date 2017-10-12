<?php
include("vues/v_sommaireC.php");
$idVisiteur = $_SESSION['idUtilisateur'];
$mois=$_SESSION["mois"];
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];
    switch($action){
        case 'voirFiche':{
            $nomVisiteur=$_SESSION["visiteur"];
            $pdo->getLesInfosFicheFrais($idVisiteur,$mois);
            include 'vues/v_voirFiche.php';
            break;
        }
        case 'supprimerFrais':{
		$idFrais = $_REQUEST['idFrais'];
                $pdo->refuserFraisHorsForfait($idFrais);
		break;
        }
    }

?>