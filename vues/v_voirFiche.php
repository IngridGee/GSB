
    <div id="contenu">
      <h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee ?> de <?php echo $nomVisiteur?></h2>
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="corpsForm">
          
          
			<?php   
                            $lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$mois);
                            include("vues/v_vueFrais.php");
                            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$mois);
                            include("vues/v_vueHorsFrais.php");
			?>
			
      </div>
      </div>
        
      </form>