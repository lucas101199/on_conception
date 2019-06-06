<!doctype html>
<html lang="fr">
  <head>
    <title>ON CONCEPTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    
  </head>
 
  <body>
        <?php include('header.php'); ?>
        <div class="start">
        <div class="icon_play">
            <i class="far fa-play-circle fa-10x"></i>
        </div>
        <div class="logo">
            <img src="image/logo_on.PNG">
            <h3 id="presente">PRESENTE</h3>
        </div>
        </div>
        <div class="presentation">
            <h1>PENDANT CE TEMPS</h1>
            <div class="compteur">
              <img src="image/film-production1.jpg">
                <div class="align-compteur1">
                    <i class="fas fa-camera fa-2x"></i>
                    <p id="compteur1">0</p>
                    <p id="subtitle">VIDEOS REALISEES</p>
                </div>
                <div class="align-compteur2">
                    <i class="fas fa-glasses fa-2x"></i>
                    <p id="compteur2">0</p>
                    <p id="subtitle">VUES</p>
                </div>
                <div class="align-compteur3">
                    <i class="fas fa-hdd fa-2x"></i>
                    <p id="compteur3">0</p>
                    <p id="subtitle">TERA STOCKES</p>
                </div>
                <div class="align-compteur4">
                    <i class="fas fa-walking fa-2x"></i>
                    <p id="compteur4">0</p>
                    <p id="subtitle">KM PARCOURUS</p>
                </div>
                <div class="align-compteur5">
                    <i class="fab fa-java fa-2x"></i>
                    <p id="compteur5">0</p>
                    <p id="subtitle">CAFE BUS/JOUR</p>
                </div>
            </div>
        </div>
        <?php include('contact_include.php'); ?>
  </body>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="count.js"></script>
</html>