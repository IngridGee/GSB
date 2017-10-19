<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait
       </caption>
             <tr>
                <th class="date">Date</th>
				<th class="libelle">Libellé</th>  
                <th class="montant">Montant</th>  
                <th class="action">&nbsp;</th>              
             </tr>
          
    <?php    
	    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
		{
			$libelle = $unFraisHorsForfait['libelle'];
			$date = $unFraisHorsForfait['date'];
			$montant=$unFraisHorsForfait['montant'];
			$id = $unFraisHorsForfait['id'];
	?>		
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="index.php?uc=valideFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
                       onclick="return confirm('Voulez-vous vraiment refuser ce frais?');"><img src="images/supprime_icon.gif"></a></td>
                       <td><a href="index.php?uc=valideFrais&action=reportFrais&idFrais=<?php echo $id ?>" >reporter le frais</a></td>
            </tr>
	<?php		 
                    }
	?>
</table>