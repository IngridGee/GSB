<?php
include("vues/v_sommaireC.php");
//$idVisiteur = $_SESSION['id'];
$mois=$_SESSION["mois"];
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];
    switch($action){
        case 'voirFiche':{
            $idVisiteur=$_REQUEST["id"];
            echo $idVisiteur;
            $nom=$pdo->getNom($idVisiteur);
            $pdo->getLesInfosFicheFrais($idVisiteur,$mois);
            include 'vues/v_voirFiche.php';
            break;
        }
        case 'supprimerFrais':{
            $idFrais = $_REQUEST['idFrais'];
            $pdo->refuserFraisHorsForfait($idFrais);
            break;
        }
        case 'reportFrais':{
            $idFrais = $_REQUEST['idFrais'];
            $pdo->reporter($idFrais);
            break;
        }
        case 'rembourser':{
            $idFrais = $_REQUEST['idFrais'];
            $pdo->majEtatVlideFrais($idVisiteur,$mois);
            header("location:v_vueFrais.php");
            break;
        }
    }
?>