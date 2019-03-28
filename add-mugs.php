<?php
require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);
require 'function.php';


$category = 'mugs';
$titleJumbotron = 'Mugs';
$textJumbotron = 'Ajoutez le mug de vos rêves!';
$linkJumbotron = 'addmug.php';
$data = [];
$errors = [];

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

  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
  <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway"
        rel="stylesheet">
  <title><?= $titleJumbotron ?> Wild Bazar</title>
</head>

<body>


<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"> Wild Bazar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="pens.php"><span class="ycat">Stylos</span><span class="ybar ml-3">|</span></a>
        <li class="nav-item">
          <a class="nav-link" href="plushies.php"><span class="ycat">Peluches</span><span class="ybar ml-3">|</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mugs.php"><span class="ycat">Mugs</span><span class="ybar ml-3">|</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="socks.php" tabindex="-1" aria-disabled="true"><span class="ycat">Chaussettes</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid <?= $category ?>">
    <h1 class="text-center ytxtban"> <?= $titleJumbotron ?></h1>
    <p class="text-center ytxt"> <?= $textJumbotron ?></p>
    <div class="text-center p-4">

      <a class="btn text-center btn-secondary btn-lg" href="add-<?= $category ?>.php" role="button">ADD NEW</a>

    </div>

  </div>
</header>


<?php


/*Machinerie selected + vérifications des selected*/
$range = ['Luxe', 'Standard', 'Basique'];
$size = ['Petite', 'Moyenne', 'Grande'];
$drink = ['Café', 'Thé', 'Lait'];

?>


<!--Machinerie formulaire-->

<?php if ($_POST) {
    cleanArray($_POST);

    /*MACHINERIE BOUCLE*/
    foreach ($_POST as $nameCategory => $category) {

        $data[$nameCategory] = $_POST[$nameCategory];

    }


    /*FIN MACHINERIE BOUCLE*/

    if (strlen($_POST['productName']) < 255) {
        $data['productName'] = ($_POST['productName']);


    } else {
        $errors['productName'] = ($_POST['productName']);

        $errorMessage['productName'] = '<div class="text-danger">Le nom de votre produit doit contenir au moins 3 caractères, mais moins de 255</div>';
    }

    if (is_numeric($_POST['productPrice']) && 0 < $_POST['productPrice']) {
        $data['productPrice'] = ($_POST['productPrice']);

    } else {
        $errors['productPrice'] = ($_POST['productPrice']);

        $errorMessage['productPrice'] = '<div class="text-danger">Le prix de votre produit ne peut pas être inférieur à 0, ou contenir des caractères autres que 1 2 3 4 5 6 7 8 9 ,</div>';
    }

    if (strlen($_POST['photoName']) > 0 && strlen($_POST['photoName']) < 255) {
        $data['photoName'] = ($_POST['photoName']);

    } else {
        $errors['photoName'] = ($_POST['photoName']);

        $errorMessage['photoName'] = '<div class="text-danger">Le nom de votre photo doit être compris entre 1 et 255 caractères</div>';
    }


    if (strlen($_POST['altAttribute']) > 0 && strlen($_POST['productName']) < 255) {
        $data['altAttribute'] = ($_POST['altAttribute']);

    } else {
        $errors['altAttribute'] = ($_POST['altAttribute']);
        $errorMessage['altAttribute'] = '<div class="text-danger">La description doit être remplie et faire moins de 255 caractères!</div>';
    }

    if (strlen($_POST['productDescription']) > 0 && strlen($_POST['productDescription']) < 255) {
        $data['productDescription'] = ($_POST['productDescription']);
    } else {
        $errors['productDescription'] = ($_POST['productDescription']);
        $errorMessage['productDescription'] = '<div class="text-danger">La description doit être remplie et faire moins de 255 caractères!</div>';
    }

    if (in_array($_POST['productRange'], $range)) {
        $data['productRange'] = ($_POST['productRange']);
    } else {
        $errors['productRange'] = ($_POST['productRange']);
        $errorMessage['productRange'] = '<div class="text-danger">Choisissez!</div>';
    }


    if (in_array($_POST['productDrink'], $drink)) {
        $data['productDrink'] = ($_POST['productDrink']);
    } else {
        $errors['productDrink'] = ($_POST['productDrink']);
        $errorMessage['productDrink'] = '<div class="text-danger">Choisissez!</div>';
    }

    if (in_array($_POST['productSize'], $size)) {
        $data['productSize'] = ($_POST['productSize']);
    } else {
        $errors['productSize'] = ($_POST['productSize']);
        $errorMessage['productSize'] = '<div class="text-danger">Choisissez! </div>';
    }

}
if ((count($data) >= 5) && (count($errors) < 1) && ($_POST)) {
    cleanArray($data);


    $query = "INSERT INTO mugs (name, price, photo , altatribute, description, gamme, taille, boisson) 
VALUES (:name, :price, :photo, :altatribute, :description, :gamme , :taille, :boisson)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':name', $data['productName'], PDO::PARAM_STR);
    $statement->bindValue(':price', $data['productPrice'], PDO::PARAM_INT);
    $statement->bindValue(':photo', $data['photoName'], PDO::PARAM_STR);
    $statement->bindValue(':altatribute', $data['altAttribute'], PDO::PARAM_STR);
    $statement->bindValue(':description', $data['productDescription'], PDO::PARAM_STR);
    $statement->bindValue(':gamme', $data['productRange'], PDO::PARAM_STR);
    $statement->bindValue(':taille', $data['productSize'], PDO::PARAM_STR);
    $statement->bindValue(':boisson', $data['productDrink'], PDO::PARAM_STR);
    $statement->execute();

    header('location:add-mugs-success.php');


}


