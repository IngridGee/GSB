<?php
    require_once("include/fct.inc.php");
    require_once ("include/class.pdogsb.inc.php");
    include("vues/v_entete.php") ;
    session_start();
    $pdo = PdoGsb::getPdoGsb();
    $estConnecte = estConnecte();
    if(!isset($_REQUEST['uc']) || !$estConnecte){
         $uc = 'connexion';
    }else{
        $uc = $_REQUEST['uc'];
    }
    switch($uc){
            case 'connexion':{
                    include("controleurs/c_connexion.php");break;
            }
            case 'gererFrais' :{
                    include("controleurs/c_gererFrais.php");break;
            }
            case 'etatFrais' :{
                    include("controleurs/c_etatFrais.php");break; 
            }
            case 'choixFrais':
                include 'controleurs/c_choixFrais.php';
                break;
            case'valideFrais':
                include 'controleurs/c_valideFrais.php';
                break;
    }
    include("vues/v_pied.php") ;
?>

