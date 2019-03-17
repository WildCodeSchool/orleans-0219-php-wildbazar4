 <!doctype html>
<html lang="fr">
  <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  	<link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway" rel="stylesheet">
    <title>Chaussettes - Wild Bazar</title>
  </head>

  <body>
  <!-- header -->

  <?php
  $typeOfArticle='Socks';
  /*METTRE A JOUR LE CSS AVEC NOMS DE VARIABLES PERTINENTS*/
  $category = 'socksjumbotron';
  $jumbotronH1 = 'Chaussettes';
  $jumbotronP = 'Pour votre rentrée à la Wild Code School';
  include 'header.php';
  ?>
  <!--CARTES-->
  <section class=" acontainercartes container-fluid">

    <div class="row justify-content-center">


  <?php
    $socks = [

    ['altAttribute' => 'Chaussettes snacking 5 paires', 'productName' => 'Chaussettes snacking 5 paires', 'productPrice' => '10,99€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable, avec des motifs de nourriture snacking, glaces, fast-food, fruits... Il y en a pour tous les goûts!', 'image' => 'images/s1.jpg'],
    ['altAttribute' => 'Chaussettes peintures lot de 4', 'productName' => 'Chaussettes peintures lot de 4', 'productPrice' => '10,99€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable, avec des motifs de peintures célèbres et de paysages... Il y en a pour tous les goûts!', 'image' => 'images/s2.jpg'],
    ['altAttribute' => 'Chaussettes Star Wars lot de 4', 'productName' => 'Chaussettes Star Wars lot de 4', 'productPrice' => '7,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable, à l\'effigie de vos personnages préférés de Stars Wars : Chewbacca, R2D2, Dark Vador et un Stormtrooper!', 'image' => 'images/s3.jpg'],
    ['altAttribute' => 'Soquettes chats 5 paires', 'productName' => 'Soquettes chats 5 paires', 'productPrice' => '7,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable, 5 coloris différents avec des adorables têtes de petits chatons.', 'image' => 'images/s4.jpg'],
    ['altAttribute' => 'Chaussettes Star Wars 5 paires', 'productName' => 'Chaussettes Star Wars 5 paires', 'productPrice' => '8,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable, à l\'effigie de vos mascottes préférées, Dark Vador, R2 - D2 et les Stormtroopers.', 'image' => 'images/s5.jpg'],
    ['altAttribute' => 'Chaussettes Totoro 4 paires', 'productName' => 'Chaussettes Totoro 4 paires', 'productPrice' => '7,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable, à l\'effigie de la mascotte préférée des fans de films d\'animation japonaise, Totoro.', 'image' => 'images/s6.jpg'],
    ['altAttribute' => 'Chaussettes fleuries 5 paires', 'productName' => 'Chaussettes fleuries 5 paires', 'productPrice' => '8,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable à dentelle a fleurs. 5 coloris différents : noir, violet, bleu, turquoise et rouge.', 'image' => 'images/s7.jpg'],
    ['altAttribute' => 'Chaussettes snacking Oréo', 'productName' => 'CChaussettes snacking Oréo', 'productPrice' => '8,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable à motifs de nourriture : Oréo, Fast-food, gâteaux et autres délicatesses.', 'image' => 'images/s8.jpg'],
    ['altAttribute' => 'Chaussettes astronautes', 'productName' => 'Chaussettes astronautes', 'productPrice' => '5,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable à motifs d\'astronautes et de fusées .', 'image' => 'images/s9.jpg'],
    ['altAttribute' => 'Chaussettes à pois 5 paires', 'productName' => 'Chaussettes à pois 5 paires', 'productPrice' => '8,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable avec de sompteux motifs à pois. 5 couleurs incluses dans le lot.', 'image' => 'images/s10.jpg'],
    ['altAttribute' => 'Chaussettes Avengers 5 paires', 'productName' => 'Chaussettes Avengers 5 paires', 'productPrice' => '8,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable à l\'effigie des Avengers. Ironman, Captain America, Batman, Spider-man, Superman.', 'image' => 'images/s11.jpg'],
    ['altAttribute' => 'Chaussettes Totoro à étoiles', 'productName' => 'Chaussettes Totoro à étoiles', 'productPrice' => '8,90€', 'socksNumber' => 'Lot de 5 paires', 'socksMaterial' => 'Matériaux éco-responsables', 'socksSize' => 'Plusieurs tailles disponibles', 'description' => 'Chaussettes en coton éco-reponsable à l\'effigie de Totoro, avec d\'adorables petites étoiles.', 'image' => 'images/s12.jpg']

 ];

     $i = 0;
 foreach ($socks as $sock){
     $i++;

    ?>
  <!--Card-->
  <div data-toggle="modal" data-target="#modal<?php echo $i ?>" class="card acartentiere col-12 col-sm-6 col-md-3 ml-md-3 ml-sm-2 mr-sm-2 col-lg-2 m-2 p-0">
    <img src="<?php echo $sock['image']?>" class="card-img acardimage m-2 p-5" alt="<?php echo $sock['altAttribute']?>">
    <div class="card-body d-flex flex-column acontainerarticle p-1">
      <p class="card-title aproductname m-0 text-center"><?php echo $sock['productName']?></p>
      <p class="card-text align-self-center text-center aprix "><?php echo $sock['productPrice']?></p>
    </div>
  </div>

  <!--MODAL-->

  <div class="modal fade" id="modal<?php echo $i?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tmodal<?php echo $i?>"><?php echo $sock['productName']?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <img src="images/s<?php echo $i?>.jpg" class="card-img-top" alt="<?php echo $sock['altAttribute']?>">
            </div>
            <div class="col-6">
              <div class="row justify-content-center">
                <p class="aprix"><?php echo $sock['productPrice']?></p>
              </div>

              <div class="row mt-5">
                <p>Description : <?php echo $sock['description']?></p>
              </div>
            </div>
            <!--ajouts-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <h4>Caractéristiques</h4>
									<ul>
									  <li>Quantité: <?php echo $sock['socksNumber']?></li>
                    <li>Matière: <?php echo $sock['socksMaterial']?></li>
                    <li>Taille: <?php echo $sock['socksSize']?></li>
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
                <button type="button" class="btn-add-to-cart mx-auto btn btn-lg m-t-3">Ajouter au panier</button>
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


<?php include 'footer.php'?>

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>