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
            $leRole=$tab[3];
            $trouverCourriel=true;
        }
        else {
            $ligne=fgets($connex);
        }
    }

    fclose($connex);
    echo "le courriel a été truouvé<br>".$tab[0]." ".$tab[1]." ".$tab[2]." ".$tab[3]."<br>";
    if($trouverCourriel && $motDePasse === $tab[1]){
        switch ($leRole) {
            case 'A': 
                header("Location: ../public/pages/admin.php");
                break;
            case 'E': 
                header("Location: ../public/pages/employe.php");
                break;
            case 'M': 
                header("Location: ../public/pages/membre.php");
                break;
            default: 
                
        }
    }
    else {
        echo "Le courriel ne se trouve pas dans la base de donnée. Veuillez vous enregistrer.";
    }
    
?>