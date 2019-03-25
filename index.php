<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway" rel="stylesheet">
    <title>Wild Bazar</title>
</head>

<body>
<?php
    $category = 'index';
    $titleJumbotron = 'Wild Bazar';
    $textJumbotron = 'On y trouve de tout et surtout du<br> n\'importe quoi !';
    include 'header.php';
?>

  <!-- categories -->

  <div class="container-fluid div-bg ">
    <section class="categories">
      <h2>- Catégories -</h2>
      <div class="row justify-content-center">
        <a href="pens.php">
          <div class="card col-sm-3 scard hovereffect">
            <img src="images/pens2.jpg" class="card-img-top simg" alt="Stylos">
            <div class="card-img-overlay">
              <p class="card-title info">Stylos</p>
            </div>
          </div>
        </a>
        <a href="plushies.php">
          <div class="card col-sm-3 scard hovereffect">
            <img src="images/plush.jpg" class="card-img-top simg" alt="Peluches">
            <div class="card-img-overlay">
              <p class="card-title info">Peluches</p>
            </div>
          </div>
        </a>
      </div>
      <div class="row justify-content-center">
        <a href="mugs.php">
          <div class="card col-sm-3 scard hovereffect">
            <img src="images/cup.jpg" class="card-img-top simg" alt="Mugs">
            <div class="card-img-overlay">
              <p class="card-title info">Mugs</p>
            </div>
          </div>
        </a>
        <a href="socks.php">
          <div class="card col-sm-3 scard hovereffect">
            <img src="images/socks.jpg" class="card-img-top simg" alt="Chaussettes">
            <div class="card-img-overlay">
              <p class="card-title info">Chaussettes</p>
            </div>
          </div>
        </a>
      </div>
    </section>
  </div>
  <!-- about-us -->
  <div class="container-fluid div-about ">
    <section class="about-us about-anchor">
      <div class="row justify-content-center">
        <h2>- Notre équipe -</h2>
      </div>
      <div class="row">
        <img class="col-sm-3 offset-1" src="images/about-us.jpg" alt="About us">
        <p class="col-sm-7 offset-1 ">C'est une équipe de quatre personnes qui se sont retrouvées sur un projet commun...un site internet de commerce en ligne!
            vous allez me dire, mais comment ça? des gens, comme ça, qui font un site, c'est n'importe quoi!!
            mais quoi, ils en avaient déjà fait? non??? mais comment ont-ils fait alors?
            grâce à leur soif d'apprendre, de comprendre, grâce à la passion qui les animent tous!
            Mais c'est qui ces gus? c'est nous, Yacine, Solène, André et Emilie.</p>
      </div>
    </section>
  </div>

  <!--CARDS-->

  <section class=" div-bg bscontainercartes m-t-0 m-b-2" id="bestselling-anchor">
    <h2>- Meilleures ventes -</h2>

    <p class="text-center p-best">A saisir avant épuisement des stocks!</p>

    <div class="container-fluid">
      <div class="row justify-content-center m-b-5">
        <!--Card 1-->
        <a href="mugs.php" class="card col-sm-10 col-md-6 col-lg-6 col-xl-2 m-3 bscartentiere">
          <img src="images/a1.jpg" class="card-img bscardimage m-3 p-5" alt="tasse">
          <div class="card-img-overlay d-flex flex-column-reverse justify-content-between bscontainerarticle p-0">
            <p class="card-title bsproductname m-0 text-center">Tasse de Genghis Khan</p>
            <p class="card-text justify-content-center text-center bsprix p-2">10 000 €</p>

          </div>
        </a>

        <!--Card 2-->
        <a href="plushies.php" class="card col-sm-10 col-md-6 col-lg-6 col-xl-2 m-3 bscartentiere">
          <img src="images/e1.jpg" class="card-img bscardimage m-3 p-5" alt="peluche">
          <div class="card-img-overlay d-flex flex-column-reverse justify-content-between bscontainerarticle p-0">
            <p class="card-title bsproductname m-0 text-center">Peluche Hector</p>
            <p class="card-text justify-content-center text-center bsprix p-2">39,99 €</p>

          </div>
        </a>

        <!--Card 3-->
        <a href="pens.php" class="card col-sm-10 col-md-6 col-lg-6 col-xl-2 m-3 bscartentiere">
          <img src="images/y1.jpg" class="card-img bscardimage m-3 p-5" alt="stylo">
          <div class="card-img-overlay d-flex flex-column-reverse justify-content-between bscontainerarticle p-0">
            <p class="card-title bsproductname m-0 text-center">Stylo Plume</p>
            <p class="card-text justify-content-center text-center bsprix p-2">15,95 €</p>

          </div>
        </a>
      </div>
    </div>
  </section>

  <!--END CARDS-->
  <!--FOOTER-->

<?php include 'footer.php' ?>

  <!-- Optional JavaScript -->

  <script src="custombox.min.js"></script>
  <script src="custombox.legacy.min.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>