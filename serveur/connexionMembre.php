<?php
    define("CONNEXION","donnees/connexion.txt"); 

    // vérification si on peut ouvrir le fichier
    if(!$connex=fopen(CONNEXION,"r")) { 
        echo "Problème pour ouvrir le fichier connexion.txt"; 
        exit; 
    }

    $courriel=$_POST['courriel'];
    $motDePasse=$_POST['motDePasse'];

    $ligne=fgets($connex);
    while (!feof($connex)) {
        $tab=explode(";",$ligne);
        if ($tab[0] == $courriel) {
            echo "J'ai trouvé le fichier"; 
            exit; 
        }
        $ligne=fgets($connex);
    }
    $rep.="</table>";
    fclose($connex);
    echo $courriel;
?>