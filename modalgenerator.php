<?php


include 'tableau.php';

$i = 0;
foreach ($articles["$typeOfArticle"] as $crapReference) {
    $i++;


    ?>
  <div data-toggle="modal" data-target="#modal<?php echo $i ?>"
       class="card acartentiere col-12 col-sm-6 col-md-3 ml-md-3 ml-sm-2 mr-sm-2 col-lg-2 m-2 p-0">
    <img src="images/<?php echo $crapReference['photo'] ?>" class="card-img acardimage m-2 p-5"
         alt="<?php echo $crapReference['altAtribute'] ?>">
    <div class="card-body d-flex flex-column acontainerarticle p-1">
      <p class="card-title aproductname m-0 text-center"><?php echo $crapReference['name'] ?></p>
      <p class="card-text align-self-center text-center aprix "><?php echo $crapReference['price'] ?></p>
    </div>
  </div>

  <!--MODAL<?php echo $i ?>-->

  <div class="modal fade" id="modal<?= $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tmodal<?php echo $i ?>"><?php echo $crapReference['name'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <img src="images/<?php echo $crapReference['photo'] ?>" class="card-img-top"
                   alt="<?php echo $crapReference['altAtribute'] ?>">
            </div>
            <div class="col-6">
              <div class="row justify-content-center">
                <p class="aprix"><?php echo $crapReference['price'] ?></p>
              </div>

              <div class="row mt-5">
                <p>Description : <?= $crapReference['description'] ?></p>
              </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <h4>Caractéristiques</h4>
                  <ul>
                      <?php foreach ($crapReference['caracteristics'] as $caracteristic => $caracteristicState) { ?>
                        <li>  <?php echo $caracteristic . ' ' . $caracteristicState ?> </li><?php ;
                      }; ?>


                  </ul>
                </div>
                <div class="col-6">
                    <?php foreach ($crapReference['buttons'] as $button => $buttonName) { ?>
                      <div class="dropdown d-inline">
                      <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                          <?=$button; ?>
                      </button>
                      <div class="dropdown-menu">
                          <?php foreach ($buttonName as $choice) {
                              ?>
                            <button class="dropdown-item" type="button"><?= $choice; ?></button>
                          <?php }; ?>
                      </div>
                      </div><?php }; ?></div>


              </div></div>
              <button type="button" class="btn-add-to-cart mx-auto btn btn-lg m-t-3">Ajouter au panier</button>
            </div>


        </div>


      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
      </div></div>
    </div></div>

<?php } ?>