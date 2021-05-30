var messageSucces = "";

// fermer le modal enregistrer et ouvrir le modal connexion
function connexionModal() {
    $('#enregistrer').modal('hide');
    $('#connexion').modal('show');
}

// fermer le modal connexion et ouvrir le modal enregistrer
function enregistrementModal() {
    $('#connexion').modal('hide');
    $('#enregistrer').modal('show');
}



// ------- Fonctions de validation des formulaires ------- //
// valider le formulaire d'enregistrement
function validerFormEnreg(formulaire) {
    let prenom = formulaire.prenom.value; // mettre le prénom entré dans une variable
    let nom = formulaire.nom.value; // mettre le nom entré dans une variable
    let courriel = formulaire.courriel.value; // mettre le courriel entré dans une variable
    let motDePasse = formulaire.motDePasse.value; // mettre le mot de passe entré dans une variable
    let repeterMDP = formulaire.repeterMDP.value; // mettre la confirmation du mot de passe entré dans une variable
    let naissance = formulaire.naissance.value; // mettre la confirmation du mot de passe entré dans une variable
    let validationMDP; // pour la validation du mot de passe
    let validationCourriel; // pour la validation du courriel

    var mesPrenom = document.getElementById("messagePrenom"); // aller chercher l'élément messagePrenom
    var mesNom = document.getElementById("messageNom"); // aller chercher l'élément messageNom
    var mesCourriel = document.getElementById("messageCourriel"); // aller chercher l'élément messageCourriel
    var mesMdpErrone = document.getElementById("messageMdpErrone"); // aller chercher l'élément messageMdpErrone
    var mesConfMdpVide = document.getElementById("messageConfMdpVide"); // aller chercher l'élément messageConfMdpVide
    var mesConfMdpErrone = document.getElementById("messageConfMdpErrone"); // aller chercher l'élément messageConfMdpErrone
    var mesNaissance = document.getElementById("messageNaissance"); // aller chercher l'élément messageNaissance

    // lors de la validation cacher les messages d'erreur
    mesPrenom.style.display = "none";
    mesNom.style.display = "none";
    mesCourriel.style.display = "none";
    mesMdpErrone.style.display = "none";
    mesConfMdpVide.style.display = "none";
    mesConfMdpErrone.style.display = "none";
    mesNaissance.style.display = "none";

    // Vérifier que le champs Prénom ne soit pas vide
    if (prenom == '') { 
        mesPrenom.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } 
    
    // Vérifier que le champs Nom ne soit pas vide
    if (nom == '') { 
        mesNom.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } 

    if (courriel == '') { // si le courriel est vide
        mesCourriel.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } else { //sinon valider le courriel
        validationCourriel = validerCourriel(courriel); // appeler la fonction 
        if (validationCourriel == false) {  // si ça retourne false
            mesCourriel.style.display = "block"; // montrer le message d'erreur
            return false; // retourne false
        }
    }
    
    // validation du mot de passe
    validationMDP = verifierMotsDePasses(motDePasse, repeterMDP); // appeler la fonction 
    if (validationMDP == false) { // si ça retourne false
        return false; // retourne false
    } 
    
    // si la date de naissance est vide
    if (naissance == '') {
        mesNaissance.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } 
}



// valider que le courriel est bien rempli
function validerCourriel(courriel) {
    let regexCourriel = /(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@[*[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+]*/;
        
    if (!regexCourriel.test(courriel)) { // si le courriel ne se conforme pas à l'expression régulière
        return false; // retourne false
    } 
}



// valider le mot de passe
function validerMotsDePasses(motDePasse) {
    let regexMDP =  /^[a-zA-Z0-9_-]{8,10}$/;
    if (!regexMDP.test(motDePasse)) {  // si le mot de passe ne se conforme pas à l'expression régulière
        return false;  // retourne false
    } 
}


// valider les mots de passe identiques
function verifierMotsDePasses(psw, repPsw) {
    let motDePasse = psw; // mettre le paramètre dans la variable
    let repeterMDP = repPsw; // mettre le paramètre dans la variable
    let validation = validerMotsDePasses(motDePasse); // aller valider le mot de passe
    let mesMdpErrone = document.getElementById("messageMdpErrone"); // aller chercher l'élément messageMdpErrone
    let mesConfMdpVide = document.getElementById("messageConfMdpVide"); // aller chercher l'élément messageConfMdpVide
    let mesConfMdpErrone = document.getElementById("messageConfMdpErrone"); // aller chercher l'élément messageConfMdpErrone
        
    if (validation == false) {
        mesMdpErrone.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } else if (repeterMDP == '') { // Si la confirmation du mot de passe est vide
        mesConfMdpVide.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } else if (motDePasse != repeterMDP) { // Si les 2 mots de passes sont différents
        mesConfMdpErrone.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } else { //sinon
        return true; // retourne true
    }
}





/**** Pour la connexion ****/
function validerConnexion(formulaire) {
    let courriel = formulaire.courrielMembre.value; // mettre le courriel entré dans une variable
    let motDePasse = formulaire.motDePasseMembre.value; // mettre le mot de passe entré dans une variable
    let validationMDP; // pour la validation du mot de passe
    let validationCourriel; // pour la validation du courriel

    let mesCourriel = document.getElementById("messageCourrielMembre"); // aller chercher l'élément messageCourriel
    let mesMdpErrone = document.getElementById("messageMdpMembreErrone"); // aller chercher l'élément messageMdpErrone

    // lors de la validation cacher les messages d'erreur
    mesCourriel.style.display = "none";
    mesMdpErrone.style.display = "none";
    

    if (courriel == '') { // si le courriel est vide
        mesCourriel.style.display = "block"; // montrer le message d'erreur
        return false; // retourne false
    } else { //sinon valider le courriel
        validationCourriel = validerCourriel(courriel);
        if (validationCourriel == false) { 
            mesCourriel.style.display = "block"; // montrer le message d'erreur
            return false; // retourne false
        }
    } 
    
    // validation du mot de passe
    if (courriel!=='admin@streamtopia.com'){
        validationMDP = validerMotsDePasses(motDePasse);
        if (validationMDP == false) { 
            mesMdpErrone.style.display = "block"; // montrer le message d'erreur
            return false; // retourne false
        } 
    } else {return true;} // sinon ça retourne true
    
}