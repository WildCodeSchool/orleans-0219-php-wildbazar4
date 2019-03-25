<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway" rel="stylesheet">
    <title>Chaussettes Wild Bazar</title>
</head>

<body>
<!-- header -->
<?php
    $category = 'socks';
    $titleJumbotron = 'Chaussettes';
    $textJumbotron = 'Ajoutez vos chaussettes ici';

    require 'header.php';
    require 'function.php';

    $errors = [];
    $pairSocks = ['1 paire' => 'one','Lot de 2 paires' => 'two','Lot de 3 paires' => 'three','Lot de 4 paires' => 'four','Lot de 5 paires' => 'five'];
    $emptyField = 'Le champ ne peut pas être vide.';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $data = cleanArray($_POST);
        $maxLengthName = 100;
        $maxDefault = 255;

        if (empty($data['name'])){
            $errors['name'] = $emptyField;
        } elseif ((strlen($data['name']) > $maxLengthName)) {
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
        } elseif ((strlen($data['cloth']) > 255)) {
            $errors['cloth'] = 'Votre description ne peut pas être supérieure à ' . $maxDefault . 'caractères';
        }

        if (empty($data['available'])) {
            $errors['available'] = $emptyField;
        } elseif ((strlen($data['available']) > 255)) {
            $errors['available'] = 'Votre texte ne peut pas être supérieur à ' . $maxDefault . 'caractères';
        }

        if (empty($data['image'])) {
            $errors['image'] =  $emptyField;
        } elseif ((strlen($data['image']) > 255)) {
            $errors['image'] = 'Le nom de votre image ne peut pas être supérieur à ' . $maxDefault . 'caractères';
        }

        if (empty($data['alt'])) {
            $errors['alt'] =  $emptyField;
        } elseif ((strlen($data['alt']) > 255)) {
            $errors['alt']  = 'Le description de votre image ne peut pas être supérieure à ' . $maxDefault . 'caractères';
        }

        if (!in_array($data['pairSocks'], $pairSocks)) {
            $errors['pairSocks'] = 'La valeur doit faire partie de la liste';
        }

        if(isset($_POST['submit']) && empty($errors)){
            header("Location: add-socks.php");
        }
    }

?>

<section class="container-fluid">
    <div class="row justify-content-center " >
        <div class="col-6">
            <h2>Ajouter des chaussettes</h2>
            <form method="POST" action="add-socks.php" >
                <div class="form-group">
                    <label for="name">Nom du produit</label>
                    <input required class="form-control" type="text"  id="name"  name="name" value="<?= $data['name'] ?? '' ?>">
                    <?php if (!empty($errors['name'])) : ?>
                    <div class="error text-danger"> <?= $errors['name'] ?> </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="price">Prix du produit</label>
                    <input required class="form-control" type="number" step="0.01" id="price" name="price" value="<?= $data['price'] ?? ''?>">
                    <?php if (!empty($errors['price'])) : ?>
                        <div class="error text-danger"> <?= $errors['price'] ?> </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="description">Description du produit</label>
                    <textarea required class="form-control" id="description" name="description"><?= $data['description'] ?? ''?></textarea>
                    <?php if (!empty($errors['description'])) : ?>
                        <div class="error text-danger"> <?= $errors['description'] ?> </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="pairSocks">Lot</label>
                    <select required class="form-control custom-select"  id="pairSocks" name="pairSocks">
                        <option value="">Nombre de paires</option>
                        <?php foreach ($pairSocks as $labelPair => $numberPair) : ?>
                            <option value="<?=$numberPair?>"
                            <?php if(!empty($data['pairSocks']) && $data['pairSocks'] === $numberPair): ?>
                                selected
                            <?php endif; ?>
                            >
                            <?= $labelPair?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (!empty($errors['pairSocks'])) : ?>
                        <div class="error text-danger"> <?= $errors['pairSocks']?> </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="cloth">Matière</label>
                    <input required class="form-control" type="text"  id="cloth"  name="cloth" value="<?= $data['cloth'] ?? '' ?>">
                    <?php if (!empty($errors['cloth'])) : ?>
                        <div class="error text-danger"> <?= $errors['cloth'] ?> </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="available">Disponibilité</label>
                    <input required class="form-control " type="text"  id="available"  name="available" value="<?= $data['available'] ?? ''?>">
                    <?php if (!empty($errors['available'])) : ?>
                        <div class="error text-danger"> <?= $errors['available'] ?> </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="image">Photo</label>
                    <input required class="form-control" type="text"  id="image"  name="image" value="<?= $data['image'] ?? ''?>">
                    <?php if (!empty($errors['image'])) : ?>
                        <div class="error text-danger"> <?= $errors['image'] ?> </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="alt">Description de la photo</label>
                    <input required class="form-control" type="text"  id="alt"  name="alt" value="<?= $data['alt'] ?? ''?>">
                    <?php if (!empty($errors['alt'])) : ?>
                        <div class="error text-danger"> <?= $errors['alt'] ?> </div>
                    <?php endif; ?>
                </div>


                <div class="form-group mt-5 text-center">
                    <button type="submit" name="submit" value="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!</button>
                </div>
            </form>
        </div>
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