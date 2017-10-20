<form method="POST"  action="index.php?uc=valideFrais&action=rembourser">
        <fieldset>
            <legend>Eléments forfaitisés</legend>
            <?php
            $r=0;
                foreach ($lesFraisForfait as $unFrais)
                {
                    $_SESSION["idFrais"][$r] =$idFrais= $unFrais['idfrais'];
                    $libelle = $unFrais['libelle'];
                    $_SESSION["quantite"][$r]=$quantite = $unFrais['quantite'];
            ?>
                <p>
                    <label for="idFrais"><?php echo $libelle ?></label>
                    <input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
                </p>

            <?php
                $r++;    
                }
            ?>


			
         </fieldset>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="annuler" type="reset" value="Effacer" size="20" />
            </p> 
        </div>
    </form>