?>


<!--FORMULAIRE-->


<section class="container-fluid justify-content-center">
  <h2>Ajouter un mug !</h2>
  <div class="row justify-content-center">
    <form class="col-4" action="add-mugs.php" method="POST">
      <div class="form-group">
        <div>
          <label for="productName">Nom du produit:</label>
          <input type="text" class="form-control mb-2" id="productName" name='productName'
                 placeholder="Mug électronique" value="<?= $data['productName'] ?? '' ?>">
            <?= $errorMessage['productName'] ?? '' ?>
        </div>
        <div>
          <label for="productPrice">Prix (Ne pas ajouter la devise):</label>
          <input type="number" step="0.01" class="form-control mb-2" id="productPrice" name="productPrice"
                 placeholder="12,32" value="<?= $data['productPrice'] ?? ''; ?>" required>
            <?= $errorMessage['productPrice'] ?? '' ?>

        </div>
      </div>


      <label for="photoName">Nom photo produit</label>
      <input type="text" class="form-control mb-2" id="photoName" name="photoName" placeholder="exemple: a14.jpg"
             value="<?= $data['photoName'] ?? ''; ?>" required>

        <?= $errorMessage['photoName'] ?? '' ?>


      <label for="altAttribute">Description photo:</label>
      <input type="text" class="form-control mb-2" id="altAttribute" name="altAttribute"
             placeholder="Exemple: mug vert et rouge en forme de cône." value="<?= $data['altAttribute'] ?? '' ?>"
             required>

        <?= $errorMessage['altAttribute'] ?? '' ?>


      <div class="form-group">
        <label for="productDescription">Description du produit</label>
        <textarea class="form-control" id="productDescription" name="productDescription" rows="3"
                  placeholder="255 caractères maximum" required><?= $data['productDescription'] ?? '' ?></textarea>
          <?= $errorMessage['productDescription'] ?? '' ?>
      </div>


      <div class="form-group container">
        <div class="row">
          <div class="col-4">
            <label for="productRange">Gamme</label>
            <select class="form-control" id="productRange" name="productRange" required>
              <option label="empty"></option>
                <?php foreach ($range as $item) {
                    if (isset($data['productRange'])) {
                        echo '<option selected>' . $item . '</option>';
                    } else {
                        echo '<option' . '>' . $item . '</option>';
                    }
                }

                ?>

            </select>
              <?= $errorMessage['productRange'] ?? '' ?>
          </div>
          <div class="col-4">
            <label for="productSize">Taille</label>
            <select class="form-control" id="productSize" name="productSize" required>
              <option label="empty"></option>
                <?php foreach ($size as $item) {
                    if (isset($data['productSize'])) {
                        echo '<option selected>' . $item . '</option>';
                    } else {
                        echo '<option' . '>' . $item . '</option>';
                    }

                }
                ?>

            </select>
              <?= $errorMessage['productSize'] ?? '' ?>
          </div>

          <div class="col-4">
            <label for="productDrink">Boisson</label>
            <select class="form-control" id="productDrink" name="productDrink" required>
              <option label="empty"></option>
                <?php foreach ($drink as $item) {
                    if (isset($data['productDrink'])) {
                        echo '<option selected>' . $item . '</option>';
                    } else {
                        echo '<option' . '>' . $item . '</option>';
                    }
                }
                ?>


            </select>
              <?= $errorMessage['productDrink'] ?? '' ?>
          </div>
        </div>
      </div>

      <div class="form-group  mt-5 text-center">
        <button type="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!</button>
      </div>
    </form>
  </div>
</section>

<!--FOOTER-->

<footer>
  <div class="E_jumbotron jumbotron-fluid">
    <div class="E_container-fluid container-fluid">

      <!--parts-->

      <div class="row">
        <div class="E_card col-sm-2">
          <div class="E_parts">
            <p class="card-text"><a href="#">Accueil</a></p>
            <p class="card-text"><a href="#">Notre équipe</a></p>
            <p class="card-text"><a href="#">Meilleurs ventes</a></p>
            <p class="card-text"><a href="#">Nous contacter</a></p>
            <p class="card-text"><a href="#">Mentions légales</a></p>
          </div>
        </div> <!--categories-->

        <div class="E_card col-sm-2">
          <div class="E_parts">
            <p class="card-text"><a href="pens.php">Stylos</a></p>
            <p class="card-text"><a href="plushies.php">Peluches</a></p>
            <p class="card-text"><a href="mugs.php">Mugs</a></p>
            <p class="card-text"><a href="socks.php">Chaussettes</a></p>

          </div>
        </div>

        <!--adresse-->

        <div class="E_card col-sm-3">
          <div class="E_adresse ">
            <h2 class="card-title">Wild Bazar</h2>
            <p class="card-text">1, rue de la Paix</p>
            <p class="card-text">75000 Paris</p>
            <p class="card-text">01.23.45.67.89</p>
          </div>
        </div>

        <!--form-->

        <div class="E_form col-sm-3 offset-1">
          <form>
            <div class="E_form-group">
              <label for="footer">E-mail</label>
              <input type="email" class="form-control" id="footer" placeholder="nom@exemple.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Commentaires</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-sm-4 offset-5">
              <button type="submit"
                      class="btn btn-light align-items-center justify-content-end">Envoyer
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>

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
