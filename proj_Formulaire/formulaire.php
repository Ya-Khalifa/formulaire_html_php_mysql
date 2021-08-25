<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>formulaire</title>
</head>
<body>
    <form action="connexion.php" method="post">
            <fieldset>
                <?php if(isset($GET['error'])) { ?>
                <div>
                    <?php echo "*champs obligatoire(s)"; ?> 
                </div>
                <?php } ?>
                <legend><strong>Informations Personnelles d'un étudiant</strong></legend>
                <div>
                    <label for="tourr"><strong> Nom:</strong></label>
                    <input type="text" name="nom" id="tourr"/>
                </div>
                <br><br>
                <div>
                    <label for="santt"><strong> Prenom:</strong></label>
                    <input type="text" name="prenom" id="santt"/>
                </div>
                <br><br>
                <div>
                    <label for="deukk"><strong>adresse:</strong></label>
                    <input type="text" name="adresse" id="deukk"/>
                </div>
                <br>
                <div>
                    <button type="submit" name="enregistrer">enregistrer</button>       
                </div>
            </fieldset>
        </form>  
</body>
</html>