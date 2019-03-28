<!doctype html>
<html lang="fr">

<?php
    $category = 'socks';
    $titleJumbotron = 'Chaussettes';
    $textJumbotron = 'Ajoutez vos chaussettes ici';
    require 'connec.php';
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
    <title><?= $titleJumbotron ?> Wild Bazar </title>
</head>

<body>
<?php require 'header.php';
$pdo = new PDO(DSN, USER, PASS);

$errors = [];
$pairSocks = ['1 paire' => 'one', 'Lot de 2 paires' => 'two', 'Lot de 3 paires' => 'three', 'Lot de 4 paires' => 'four', 'Lot de 5 paires' => 'five'];
$emptyField = 'Le champ ne peut pas être vide.';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = cleanArray($_POST);
    $maxLengthName = 100;
    $maxDefault = 255;

    if (empty($data['name'])) {
        $errors['name'] = $emptyField;
    } elseif ((strlen($data['name']) > 100)) {
        $errors['name'] = 'Votre nom de produit ne peut pas être supérieur à ' . $maxLengthName . 'caractères';
    }

    if (empty($data['price'])) {
        $errors['price'] = $emptyField;
    } elseif (!is_numeric($data['price'])) {
        $errors['price'] = "Vous ne pouvez entrer que des chiffres.";
    }

    if (empty($data['description'])) {
        $errors['description'] = $emptyField;
    } elseif ((strlen($data['description']) > $maxDefault)) {
        $errors['description'] = 'Votre description ne peut pas être supérieure à ' . $maxDefault . 'caractères';
    }

    if (empty($data['cloth'])) {
        $errors['cloth'] = $emptyField;
    } elseif ((strlen($data['cloth']) > 100)) {
        $errors['cloth'] = 'Votre description ne peut pas être supérieure à ' . $maxDefault . 'caractères';
    }

    if (empty($data['available'])) {
        $errors['available'] = $emptyField;
    } elseif ((strlen($data['available']) > 100)) {
        $errors['available'] = 'Votre texte ne peut pas être supérieur à ' . $maxDefault . 'caractères';
    }

    if (empty($data['image'])) {
        $errors['image'] = $emptyField;
    } elseif ((strlen($data['image']) > $maxDefault)) {
        $errors['image'] = 'Le nom de votre image ne peut pas être supérieur à ' . $maxDefault . 'caractères';
    }

    if (empty($data['altAttribute'])) {
        $errors['altAttribute'] = $emptyField;
    } elseif ((strlen($data['altAttribute']) > $maxDefault)) {
        $errors['altAttribute'] = 'Le description de votre image ne peut pas être supérieure à ' . $maxDefault . 'caractères';
    }

    if (!in_array($data['pairSocks'], $pairSocks)) {
        $errors['pairSocks'] = 'La valeur doit faire partie de la liste';
    }

    if (isset($_POST['submit']) && empty($errors)) {
        $query = "INSERT INTO socks (name, price, description, image, cloth, available, pairSocks, altAttribute) VALUES (:name, :price, :description, :image, :cloth, :available, :pairSocks, :altAttribute)";
        $statement = $pdo->prepare($query);
        $statement -> bindValue(':name', $data['name'], PDO::PARAM_STR);
        $statement -> bindValue(':price', $data['price'], PDO::PARAM_STR);
        $statement -> bindValue(':description', $data['description'], PDO::PARAM_STR);
        $statement -> bindValue(':image', $data['image'], PDO::PARAM_STR);
        $statement -> bindValue(':cloth', $data['cloth'], PDO::PARAM_STR);
        $statement -> bindValue(':available', $data['available'], PDO::PARAM_STR);
        $statement -> bindValue(':pairSocks', $data['pairSocks'], PDO::PARAM_STR);
        $statement -> bindValue(':altAttribute', $data['altAttribute'], PDO::PARAM_STR);
        $statement -> execute();
        header('Location: add-socks-success.php');
    }
}

?>

<section class="container-fluid">
  <div class="row justify-content-center ">
    <div class="col-4">
      <h2>Ajouter des chaussettes</h2>
      <form method="POST" action="add-socks.php">
        <div class="form-group">
          <label for="name">Nom du produit</label>
          <input required class="form-control" type="text" id="name" name="name" placeholder="Insérez le nom du produit" value="<?= $data['name'] ?? '' ?>">
            <?php if (!empty($errors['name'])) : ?>
              <div class="error text-danger"> <?= $errors['name'] ?> </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
          <label for="price">Prix du produit</label>
          <input required class="form-control" type="number" step="0.01" id="price" name="price" placeholder="Insérez le prix du produit"
                 value="<?= $data['price'] ?? '' ?>">
            <?php if (!empty($errors['price'])) : ?>
              <div class="error text-danger"> <?= $errors['price'] ?> </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="description">Description du produit</label>
          <textarea required class="form-control" id="description" placeholder="Insérez la description du produit"
                    name="description"><?= $data['description'] ?? '' ?></textarea>
            <?php if (!empty($errors['description'])) : ?>
              <div class="error text-danger"> <?= $errors['description'] ?> </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="pairSocks">Lot</label>
          <select required class="form-control custom-select" id="pairSocks" name="pairSocks" >
            <option value="">Nombre de paires</option>
              <?php foreach ($pairSocks as $labelPair => $numberPair) : ?>
                <option value="<?= $numberPair ?>"
                    <?php if (!empty($data['pairSocks']) && $data['pairSocks'] === $numberPair): ?>
                      selected
                    <?php endif; ?>
                >
                    <?= $labelPair ?></option>
              <?php endforeach; ?>
          </select>
            <?php if (!empty($errors['pairSocks'])) : ?>
              <div class="error text-danger"> <?= $errors['pairSocks'] ?> </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="cloth">Matière</label>
          <input required class="form-control" type="text" id="cloth" name="cloth" placeholder="Insérez la matière du produit" value="<?= $data['cloth'] ?? '' ?>">
            <?php if (!empty($errors['cloth'])) : ?>
              <div class="error text-danger"> <?= $errors['cloth'] ?> </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="available">Disponibilité</label>
          <input required class="form-control " type="text" id="available" name="available" placeholder="Dites si le produit est disponible"
                 value="<?= $data['available'] ?? '' ?>">
            <?php if (!empty($errors['available'])) : ?>
              <div class="error text-danger"> <?= $errors['available'] ?> </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="image">Photo</label>
          <input required class="form-control" type="text" id="image" name="image" placeholder="Insérez le lien de la photo" value="<?= $data['image'] ?? '' ?>">
            <?php if (!empty($errors['image'])) : ?>
              <div class="error text-danger"> <?= $errors['image'] ?> </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="altAttribute">Description de la photo</label>
          <input required class="form-control" type="text" id="altAttribute" name="altAttribute" placeholder="Insérez la description de la photo" value="<?= $data['altAttribute'] ?? '' ?>">
            <?php if (!empty($errors['altAttribute'])) : ?>
              <div class="error text-danger"> <?= $errors['altAttribute'] ?> </div>
            <?php endif; ?>
        </div>


        <div class="form-group mt-5 text-center">
          <button type="submit" name="submit" value="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!
          </button>
        </div>
      </form>
    </div>
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