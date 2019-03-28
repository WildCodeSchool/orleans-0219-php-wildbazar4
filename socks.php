<!doctype html>
<html lang="fr">
<?php
require 'connec.php';
    $pdo = new PDO(DSN, USER, PASS);
    $typeOfArticle = 'Socks';
    $category = 'socks';
    $titleJumbotron = 'Chaussettes';
    $textJumbotron = 'Pour votre rentrée à la Wild Code School';
?>

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
<?php require 'header.php';?>
  <!--CARTES-->
<section class=" acontainercartes container-fluid">

    <div class="row justify-content-center">
        <?php
        $query = "SELECT * FROM socks";
        $statement = $pdo->query($query);
        $socks = $statement->fetchAll(PDO::FETCH_ASSOC);
        $i = 0;
        foreach ($socks as $sock){
            $i++;
            ?>
            <!--Card-->
            <div data-toggle="modal" data-target="#modal<?= $i ?>" class="card acartentiere col-12 col-sm-6 col-md-3 ml-md-3 ml-sm-2 mr-sm-2 col-lg-2 m-2 p-0">
                <img src="<?= $sock['image']?>" class="card-img acardimage m-2 p-5" alt="<?= $sock['altAttribute']?>">
                <div class="card-body d-flex flex-column acontainerarticle p-1">
                    <p class="card-title aproductname m-0 text-center"><?= $sock['name']?></p>
                    <p class="card-text align-self-center text-center aprix "><?= number_format($sock['price'],2)?> €</p>
                </div>
            </div>

            <!--MODAL-->

            <div class="modal fade" id="modal<?= $i?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tmodal<?= $i?>"><?= $sock['name']?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="<?= $sock['image']?>" class="card-img-top" alt="<?= $sock['altAttribute']?>">
                                </div>
                                <div class="col-6">
                                    <div class="row justify-content-center">
                                        <p class="aprix"><?= number_format($sock['price'],2)?> €</p>
                                    </div>

                                    <div class="row mt-5">
                                        <p>Description : <?= $sock['description']?></p>
                                    </div>
                                </div>
                                <!--ajouts-->
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Caractéristiques</h4>
                                            <ul>
                                                <li>Quantité: Lot de <?= $sock['pairSocks']?>.</li>
                                                <li>Matière: <?= $sock['cloth']?></li>
                                                <li>Disponibilité: <?= $sock['available']?></li>
                                            </ul>
                                        </div>
                                        <div class="col-6">

                                            <div class="dropdown d-inline">
                                                <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Taille
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">34-36</button>
                                                    <button class="dropdown-item" type="button">37-39</button>
                                                    <button class="dropdown-item" type="button">40-42</button>
                                                </div>
                                            </div>
                                            <div class="dropdown d-inline">
                                                <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Quantité
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">1</button>
                                                    <button class="dropdown-item" type="button">2</button>
                                                    <button class="dropdown-item" type="button">3</button>
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
            <?php ;};?>
    </div>
</section>
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

<?php require 'footer.php' ?>
</body>
</html>

