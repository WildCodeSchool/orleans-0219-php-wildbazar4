<?php require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT * FROM mugs";

$prep = $pdo->query($query);
$mugs = $prep->fetchAll(PDO::FETCH_ASSOC);




$typeOfArticle = 'Mugs';
$category = 'mugs';
$titleJumbotron = 'Mugs';
$textJumbotron = 'Trouvez le mug de vos rêves!';
$linkJumbotron = 'mugs.php';

?>
<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>

  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
  <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway"
        rel="stylesheet">
  <title><?= $titleJumbotron ?> Wild Bazar</title>
</head>

<body>


<?php require 'header.php'?>


<section class=" acontainercartes container-fluid">
  <div class="row justify-content-center">

      <?php

      $i = 0;
      foreach ($mugs as $mug) {
          $i++;


          ?>
        <div data-toggle="modal" data-target="#modal<?= $i ?>"
             class="card acartentiere col-12 col-sm-6 col-md-3 ml-md-3 ml-sm-2 mr-sm-2 col-lg-2 m-2 p-0">
          <img src="<?= $mug ['photo'] ?>" class="card-img acardimage m-2 p-5"
               alt="<?php echo $mug['altatribute'] ?>">
          <div class="card-body d-flex flex-column acontainerarticle p-1">
            <p class="card-title aproductname m-0 text-center"><?= $mug['name'] ?></p>
            <p class="card-text align-self-center text-center aprix "><?= $mug['price'] ?> €</p>
          </div>
        </div>

        <!--MODAL<?= $i ?>-->

        <div class="modal fade" id="modal<?= $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tmodal<?= $i ?>"><?= $mug['name'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                    <img src="<?= $mug['photo'] ?>" class="card-img-top"
                         alt="<?= $mug['altatribute'] ?>">
                  </div>
                  <div class="col-6">
                    <div class="row justify-content-center">
                      <p class="aprix"><?= $mug['price'] ?> €</p>
                    </div>

                    <div class="row mt-5">
                      <p>Description : <?= $mug['description'] ?></p>
                    </div>
                  </div>

                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-6">
                        <h4>Caractéristiques</h4>
                        <ul>

                          <li> Gamme : <?= $mug['gamme'] ?></li>
                          <li> Taille : <?= $mug['taille'] ?></li>
                          <li> Utilisable pour la boisson : <?= $mug['boisson'] ?></li>

                        </ul>
                      </div>
                      <div class="col-6">

                        <div class="dropdown d-inline">
                          <select class="btn btn-confirm dropdown-toggle" label="Quantité" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                            Quantité



                            <option class="dropdown-item" >1</option>
                            <option class="dropdown-item" >2</option>
                            <option class="dropdown-item" >3</option>
                          </select>


                          <div class="dropdown d-inline">
                            <button class="btn btn-confirm dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                              Couleur
                            </button>
                            <div class="dropdown-menu">

                              <button class="dropdown-item" type="button">Bleu</button>
                              <button class="dropdown-item" type="button">Jaune</button>
                              <button class="dropdown-item" type="button">Rouge</button>

                            </div>


                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn-confirm mx-auto btn btn-lg m-t-3">Ajouter au panier</button>
                    </div>

                  </div>

                </div>
              </div>


              <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>


  </div>
</section>


<?php require 'footer.php'?>

<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>
<?php
/*URL POUR LES IMAGES                                            OK
 * NOTER LES FICHIERS REQUIRED OU NON                            OK CONNEC et fonction
 * COMMENTER LA FONCtiON                                         Solène
 * APPELER UN MINIMUM DE CHOSES POUR CHAQUE PAGE                 OK
 * RANGER LE BORDEL DANS LE REPOSITORY                           NON
 * REORGANISER PROPREMENT LE CODE
 * VERIFIER LE NOM de CHAQUE VARIABLE UTILISEE
 * DEGAGER LE BOUTON ADD NEW DANS LA PAGE AJOUTER UN MUG
 *
 * */ ?>


