<?php
    define("CONNEXION","donnees/connexion.txt"); 

    // vérification si on peut ouvrir le fichier
    if(!$connex=fopen(CONNEXION,"r")) { 
        echo "Problème pour ouvrir le fichier connexion.txt"; 
        exit; 
    }
    
    $courriel=$_POST['courrielMembre'];
    $motDePasse=$_POST['motDePasseMembre'];
    
    $ligne=fgets($connex);
    $trouverCourriel=false;
    
    while (!feof($connex) && !$trouverCourriel) {
        $tab=explode(";",$ligne);
        if ($tab[0] === $courriel) {
            $trouverCourriel=true;
        }
        else {
            $ligne=fgets($connex);
        }
    }
    fclose($connex);

    if($trouverCourriel){
        if ($motDePasse===$tab[1]) {
            header("Location: ../public/pages/membre.html");
        } 
        else {
            header("Location: connexionErreur.php");
        }
    }
    else {
        echo "Le courriel ne se trouve pas dans la base de donnée. Veuillez vous enregistrer.";
    }
    
?>