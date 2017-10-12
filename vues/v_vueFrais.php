<div id="contenu">
    <form method="POST"  action="index.php?uc=validationFrais&action=rembourser">
        <fieldset>
            <legend>Eléments forfaitisés</legend>
            <?php
                foreach( $lesLignes as $unFrais) 
		{
                        echo $libelle = $unFrais['libelle'];
			echo $montant=$unFrais['montant'];
			echo $id = $unFrais['id'];
                        
                }
            ?>
         </fieldset>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="modifier" type="submit" value="Modification" size="20" />
                <input id="annuler" type="reset" value="Effacer" size="20" />
            </p> 
        </div>
    </form>
</div>
  