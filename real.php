<!doctype html>
<html lang="fr">
  <head>
    <title>REALISATIONS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="header.css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navbar.css">
  </head>

<body>
    <?php include('header.php'); ?>             
    
    <h1 id="real">REALISATIONS</h1>

    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')"> ALL</button>
      <button class="btn" onclick="filterSelection('nature')"> FILMS</button>
      <button class="btn" onclick="filterSelection('cars')"> MOTION</button>
      <button class="btn" onclick="filterSelection('people')"> PHOTOS</button>
    </div>

    <div class="contenu">
        <div class="photo">
            <img src="image/Realisations/DM performance 2 PHOTO.png">
        </div>
        <div class="photo">
            <img src="image/Realisations/DM Performance PHOTO copie 2.jpeg">
        </div>
        <div class="photo">
            <img src="image/Realisations/DM performance PHOTO copie.jpeg">
        </div>
        <div class="photo">
            <img src="image/Realisations/Dm Performance PHOTO.jpeg">
        </div>
        <div class="photo">
            <img src="image/Realisations/DM performance PHOTO.png">
        </div>
        <div class="photo">
            <video width="400" height="190" controls>
                <source src="image/Realisations/DM Performance FILM.mov">
            </video>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>