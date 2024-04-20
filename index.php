<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

    /* Styles supplémentaires pour la présentation */
    h1 {
        font-size: 36px;
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    h1 {
        font-size: 2em;
    }

    #accueil p {
        margin-top: 120px;
        /* Marge en haut du paragraphe */
        margin-left: -835px;
        display: flex;
        font-size: 35px;
        /* Centrer le contenu */
    }

    #accueil h1 span {
        font-size: 70px;
        /* Centrer le contenu */
        color: green;
    }

    #accueil h2 {
        font-size: 35px;
        /* Centrer le contenu */
        margin-bottom: 110px;
        /* Marge en bas du titre */
    }

    #accueil h1 {
        margin-top: 10px;
        /* Marge en haut du paragraphe */
        margin-left: -150px;
        font-size: 50px;
        /* Centrer le contenu */
        margin-bottom: 15px;
        /* Marge en bas du titre */
        text-align: center;
        /* Centrer le contenu */
    }

    button {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        background: transparent;
        margin-left: 175px;
        font-size: inherit;
        font-family: inherit;
        margin-top: -700px;

    }

    button.learn-more {
        width: 15rem;
        height: auto;

    }

    button.learn-more .circle {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: relative;
        display: block;
        margin: 0;
        width: 3rem;
        height: 3rem;
        background: #3ba100;
        border-radius: 1.625rem;

    }

    button.learn-more .circle .icon {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background: #fff;
    }

    button.learn-more .circle .icon.arrow {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        left: 0.625rem;
        width: 1.125rem;
        height: 0.125rem;
        background: none;
    }

    button.learn-more .circle .icon.arrow::before {
        position: absolute;
        content: "";
        top: -0.29rem;
        right: 0.0625rem;
        width: 0.625rem;
        height: 0.625rem;
        border-top: 0.125rem solid #fff;
        border-right: 0.125rem solid #fff;
        transform: rotate(45deg);
    }

    button.learn-more .button-text {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0.50rem 0;
        margin: 0 0 0 1.85rem;
        color: #fff;
        font-weight: 300;
        line-height: 1.6;
        text-align: center;
        text-transform: uppercase;
    }

    button:hover .circle {
        width: 100%;
    }

    button:hover .circle .icon.arrow {
        background: #fff;
        transform: translate(1rem, 0);
    }

    button:hover .button-text {
        color: #3ba100;
    }

    .conteneur {
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

    @media (max-width: 768px) {
        #accueil p {
            margin-top: 20px;
            /* Réduire la marge en haut du paragraphe */
            margin-left: 0;
            /* Aligner le paragraphe au centre */
            font-size: 24px;
            /* Réduire la taille de la police */
        }

        #accueil h1 {
            margin-top: 20px;
            /* Réduire la marge en haut du titre */
            margin-left: 0;
            /* Aligner le titre au centre */
            font-size: 36px;
            /* Réduire la taille de la police */
            margin-bottom: 10px;
            /* Réduire la marge en bas du titre */
        }

        #accueil h1 span {
            font-size: 60px;
            /* Réduire la taille du span */
        }

        #accueil h2 {
            font-size: 24px;
            /* Réduire la taille de la police */
            margin-bottom: 20px;
            /* Réduire la marge en bas du titre */
        }

        .conteneur {
            height: auto;
            /* Ajuster la hauteur automatiquement */
        }

        .bouton {
            position: static;
            /* Réinitialiser la position */
            margin: 20px auto;
            /* Centrer le bouton */
        }
    }
    </style>
</head>

<body>

    <header>

        <div class="toggle-menu"></div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="veilletechno.php">Veille Informationnelle</a></li>
            <li><a href="mesprojet.php">Mes Projets</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header>
    <section id="accueil">
        <h2>Bonjour,</h2>
        <h1>Je m'appelle <span>Tomasso Enzo</span></h1>
        <p>Étudiant en BTS SIO option SLAM.</p>
    </section>
    <div class="conteneur">
        <a href="profil.php" class="bouton">En savoir Plus </a>
    </div>
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