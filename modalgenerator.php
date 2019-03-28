<?php require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT * FROM mugs";
$prep = $pdo->query($query);
$mugs = $prep->fetchAll(PDO::FETCH_ASSOC);

?>

<section class=" acontainercartes container-fluid">
  <div class="row justify-content-center">

      <?php

      $i = 0;
      foreach ($mugs as $mug) {
      $i++;


      ?>
    <div data-toggle="modal" data-target="#modal<?= $i ?>"
         class="card acartentiere col-12 col-sm-6 col-md-3 ml-md-3 ml-sm-2 mr-sm-2 col-lg-2 m-2 p-0">
      <img src="images/<?php echo $mug ['photo'] ?>" class="card-img acardimage m-2 p-5"
           alt="<?php echo $mug['altatribute'] ?>">
      <div class="card-body d-flex flex-column acontainerarticle p-1">
        <p class="card-title aproductname m-0 text-center"><?php echo $mug['name'] ?></p>
        <p class="card-text align-self-center text-center aprix "><?php echo $mug['price'] ?> €</p>
      </div>
    </div>

    <!--MODAL<?php echo $i ?>-->

    <div class="modal fade" id="modal<?= $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tmodal<?= $i ?>"><?=$mug['name'] ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <img src="images/<?php echo $mug['photo'] ?>" class="card-img-top"
                     alt="<?php echo $mug['altatribute'] ?>">
              </div>
              <div class="col-6">
                <div class="row justify-content-center">
                  <p class="aprix"><?php echo $mug['price'] ?> €</p>
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
                      <li>  Utilisable pour la boisson : <?= $mug['boisson'] ?></li>

                    </ul>
                  </div>
                  <div class="col-6">

                    <div class="dropdown d-inline">
                      <button class="btn btn-confirm dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                        Quantité
                      </button>
                      <div class="dropdown-menu">

                        <button class="dropdown-item" type="button">1</button>
                        <button class="dropdown-item" type="button">2</button>
                        <button class="dropdown-item" type="button">3</button>

                      </div>

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
