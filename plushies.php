<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <link
    href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway"
    rel="stylesheet">
  <title>Peluches Wild Bazar</title>
</head>

<?php
$category = 'plushiesjumbotron';
$jumbotronH1 = 'Peluches';
$jumbotronP = 'Tout un monde de douceur!';
include 'header.php';
?>

    <!--CARTES-->
    <section class=" acontainercartes container-fluid">

<div class="row justify-content-center">

<?php
$plushies = [
        ['name' => 'Hector' , 'price' => '63.99€' , 'color' => 'gris' , '32cm' , 'description' => 'A 7 ans tu avais déjà lu les Misérables 3 fois ? Tu rigolais aux blagues de ton prof de latin ? Tu pleurais quand tu avais un 16/20 ? Alors achète ce doudou pour ton chérubin ! Cadeau de naissance hyper original, effet garanti ! Stock ultra limité.'],
        ['name' => 'Joséphine' , 'price' => '51.99€', 'color' => 'marron avec un coeur', 'size' => '26cm','description' =>'Si vous en achetez 93 exemplaires vous pouvez refaire la déco de la chambre de bébé avec, on a testé pour vous, c\'est du plus bel effet alors n\'hésitez surtout pas ! '],
        ['name' => 'Jean' , 'price' => '29.99€' , 'color' => 'blanc avec un coeur' , 'size' => '15cm' , 'description' => 'Parce que tous les hommes de ta famille sont irrésistibles, tu te dois de le porter fièrement  jusqu\'à tes 7 ans ! (au moins) Ce doudou est le véritable coup de coeur de notre collection, beaucoup de mamans, de papas et de bébés l\'ont déjà adopté !'],
        ['name' => 'Pauline' , 'price' => '75.99€' , 'color' => 'gris' , 'size' => '38cm' , 'description' => 'Ce Doudou est fait pour les petites fées. Ses couleurs sont hyper tendances et toutes douces. Ce cadeau de naissance va conquérir bébé et maman c\'est sûr ! Édition Limitée.'],
        ['name' => 'Yonis' , 'price' => '31.99€' , 'color' => 'gris' , 'size' => '16cm' , 'description' => 'Vous êtes à la recherche d\'un cadeau de naissance, doux, original, mixte, et ultra adapté à bébé ? On a ce qu\'il vous faut. Ce doudou répond parfaitement aux besoins du nourrisson et à sa psychomotricité. Et puis le gris c\'est indétrônable, indémodable et peu salissant.'],
        ['name' => 'Cécile' , 'price' => '87.99€', 'color' => 'Jaune et rouge', 'size' => '44cm' , 'description' => 'Doudou Bio certifié GOTS car on sait que c\'est important pour beaucoup d\'entre vous. Il accompagnera bébé dès la naissance pour le plus grand plaisir des parents. Cadeau de naissance original idéal pour les Bioaddict.'],
        ['name' => 'Roger' , 'price' => '49.99€' , 'color' => 'marron avec un coeur' , 'size' => '25cm' , 'description' => 'Vrai doudou coup de cœur ! Sa couleur est vraiment hyper intense et convient aussi bien aux filles qu\'aux garçons. C\'est définitivement le cadeau de naissance original et tendance. On craque complètement pour la version personnalisée.'],
        ['name' => 'Capucine' , 'price' => '145.99€' , 'color' => 'gris et blanc' , 'size' => '75cm' , 'description' => 'Voici le doudou connecté parfait pour un cadeau de naissance 3.0 ! Bon d\'accord vous ne pouvez pas aller sur Instagram avec mais, vous pourrez toujours prendre en photo bébé et l\'Instagramer avec ce joli doudou original et surtout ultra doux...'],
        ['name' => 'Paul' , 'price' => '33.99€' , 'color' => 'marron' , 'size' => '18cm' , 'description' => 'Il est trop cool ce doudou ! C\'est le cadeau de naissance essentiel pour les mini super héros. Il est doux, il est drôle et il est original ! Le tout fabriqué avec amour pour votre bébé. Chaque pièce est unique. Modèle hyper tendance en Edition Limitée.'],
        ['name' => 'BarnabéEtEléanore' , 'price' => '53.99€' , 'color' => 'marron avec stétoscope et gris avec des pansements' , 'size' => '15cm et 12cm' , 'description' => 'Pour tous les petits cœurs... Un peu écorchés, abîmés, fatigués ou en bonne santé... Ces doudous sont fait pour apporter de la douceur et du réconfort à son propriétaire. Cadeau de naissance idéal et original. Edition Limitée'],
        ['name' => 'Victor' , 'price' => '75.99€' , 'color' => 'marron' , 'size' => '38cm' , 'description' => 'Bébé va bientôt pointer le bout de son nez ? Offrez lui un cadeau de naissance original. Ce doudou tout mignon et tout doux va l\'aider à s\'endormir paisiblement et lui tiendra compagnie lorsque vous ne serez pas là.'],
        ['name' => 'Marguerite' , 'price' => '239.99€' , 'color' => 'blanc et gris avec fleur brodée et noeud papillon vichy rose' , 'size' => '120cm' , 'description' => 'Vous avez opté pour une déco de chambre noire et blanche ? Alors c\'est ce doudou qu\'il vous faut. Ce cadeau de naissance est hyper tendance et original. Le détail qui tue : vous pouvez l\'offrir même si vous ne connaissez pas le sexe du bébé !'],

            ];
$i = 0;

foreach ($plushies as $plush){
    $i++;

?>


<!--Card <?php echo $i?>-->

<div data-toggle="modal" data-target="#modal <?php echo $i ?>" class="card acartentiere col-12 col-sm-6 col-md-3 ml-md-3 ml-sm-2 mr-sm-2 col-lg-2 m-2 p-0">
<img src="images/e<?php echo $i?>.jpg" class="card-img acardimage m-2 p-5" alt="peluche">
  <div class="card-body d-flex flex-column acontainerarticle p-1">
  <p class="card-title aproductname m-0 text-center"><?php echo $plushies['name'] ?></p>
  <p class="card-text align-self-center text-center aprix "><?php echo $plushies['price'] ?></p>
</div>
</div>

<!--MODAL-->

<div class="modal fade" id="modal'.$i.'" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="tmodal<?php echo $i ?>"><?php echo $plushies['name'] ?></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>

    <div class="modal-body">
      <div class="row">
        <div class="col-6">
          <img src="images/e<?php echo $i ?>.jpg" class="card-img-top" alt="peluche">
        </div>
        <div class="col-6">
          <div class="row justify-content-center">
            <p class="aprix"><?php echo $plushies['price'] ?></p>
          </div>

          <div class="row mt-5">
            <p>Description : <?php echo $plushies['description'] ?></p>
          </div>
        </div>
        <!--ajouts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <h4>Caractéristiques</h4>
              <ul>
                <li>Couleur : <?php echo $plushies['color'] ?></li>
                <li>Taille : <?php echo $plushies['size'] ?></li>
                
              </ul>
            </div>
            <div class="col-6">
            <div class="dropdown d-inline">
            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
</div><?php;};?>



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