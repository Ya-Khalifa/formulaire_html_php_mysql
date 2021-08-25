<?php

if(isset($_POST['enregistrer']))
{
    include "recupBD.php";
    function enregitrement($donnees)
    {
        $donnees = trim($donnees);
        $donnees = stripcslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }


    //creation des varibles aux noms correspondants aux attributs de notre table dans la BD 

    $nom = enregitrement($_POST['nom']);
    $prenom = enregitrement($_POST['prenom']);
    $adresse = enregitrement($_POST['adresse']);

    //message apres enregistrement(libre)

    echo "Merci ".$prenom. " " .$nom.",vous etes ajouté ! ";

    // precision des champs obligatoires

    if (empty($nom)) {
        header("Location: formulaire.php? error = ce champs est obligatoire");
    }
    elseif(empty($prenom))
    {
        header("Location: formulaire.php? error = ce champs est obligatoire");
    }
    else {
        $insere_sql = "INSERT INTO tab_info(nom,prenom,adresse) VALUES ('$nom','$prenom','$adresse')";
        $execution = mysqli_query($connect, $insere_sql);
    }
}

?>