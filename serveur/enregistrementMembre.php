<?php
    define("FICHIERMEMBRES","membres/membres.txt"); 
    define("CONNEXION","donnees/connexion.txt"); 

// vérification si on peut ouvrir les fichiers
    if(!$enreg=fopen(FICHIERMEMBRES,"a+")) { 
        echo "Problème pour ouvrir le fichier membres.txt"; 
        exit; 
    }
    if(!$connex=fopen(CONNEXION,"a+")) { 
        echo "Problème pour ouvrir le fichier connexion.txt"; 
        exit; 
    }

// attribuer des valeurs aux variables
    $prenom=$_POST['prenom']; 
    $nom=$_POST['nom']; 
    $courriel=$_POST['courriel'];
    $sexe=$_POST['sexe'];
    $naissance=$_POST['naissance'];
    $motDePasse=$_POST['motDePasse'];
    $statut='A';
    $role='M';

    // Vérifier si le courriel se retrouve déjà dans la base de donnée
    while (!feof($connex) && !$trouverCourriel) {
        $tab=explode(";",$ligne);
        if ($tab[0] === $courriel) {
            $trouverCourriel=true;
        }
        else {
            $ligne=fgets($connex);
        }
    }

    if ($trouverCourriel){
        // redirection vers la page erreur
        header("Location: ../public/pages/dejaEnregistre.php");
        exit;
    } else {
        // écrire dans le fichier d'enregistrement membres
        $ligneEnreg=$prenom.";".$nom.";".$courriel.";".$sexe.";".$naissance.";\n";
        fputs($enreg,$ligneEnreg);
        fclose($enreg);
        
        // Écrire dans le fichier connexion
        $ligneConnex=$courriel.";".$motDePasse.";".$statut.";".$role.";\n";
        fputs($connex,$ligneConnex);
        fclose($connex);

        // redirection vers la page succès
        header("Location: ../public/pages/enregistrementSucces.php");
        exit;
    }


    
?>
