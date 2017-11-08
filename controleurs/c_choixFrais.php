<?php
include("vues/v_sommaireC.php");
$idComptable = $_SESSION['idUtilisateur'];
$mois = getMois(date("d/m/Y"));
$action = $_REQUEST['action'];
    switch($action){
        case 'selectMois':{
            $lesMois=$pdo->getLesMois();
            // Afin de sélectionner par défaut le dernier mois dans la zone de liste
            // on demande toutes les clés, et on prend la première,
            // les mois étant triés décroissants
            $lesCles = array_keys( $lesMois );
            $moisASelectionner = $lesCles[0];
            include 'vues/v_choixMois.php';
            break;
        }
        case 'voirVisiteur':{
            $_SESSION["mois"]=$mois=$_REQUEST['mois'];
            $lesVisiteur=$pdo->getLesVisiteur($mois);
            $_SESSION["idVisiteur"]=$_SESSION['id'];
            include 'vues/v_choixVisiteur.php';
            break;
        }
    }
?>