  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Officiel - Ouigo</title>

    <script src="script.js" defer></script>
    <!--Ajout du CSS-->
    <link rel="stylesheet" href="style.css">

    <!--Ajout de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar">
        <div class="recherche"><input type="search" placeholder=" 🔍 Recherche" width=10px></div>
        <div class="navbar-lien">
            <ul>
                <li><a href="register.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg></a></li>  
                <li><a href="contact.html">Contact</a></li>   
            </ul>
        </div>
    </nav>

    <div class="container">
        <form method="post">
                                
                    <div class="form-group">
                        <label for="provenance">Ville de départ</label>
                        <input type="text" name="provenance" id="provenance" placeholder="Paris, Monaco, ...">

                        <label for="arrivee">Ville d'arrivée</label>
                        <input type="text" name="arrivee" id="arrivee" placeholder="Paris, Monaco, ...">
                    </div>

                    <div class="form-group">
                        <label for="depart">Date de départ</label>
                        <input type="date" name="depart" id="depart" value="13/04/2020">

                        <label for="retour">Date de Retour</label>
                        <input type="date" name="retour" id="retour" value="14/04/2020">
                    </div>

                    <div class="form-group">
                        <label for="adultes">Nombre d'adultes</label>
                        <select name="adultes" id="adultes">
                            <option selected="selected">0 Adulte</option>
                            <option>1 Adulte</option>
                            <option>2 Adultes</option>
                            <option>3 Adultes</option>
                            <option>4 Adultes</option>
                            <option>5 Adultes</option>
                        </select>

                        <label for="enfants">Nombre d'enfants</label>
                        <select name="enfants" id="enfants">
                            <option selected="selected">0 Enfant</option>
                            <option>1 Enfant</option>
                            <option>2 Enfants</option>
                            <option>3 Enfants</option>
                            <option>4 Enfants</option>
                            <option>5 Enfants</option>
                        </select>

                        <label for="animal">Nombre d'Animaux</label>
                        <select name="animal" id="animal">
                            <option selected="selected"> 0 Animal</option>
                            <option>1 Animal</option>
                            <option>2 Animaux</option>
                            <option>3 Animaux</option>
                            <option>4 Animaux</option>
                            <option>5 Animaux</option>
                        </select>

                        
                    </div>

                    <div class="button-submit"></br>

                    </br>
                        <center><input type="submit" value="Lancer la recherche" name="recherche" id="recherche"></center>
                    </div>
                    
                </form>
            </div>
    </div>
        </header>

        <!-- Une section avec les destinations -->
        <section id="destinations"></br></br></br>

       <br>
        </br><h3>Nous proposons differentes destinations pour découvrir la France !</h3></br>

            <div class="destinations-group">
                <!-- destination 1 -->
                <div class="destination-item Paris">
                    <div class="overlay">
                        <a href="https://www.sncf-connect.com/train/france/ile-de-france/paris"> <span class="prix">Dès 10€</span> </a >
                            <span class="nom">Paris</span>
                    </div>
                </div>

                <!-- destination 2 -->
                <div class="destination-item Monaco">
                    <div class="overlay">
                        <a href="https://www.sncf-connect.com/train/monaco/monaco?wiz_
                        medium=SEA&wiz_source=google&wiz_campaign=fr_fr_g_mk_conv_tr-multiproduit_nb_generic_dsa&wiz_
                        content=DSA+-+Generic&wiz_term=p68998511208&&prex=SEA&gclid=EAIaIQobChMI7eXJtoqV_
                        QIVzBkGAB1EdAdKEAAYASAAEgJUk_D_BwE&gclsrc=aw.ds"> <span class="prix">Dès 30€</span>
                        <span class="nom">Monaco</span>
                    </div>
                </div>

                <!-- destination 3 -->
                <div class="destination-item Bordeaux">
                    <div class="overlay">
                        <a href="https://www.sncf-connect.com/train/france/nouvelle-aquitaine/bordeaux?wiz_medium=SEA&wiz_
                        source=google&wiz_campaign=fr_fr_g_mk_conv_tr-multiproduit_nb_generic_desti&wiz_content=Desti+-+
                        Bordeaux&wiz_term=p68998482939&&prex=SEA&gclid=EAIaIQobChMI-qrIuZSV_QIVR5nVCh1YgAV5EAAYAiAAEgJlCvD_
                        BwE&gclsrc=aw.ds"> <span class="prix">Dès 20€</span>
                        <span class="nom">Bordeaux</span>
                    </div>
                </div>

                <!-- destination 4 -->
                <div class="destination-item Lyon">
                    <div class="overlay">
                        <a href="https://www.sncf-connect.com/train/france/auvergne-rhone-alpes/lyon?wiz_
                        medium=SEA&wiz_source=google&wiz_campaign=fr_fr_g_mk_conv_tr-multiproduit_nb_generic_desti&wiz_content=Desti+-+
                        Lyon&wiz_term=p68998502712&&prex=SEA&gclid=EAIaIQobChMI8c-F45SV_QIVYhkGAB1MfQ5HEAAYASAAEgLJmPD_BwE&gclsrc=aw.ds"><span class="prix">Dès 55€</span>
                        <span class="nom">Lyon</span>
                    </div>
                </div>

                <!-- destination 5 -->
                <div class="destination-item Biarritz">
                    <div class="overlay">
                        <a href="https://www.sncf-connect.com/train/france/nouvelle-aquitaine/biarritz"></a><span class="prix">Dès 30€</span>
                        <span class="nom">Biarritz</span>
                    </div>
                </div>

                <!-- destination 6 -->
                <div class="destination-item La-Rochelle">
                    <div class="overlay">
                        <a href="https://www.sncf-connect.com/train/france/nouvelle-aquitaine/la-rochelle?wiz_medium=SEA&wiz_
                        source=google&wiz_campaign=fr_fr_g_mk_conv_tr-multiproduit_nb_generic_desti&wiz_
                        content=Desti+-+La+rochelle&wiz_term=p68998502610&&prex=SEA&gclid=EAIaIQobChMIpLu7mpWV_QIVCo9oCR27lAWzEAAYASAAEgKhs_D_
                        BwE&gclsrc=aw.ds"><span class="prix">Dès 25€</span>
                        <span class="nom">La-Rochelle</span>
                    </div>
                </div>
            </div>

        </section>


