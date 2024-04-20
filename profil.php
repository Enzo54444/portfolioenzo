<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

    .apropos {
        margin-left: 100px;
        font-size: 20px;
    }

    button {
        font-size: 16px;
        padding: 1em 3.3em;
        cursor: pointer;
        transform: perspective(200px) rotateX(15deg);
        color: white;
        font-weight: 900;
        border: none;
        border-radius: 5px;
        background: linear-gradient(0deg,
                rgba(63, 94, 251, 1) 0%,
                rgba(70, 135, 252, 1) 100%);
        box-shadow: rgba(63, 94, 251, 0.2) 0px 40px 29px 0px;
        will-change: transform;
        transition: all 0.3s;
        border-bottom: 2px solid rgba(70, 135, 252, 1);
    }

    button:hover {
        transform: perspective(180px) rotateX(30deg) translateY(2px);
    }

    button:active {
        transform: perspective(170px) rotateX(36deg) translateY(5px);
    }

    .bar-container {
        position: relative;
        width: 375px;
        margin: 10px;
        /* Ajuste la marge pour centrer la barre */
    }

    .bar-wrapper {
        border: 2px solid #4a4747;
        /* Couleur du cadre */
        border-radius: 5px;
        overflow: hidden;
        /* Pour masquer les coins du contenu débordant */
        position: relative;
        margin-top: 20px;
        /* Ajuste l'espacement entre la barre et le texte */
    }

    .bar {
        height: 3px;
        /* Ajustez la hauteur selon vos besoins */
        background-color: green;
        border-radius: 3px;
        /* Assurez-vous de mettre le même rayon pour les coins */
        transition: width 0.3s;
    }

    .bar-container {
        width: 300px;
        /* Réduire la largeur du conteneur de barres */
        margin: 10px auto;
        /* Centrer le conteneur de barres et réduire l'espace autour */
    }

    .data-container {
        margin-right: 10px;
        /* Réduire l'espace entre le texte et la barre */
    }

    .bar-container {
        width: 300px;
        /* Réduire la largeur du conteneur de barres */
        margin: 10px auto;
        /* Centrer le conteneur de barres et réduire l'espace autour */
    }

    .data-container {
        margin-right: 10px;
        /* Réduire l'espace entre le texte et la barre */
    }

    .selection {
        background-color: green;
        color: white;
    }

    .conteneur {
        position: relative;
        width: 100vw;
        /* Remplacez width: 100%; par width: 100vw; */
        height: 300px;
    }

    .bouton {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px 20px;
        background-color: #ffffff;
        color: #000000;
        border: 2px solid #000000;
        text-decoration: none;
        transition: background-color 1.3s, color 1.3s;
    }

    .bouton:hover {
        background-color: green;
        color: #ffffff;
    }

    h4 {
        color: green;
    }

    .footer {
        background-color: #24262b;
        padding: 70px 0;
    }

    .footer-col {
        width: 25%;
        padding: 0 15px;
    }

    .footer-col h4 {
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
        color: #24262b;
        background-color: #ffffff;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        margin: 20px auto;
        display: flex;
        justify-content: space-between;
    }

    .quality {
        width: calc(33.33% - 10px);
        /* 33.33% de la largeur moins les marges */
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        /* Effet d'ombre */
        margin-bottom: 20px;
        transition: transform 0.3s ease;
        /* Animation de transition au survol */
    }

    .quality:not(:last-child) {
        margin-right: 10px;
        /* Ajout d'une marge à droite sauf pour le dernier élément */
    }

    .quality:hover {
        transform: translateY(-5px);
        /* Légère translation vers le haut au survol */
    }

    .title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .description {
        font-size: 14px;
        color: #777;
    }

    .logo img {
        width: 100px;
        /* Réduire la taille du logo */
        height: auto;
        /* Assurez-vous que la hauteur s'ajuste automatiquement pour maintenir les proportions */
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: center;
        }

        .apropos {
            margin-left: 20px;
            /* Réduisez la marge pour les petits écrans */
            margin-right: 20px;
            /* Réduisez la marge pour les petits écrans */
            font-size: 16px;
            /* Réduisez la taille de la police pour les petits écrans */
        }

        .footer-col {
            width: 100%;
            /* Ajustez la largeur pour les petits écrans */
            margin-bottom: 20px;
            /* Ajoutez de l'espace entre les colonnes pour les petits écrans */

        }

    }
    </style>
</head>

