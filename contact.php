<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
.contact-us {
    padding: 70px 0px;

}

.section-title h2 {
    color: black;
    font-size: 30px;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 8px;
    border-bottom: 5px solid #af8070;
    padding-bottom: 10px;
    display: inline-block;
}

.section-title p {
    color: #e8e8e8;
    margin-bottom: 30px;
}

.contact-us input,
.contact-us textarea {
    background: #fafafa;
}

.contact-us textarea {
    min-height: 188px;
    max-width: 100%;
}

.contact-us .map {
    overflow: hidden;
    border-radius: 4px;
}

.btn {
    position: relative;
    font-size: 17px;
    text-transform: uppercase;
    text-decoration: none;
    padding: 1em 2.5em;
    display: inline-block;
    border-radius: 6em;
    transition: all .2s;
    border: none;
    font-family: inherit;
    font-weight: 500;
    color: black;
    background-color: green;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}

.btn::after {
    background-color: #fff;
}

.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
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

/*responsive*/
@media(max-width: 767px) {
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
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
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title">
                        <h2>Pour me contacter </h2>
                        <p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <form method="post" action="" class="mb-4 mb-lg-0">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="nom" placeholder="Nom" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Mail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comments" placeholder="Description"></textarea>
                        </div>
                        <button class="btn"> Envoyer</button>
                    </form>
                </div>

                <div class="col-lg-5">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18676.530115879497!2d2.49545866858708!3d48.944687948251456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e614882a7908c9%3A0x29296fe735616148!2sLyc%C3%A9e%20Voillaume!5e0!3m2!1sfr!2sfr!4v1706315254988!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

<?php
    // Déclaration des messages
    $msg_erreur = "L'envoi a échoué, le formulaire n'a pas été correctement rempli";
    $msg_ok = "L'envoi de l'email a été un succès, merci !";

    // Récupération des données du formulaire
    $nom = $_POST['name'];
    $prenom = $_POST['subject'];
    $messagerie = $_POST['email'];
    $contenu = $_POST['comments'];

    // Construction de l'en-tête
    $entete = "Message de : $nom $prenom\n";

    // Construction du corps du message
    $corps = "Bonjour,\n\n $contenu\n\n";

    // Construction du pied de page du message
    $piedmail = "Me contacter :\n\n$nom\n$prenom\n$messagerie";

    // Vérification et envoi du message
    if ($nom != "" && $prenom != "" && $messagerie != "" && $contenu != "") {
        if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $messagerie)) {
            $message = "$entete\n$corps\n$piedmail";
            mail('enzo.tomasso.sio@gmail.com', 'Formulaire de mon site web', $message);
            echo $msg_ok;
        } else {
            echo $msg_erreur;
        }
    } else {
        echo $msg_erreur;
    }
    ?>