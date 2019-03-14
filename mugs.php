<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway" rel="stylesheet">
  <title>Mugs Wild Bazar</title>
</head>

<body>
  <!-- header -->
<?php
  $category = 'mugsjumbotron';
  $jumbotronH1 = 'Mugs';
  $jumbotronP = 'Trouvez le mug de vos rêves!';
  include 'header.php';
?>

  <!--CARTES-->
  <section class=" acontainercartes container-fluid">

    <div class="row justify-content-center">
 
 <?php
 $mugs=[
     ['name'=>'Tasse de Genghis Khan', 'price' =>'10000€','range' => 'luxe' , 'size' => 'moyenne' , 'drink' => 'lait', 'description'=> 'La vraie tasse de Genghis Khan. Le vrai Genghis. Il buvait tout les soirs du lait chaud avant d\'aller faire son gros dodo.', 'altAtribute'=>'tasse de thé' , 'photo'=>'a1.jpg' ],
     ['name'=>'Tasse souvenir', 'price' =>'1€','range' => 'basique' , 'size' => 'petite' , 'drink' => 'thé', 'description'=> 'Vos meilleurs souvenirs ont un prix: un euro.', 'altAtribute'=>'tasse de thé' , 'photo'=> 'a2.jpg' ],
     ['name'=>'Tasse blagueuse', 'price' =>'11.57€','range' => 'standard' , 'size' => 'grande' , 'drink' => 'café', 'description'=> 'Tasse à offrir pour souligner de manière subtile sa propre intelligence.', 'altAtribute'=>'tasse de café avec blague sur google et les femmes' , 'photo'=> 'a3.jpg' ],
     ['name'=>'Ma tasse chérie', 'price' =>'14.22€','range' => 'luxe' , 'size' => 'moyenne' , 'drink' => 'thé', 'description'=> 'Tasse fabriquée avec amour pour l\'élu de votre anse... heu... coeur.', 'altAtribute'=>'tasse avec anse coeur' , 'photo'=> 'a4.jpg' ],
     ['name'=>'Monette', 'price' =>'34.56€','range' => 'luxe' , 'size' => 'grande' , 'drink' => 'lait', 'description'=> 'Prenez rendez-vous avec un artiste!', 'altAtribute'=>'tasse motif floral Monet' , 'photo'=> 'a5.jpg' ],
     ['name'=>'Tasse Noël!', 'price' =>'25.12€','range' => 'standard' , 'size' => 'moyenne' , 'drink' => 'café', 'description'=> 'Faites entrer la magie de Noël en toute saison!', 'altAtribute'=>'tasse motif renne doré' , 'photo'=> 'a6.jpg' ],
     ['name'=>'Mug blanc', 'price' =>'5.12€','range' => 'basique' , 'size' => 'grande' , 'drink' => 'lait', 'description'=> 'In-dis-pen-sable. Différenciez-vous avec ce mug unique!', 'altAtribute'=>'mug blanc' , 'photo'=> 'a7.jpg' ],
     ['name'=>'Mug bonne humeur', 'price' =>'52.29€','range' => 'luxe' , 'size' => 'petite' , 'drink' => 'thé', 'description'=> 'Impossible de se lever du pied gauche avec ce mug un peu magique', 'altAtribute'=>'mug Monsieur bonheur' , 'photo'=> 'a8.jpg' ],
     ['name'=>'OMug', 'price' =>'5.79€','range' => 'basique' , 'size' => 'grande' , 'drink' => 'café', 'description'=> 'Si vous êtes supporter du club, assumez publiquement vos convictions. Si vous ne l\'êtes pas, vous saurez l\'utiliser comme il se doit dans les mélées de hooligans', 'altAtribute'=>'mug olympique de Marseille' , 'photo'=>  'a9.jpg' ],
     ['name'=>'Mug BD', 'price' =>'35.79€','range' => 'medium' , 'size' => 'petite' , 'drink' => 'lait', 'description'=> 'Commencez la journée par une bande dessinée! L\'excellente chute de la blague amorcée par ce premier mug est disponible au dos du mug Genghis Khan', 'altAtribute'=>'mug BD le chat' , 'photo'=>  'a10.jpg' ],
     ['name'=>'Tasse Constance', 'price' =>'65.84€','range' => 'luxe' , 'size' => 'petite' , 'drink' => 'thé', 'description'=> 'Les Licornes... Il n\'y a que cela de vrai', 'altAtribute'=>'mug licorne' , 'photo'=>  'a11.jpg' ],
     ['name'=>'Mug Lapin', 'price' =>'15.23€','range' => 'basique' , 'size' => 'grande' , 'drink' => 'lait', 'description'=> 'Mieux qu\'un quelconque chat mignon: un lapin mignon', 'altAtribute'=>'mug lapin' , 'photo'=>  'a12.jpg' ],
     ['name'=>'Mug pop', 'price' =>'398.99€','range' => 'luxe' , 'size' => 'petite' , 'drink' => 'thé', 'description'=> 'Un tricératops quadrangulaire est dessiné sur ce mug. Seuls les fins connaisseurs d\'art moderne sauront le dénicher, et apprécier cette tasse, objectivement réservée à l\'élite de la Nation', 'altAtribute'=>'mug pop art' , 'photo'=> 'a13.jpg' ],
     ['name'=>'Mug chat', 'price' =>'23.99€','range' => 'standard' , 'size' => 'moyenne' , 'drink' => 'café', 'description'=> 'Contrairement aux vrais chats, ce mug sera un compagnon fidèle et serviable', 'altAtribute'=>'mug en forme de chat' , 'photo'=> 'a14.jpg' ],
     ['name'=>'Mug Apple', 'price' =>'1023.99€','range' => 'basique' , 'size' => 'petite' , 'drink' => 'thé', 'description'=> 'Ce mug a une propriété particulière. Il débusque les trolls. D\'ailleurs, c\'est plus qu\'un mug, c\'est un concept. Comme la phrase ironique qui l\'accompagne. Le prix est en conséquence', 'altAtribute'=>'mug de marque apple' , 'photo'=> 'a15.jpg' ],




 ];

