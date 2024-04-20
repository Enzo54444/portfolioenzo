<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleveilletechno.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<style>
.nom {
    color: green;
}

h4 {
    color: green;
}

.rss-box {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
}

.rss-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.rss-description {
    font-size: 14px;
    margin-bottom: 10px;
}

.rss-link {
    font-size: 14px;
    color: blue;
}

.rss-link:hover {
    text-decoration: underline;
}
</style>

<body>
    <header>

        <div class="toggle-menu"></div>
        <div class="logo">
            <h3><span>Tomasso Enzo</span></h3>
        </div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="veilletechno.php">Veille Informationnelle</a></li>
            <li><a href="mesprojet.php">Mes Projets</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header>
    <center>
        <div class="nom">
            Veille Informationnelle - Framework Svelte
        </div>
        <br>

        Svelte est un framework JavaScript moderne qui se distingue par sa manière innovante de construire des<br>
        applications web. Contrairement à d'autres frameworks comme React, Angular ou Vue.js, Svelte déplace une
        grande<br>
        partie du travail de compilation de l'application vers le moment où vous écrivez le code, plutôt que de le
        faire<br>
        à l'exécution dans le navigateur.
        <br><br><br>



        <h4>Les avantages de Svelte :</h4>
        <br>
        - Svelte se suffit à lui-même et n’a pas besoin de Framework ou bibliothèque tierce pour fonctionner<br>
        - Svelte compile vos composants en code impératif à l’étape de build, autrement dit en code compréhensible par
        votre navigateur Web<br>
        - Le framework propose une syntaxe simplifiée<br>
        - Svelte fédère une excellente communauté<br>

        <strong>
            <h4> Qu'est ce que la veille Informationnelle ?</h4>
        </strong>

        La veille informationnelle est un processus qui consiste à collecter, analyser et diffuser des informations
        pertinentes sur un sujet spécifique ou un domaine d'intérêt donné. L'objectif principal de la veille<br>
        informationnelle est de rester informé des dernières tendances, développements, innovations et actualités dans
        un domaine particulier.<p>

        <h4>Flux RSS :</h4>
        <div class="container">
            <!-- Boîte pour les articles provenant du site lemondeinformatique.fr -->
            <div class="rss-box">
                <h2 class="rss-title">Articles de Lemondeinformatique.fr</h2>
                <!-- Titre de l'article -->
                <div class="rss-item">
                    <h3 class="rss-title">Rapport JavaScript 2022 : l'intérêt pour React, Angular et Vue diminue</h3>
                    <!-- Description de l'article -->
                    <p class="rss-description">L'enquête State of JavaScript 2022 menée auprès des développeurs révèle
                        que les frameworks
                        <b>Svelte</b>, Solid et Qwik, ainsi que l'outil de build Vite, suscitent le plus
                        grand intérêt...

                    </p>
                    <!-- Lien vers l'article -->
                    <a href="https://www.lemondeinformatique.fr/actualites/lire-rapport-javascript-2022-l-interet-pour-react-angular-et-vue-diminue-89200.html"
                        class="rss-link">Lien vers l'article</a>
                </div>
                <!-- Répétez cette structure pour chaque article -->
            </div>

            <div class="rss-box">
                <h2 class="rss-title">Articles provenant d'un blog</h2>
                <!-- Titre de l'article -->
                <div class="rss-item">
                    <h3 class="rss-title">Scott Spence's Blog!</h3>
                    <!-- Description de l'article -->
                    <p class="rss-description">Suivre les actualité d'un blog sur <B>Svelte</b>...</p>
                    <!-- Lien vers l'article -->
                    <a href="https://scottspence.com/rss.xml" class="rss-link">Lien vers
                        l'article</a>
                </div>
                <!-- Répétez cette structure pour chaque article -->
            </div>
            <div class="rss-box">
                <h2 class="rss-title"></h2>
                <!-- Titre de l'article -->
                <div class="rss-item">
                    <h3 class="rss-title">Guide du débutant pour SvelteKit</h3>
                    <!-- Description de l'article -->
                    <p class="rss-description">C'est un tutorial qui a pour but de nous apprendre </b>Sveltekit</b> qui
                        est "l'évolution de <b>Svelte</b>
                        <!-- Lien vers l'article --><br>
                        <a href="https://www.sitepoint.com/a-beginners-guide-to-sveltekit/" class="rss-link">Lien vers
                            l'article</a>
                </div>
                <!-- Répétez cette structure pour chaque article -->
            </div>
        </div>

    </center>
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