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

// écrire dans le fichier d'enregistrement membres
    $ligneEnreg=$prenom.";".$nom.";".$courriel.";".$sexe.";".$naissance."\n";
    fputs($enreg,$ligneEnreg);
    fclose($enreg);
    
// Écrire dans le fichier connexion
    $ligneConnex=$courriel.";".$motDePasse.";".$statut.";".$role."\n";
    fputs($connex,$ligneConnex);
    fclose($connex);

// redirection vers la page succès
    header("Location: ../public/pages/succes.html");
    
?>