$i=0;
 foreach ($mugs as $mug) {
$i++;
  ?>
    <div data-toggle="modal" data-target="#modal<?php echo $i?>" class="card acartentiere col-12 col-sm-6 col-md-3 ml-md-3 ml-sm-2 mr-sm-2 col-lg-2 m-2 p-0">
    <img src="images/<?php echo $mug['photo']?>" class="card-img acardimage m-2 p-5" alt="<?php echo $mug['altAtribute']?>">
    <div class="card-body d-flex flex-column acontainerarticle p-1">
      <p class="card-title aproductname m-0 text-center"><?php echo $mug['name']?></p>
      <p class="card-text align-self-center text-center aprix "><?php echo $mug['price']?></p>
    </div>
  </div>

  <!--MODAL<?php echo $i?>-->

  <div class="modal fade" id="modal<?php echo $i?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tmodal<?php echo $i?>"><?php echo $mug['name']?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <img src="images/<?php echo $mug['photo']?>" class="card-img-top" alt="<?php echo $mug['altAtribute']?>">
            </div>
            <div class="col-6">
              <div class="row justify-content-center">
                <p class="aprix"><?php echo $mug['price']?></p>
              </div>

              <div class="row mt-5">
                <p>Description : <?php echo $mug['description']?></p>
              </div>
            </div>
            <!--ajouts-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <h4>Caractéristiques</h4>
                  <ul>
                    <li>Gamme: <?php echo $mug['range']?></li>
                    <li>Taille : <?php echo $mug['size']?></li>
                    <li>Utilisable pour la boisson : <?php echo $mug['drink']?></li>
                  </ul>
                </div>
                <div class="col-6">

                  <div class="dropdown d-inline">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Couleur
                </button>
                    <div class="dropdown-menu">
                      <button class="dropdown-item" type="button">Noir</button>
                      <button class="dropdown-item" type="button">Bleu</button>
                      <button class="dropdown-item" type="button">Rouge</button>
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