<body>
    <header>
        <div class="toggle-menu"></div>

        <h3><span>Tomasso Enzo</span></h3>

        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="veilletechno.php">Veille Informationnelle</a></li>
            <li><a href="mesprojet.php">Mes Projets</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header>

    <div class="apropos">
        <h4>- A Propos de moi</h4>
    </div>
    <div class="apropos">
        Bonjour je m'appelle Enzo Tomasso j'ai 19 ans je suis actuellement en BTS SIO option SLAM au sein du
        lycée Voillaume à Aulnay-sous-Bois.
        Passionné par les technologies de l'information et les jeux vidéo.
        C’est tout naturellement que je me suis tourné vers ces études, en effectuant mes trois années d’études
        en BAC PRO SN option RISC, et mes deux années d’études en BTS SIO SLAM.
        <p>
    </div>

    </div>

    <div class="apropos">
        <h4>- Mes qualités</h4>
        <div class="container">
            <div class="quality">
                <div class="title">Créativité</div>
                <div class="description">Capacité à penser de manière innovante et à trouver des solutions originales
                    aux
                    problèmes.</div>
            </div>
            <div class="quality">
                <div class="title">Esprit d'équipe</div>
                <div class="description">Aptitude à travailler efficacement avec les autres et à contribuer positivement
                    à
                    un projet commun.</div>
            </div>
            <div class="quality">
                <div class="title">Résilience</div>
                <div class="description">Capacité à faire face à l'adversité et à rebondir après des échecs ou des
                    difficultés.</div>
            </div>
        </div>

        <p>

        </p>

        <h4>- Expériences Professionnelles </h4>
        <div class="logo">
            <strong>Stagière</strong> ‎ ‎ ‎ ‎ <img src="img/logo-exalog.gif" alt="Logo de l'entreprise">
        </div>

        Exalog - Mai 2023 à juin 2023 - Stage - Boulogne Billancourt
        <br>• Création d'une interface graphique pour l'entreprise
        <br>• Lier plusieurs branches bitbucket pour pouvoir les
        tester
        <br>• Concevoir ces fusions de branches dans une interface
        graphique,
        <br>
        <p> <strong>Description de l'entreprise</strong>
            Spécialisé dans l'édition de logiciels de cash management et de
            communication bancaire en mode SaaS
            <br><strong>Site web de l'entreprise</strong>
            <a href="https://www.exalog.com/fr"> https://www.exalog.com/fr</a>
            <br>
        <p><strong>Stagière</strong>
            Exalog - Décembre 2021 à février 2022 - Stage - BoulogneBillancourt - France
            Installation de Windows 11 sur l'ensemble des ordinateurs de l'entreprise
        <p>
    </div>
    <div class="apropos">
        <h4>- Mes Compétences</h4>
        <div class="bar-container">
            <div id="data-container" class="data-container">
                <div id="data" class="data">HTML</div>
                <div id="percentage" class="percentage">80%</div>
            </div>
            <div id="bar-wrapper" class="bar-wrapper">
                <div id="bar" class="bar" style="width: 80%;"></div>
            </div>
        </div>


        <div class="bar-container">
            <div id="data-container" class="data-container">
                <div id="data" class="data">PHP</div>
                <div id="percentage" class="percentage">50%</div>
            </div>
            <div id="bar-wrapper" class="bar-wrapper">
                <div id="bar" class="bar" style="width: 50%;"></div>
            </div>
        </div>
        <div class="bar-container">
            <div id="data-container" class="data-container">
                <div id="data" class="data">C#</div>
                <div id="percentage" class="percentage">20%</div>
            </div>
            <div id="bar-wrapper" class="bar-wrapper">
                <div id="bar" class="bar" style="width: 20%;"></div>
            </div>
        </div>


        <div class="bar-container">
            <div id="data-container" class="data-container">
                <div id="data" class="data">CSS</div>
                <div id="percentage" class="percentage">80%</div>
            </div>
            <div id="bar-wrapper" class="bar-wrapper">
                <div id="bar" class="bar" style="width: 80%;"></div>
            </div>
        </div>


        <div class="bar-container">
            <div id="data-container" class="data-container">
                <div id="data" class="data">JavaScrip</div>
                <div id="percentage" class="percentage">50%</div>
            </div>
            <div id="bar-wrapper" class="bar-wrapper">
                <div id="bar" class="bar" style="width: 50%;"></div>
            </div>
        </div>


        <div class="bar-container">
            <div id="data-container" class="data-container">
                <div id="data" class="data">PYTHON</div>
                <div id="percentage" class="percentage">40%</div>
            </div>
            <div id="bar-wrapper" class="bar-wrapper">
                <div id="bar" class="bar" style="width: 40%;"></div>
            </div>
        </div>

    </div>

    <div class="apropos">
        <h4>- Mon CV</h4>
        <div class="conteneur">
            <a href="/img/CV_Tomasso_Enzo.pdf" class="bouton">Visualiser le CV</a>
        </div>
    </div>
    <div class="apropos">
        <h4>- Tableau de Synthèse</h4>
        <div class="conteneur">
            <iframe src="/img/tab.pdf" width="90%" height="1000px">Tableau de Synthèse</iframe>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    <footer class="footer">
        <div class="container">

            <div class="footer-col">
                <h4>Me contacter</h4>
                <div class="social-links">

                    <a href="https://github.com/Enzo54444"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/enzo.tmss?igsh=b3Z0ZHgxcGc1b3di"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/enzo-tomasso-763736256/"><i class="fab fa-linkedin-in"></i></a>

                </div>
            </div>
        </div>
        </div>

    </footer>

</body>

</html>