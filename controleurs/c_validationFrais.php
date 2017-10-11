<?php
include("vues/v_sommaireC.php");
$idComptable = $_SESSION['idUtilisateur'];
$mois = getMois(date("d/m/Y"));
$action = $_REQUEST['action'];
    switch($action){
        case 'selectMois':{
            echo'<select name="mois">
                <option>Janvier</option>
                <option>Février</option>
                <option>Mars</option>
                <option>Avril</option>
                <option>Mai</option>
                <option>Juin</option>
                <option>Juillet</option>
                <option>Août</option>
                <option>Spetembre</option>
                <option>Octobbre</option>
                <option>Novembre</option>
                <option>Décembre</option>
            </select>';

                break;
        }
    }
?>