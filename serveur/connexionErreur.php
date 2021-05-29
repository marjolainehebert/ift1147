<?php
    define("CONNEXION","donnees/connexion.txt"); 

    // vérification si on peut ouvrir le fichier
    if(!$connex=fopen(CONNEXION,"r")) { 
        echo "Problème pour ouvrir le fichier connexion.txt"; 
        exit; 
    }
    
    $courriel=$_POST['courrielMembre'];
    $motDePasse=$_POST['motDePasseMembre'];

?>

<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../public/utilitaires/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/style.css" type="text/css">
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css">
    <script src="../public/javascript/fonctions.js"></script>
    <!-- Javascript -->

<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <div class="logo">
                            <img src="../public/images/streamtopia.png" alt="StreamTopia">
                            <a href="../index.html">
                                StreamTopia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Header End -->

    

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                        echo "<h2 class='text-center'>Vous n'avez pas le bon mot de passe</h2>";
                        echo "<div class=\"modal-dialog\">\n";
echo "            <div class=\"modal-content\">\n";
echo "                <div class=\"modal-header\">\n";
echo "                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Connexion</h5>\n";
echo "                </div>\n";
echo "                <div class=\"modal-body\">\n";
echo "                    <form class=\"formulaires\" id=\"connexionFrom\" name=\"connexionFrom\" action=\"serveur/connexionMembre.php\" method=\"POST\" onsubmit=\"return validerConnexion(this);\">\n";
echo "                        <label for=\"courrielMembre\"><b>Courriel</b></label><br>\n";
echo "                        <div id=\"messageCourrielMembre\">Entrez une adresse courriel valide dans le format votrenom@domaine.com</div>\n";
echo "                        <input type=\"text\" placeholder=\"Entrez votre adresse courriel\" name=\"courrielMembre\" id=\"courrielMembre\" value='".$tab[0]."' readonly/>\n";
echo "                        \n";
echo "                        <label for=\"motDePasseMembre\"><b>Mot de passe</b></label><br>\n";
echo "                        <div id=\"messageMdpMembreVide\">Entrez un mot de passe</div>\n";
echo "                        <div id=\"messageMdpMembreErrone\">Le mot de passe doit contenir entre 8 et 10 caractères. Les caractères acceptés sont les lettres minuscules et majuscules, les chiffres, les tirets et les caractères de soulignement.</div>\n";
echo "                        <input type=\"password\" placeholder=\"Entrez le mot de passe\" name=\"motDePasseMembre\" id=\"motDePasseMembre\">\n";
echo "                        \n";
echo "                        <div class=\"modal-footer\">\n";
echo "                            <a class=\"btn btn-light\" href='../index.html'>Annuler</a>\n";
echo "                            <button type=\"submit\" class=\"btn btn-warning\">Se connecter</button>\n";
echo "                        </div>\n";
echo "                    </form>\n";
echo "                </div>\n";
echo "                <div class=\"modal-footer text-center\">\n";
echo "                    <p class='text-center'>Vous n'avez pas de compte? <br>Créez en un à partir de la <a href='../index.html' class='dark-link'>page d'accueil</a></p>\n";
echo "\n";
echo "                </div>\n";
echo "            </div>\n";
echo "        </div>";
                    ?>
                    
                    

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    
    

    
    



    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-left">
                        
                        <div class="logo">
                            <img src="../public/images/streamtopia.png" alt="StreamTopia">
                            <a href="../index.html">
                                StreamTopia
                            </a>
                        </div>
                        <ul>
                            <li>1234 rue Nom de la rue, Montréal, Qc H1H 1H1</li>
                            <li>Téléphone: 1 (800) 555-1234</li>
                            <li>Courriel: hello.colorlib@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Scripts -->
    <script>
        // on the footer of redirect page
        if (window.location.hash == "#openm") {
            $("#myModal").modal("show");
        }
    </script>
    



    <!-- Js Plugins -->
    <script src="../public/utilitaires/js/jquery-3.3.1.min.js"></script>
    <script src="../public/utilitaires/js/bootstrap.min.js"></script>
    <script src="../public/utilitaires/js/jquery-ui.min.js"></script>
    <script src="../public/utilitaires/js/jquery.countdown.min.js"></script>
    <script src="../public/utilitaires/js/jquery.nice-select.min.js"></script>
    <script src="../public/utilitaires/js/jquery.zoom.min.js"></script>
    <script src="../public/utilitaires/js/jquery.dd.min.js"></script>
    <script src="../public/utilitaires/js/jquery.slicknav.js"></script>
    <script src="../public/utilitaires/js/owl.carousel.min.js"></script>
    <script src="../public/utilitaires/js/main.js"></script>
