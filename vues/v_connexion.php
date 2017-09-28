<div id="contenu">

<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
    <fieldset>
        <legend> Identification utilisateur </legend>
        <label for="nom">Login*</label>
       <input id="login" type="text" name="login"  size="30" maxlength="45">
       
        <label for="mdp">Mot de passe*</label>
        <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
    </fieldset>
    <input type="submit" value="Valider" name="valider">
    <input type="reset" value="Annuler" name="annuler"> 
    
</form>

</div>