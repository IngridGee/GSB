
    <div id="contenu">
      <h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee ?> de <?php echo $nomVisiteur?></h2>

			<?php   
                            $lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$mois);
                            include("vues/v_vueFrais.php");
                            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$mois);
                            include("vues/v_vueHorsFrais.php");
			?>
			
      </div>