</body>
</html>
<style> 
    section#destinations {
    margin: 0px 20% 0 20%;
    }
    
    section#destinations h3 {
    padding-top: 50px;
    opacity: 0.5;
    color: #373737;
    }
    
    div.destination-item {
    color: #373737;
    height: 300px;
    margin: 15px;
    position: relative;
    flex: 1 0 29%;
    background-repeat: no-repeat;
    background-size: 100%;
    }
    
    div.destination-item:hover {
    transform: scale(0.98);
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: 0.2s all;
    }
    
    div.destinations-group {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    }
    .Paris {
    background: url(img/Paris.jpg);
    }
    .Monaco {
    background: url(img/Monaco2.jpg);
    }
    .Bordeaux {
    background: url(img/Bordeaux.jpg);
    }
    .Lyon {
    background: url(img/Lyon.jpg);
    }
    .Biarritz {
    background: url(img/Biarritz.jpeg);
    }
    .La-Rochelle {
    background: url(img/Rochelle.jpg);
    }
    .overlay {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    }
    
    span.nom {
    position: relative;
    color: #373737;
    background-color: #dbdbd9;
    top: 20px;
    float: right;
    padding: 12px;
    font-size: 22px;
    }
    
    span.prix {
    position: relative;
    color: #fff;
    background-color: #ef8f1d;
    padding: 12px;
    font-size: 25px;
    top: 220px;
    }
</style>

<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
?>