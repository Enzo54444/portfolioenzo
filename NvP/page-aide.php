<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Besoin d'aide - Ouigo</title>

    <script src="script.js" defer></script>
    <!--Ajout du CSS-->
    <link rel="stylesheet" href="styleaide.css">

    <!--Ajout de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Besoin de nous contacter / Besoin d'aide.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
              <i class="bi bi-map"></i>
                <h4>Localisation:</h4>
                <p>34 rue du Commandant René Mouchotte, 75014 Paris.</p>
              </div>

              

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Numéro:</h4>
                <p> 36 35</p>
              </div>
              <iframe src="" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
           

             
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nom</label>
                  <input type="text" name="name" class="form-control" id="name" required value="Nom du compte">
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Mail</label>
                  <input type="email" class="form-control" name="email" id="email" required value="exemple@gmail.com"> 
                </div>
              </div>
              <div class="form-group">
                <label for="name">Sujet</label>
                <input type="text" class="form-control" name="subject" id="subject" required value="Problème au niveau du comtpe">
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required value=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyer!</div>
              </div>
              <div class="text-center"><button type="submit">Message envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
</body>
</html>