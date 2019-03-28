<?php
require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$query = "INSERT INTO pens (name, photo, alt_attribute, description, price, hight, pod, quantity, colors ) VALUES (:name, :photo, :description, :alt_attribute, :price, :hight, :pod, :quantity, :colors)";
$statement = $pdo->prepare($query);
$category = 'pens';
$titleJumbotron = 'Stylos';
$textJumbotron = 'Découvrez notre nouvelle gamme de stylos';?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/images/favicon.ico"/>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway"
          rel="stylesheet">
    <title><?= $titleJumbotron?> Wild Bazar</title>
</head>

<body>
<?php
require 'header.php';
?>
<?php
$colors = ['bleu', 'rouge', 'noir'];
$errors = [];
if ($_POST) {
    cleanArray($_POST);

    if (empty($_POST['productName']) || $_POST['productName'] == '') {
        $errors['productName'] = "Nom invalide ";
    }

    if (empty($_POST['productQuantity']) || $_POST['productQuantity'] == '' || !filter_var($_POST['productQuantity'], FILTER_VALIDATE_INT) || $_POST['productQuantity'] <= 0 || $_POST['productQuantity'] > 10) {
        $errors['productQuantity'] = "Quantité invalide";
    }
    if (empty($_POST['productPod']) || $_POST['productPod'] == '' || !is_numeric($_POST['productPod']) || $_POST['productPod'] <= 0) {
        $errors['productPod'] = "Poids invalide";
    }
    if (empty($_POST['productHight']) || $_POST['productHight'] == '' || !is_numeric($_POST['productHight']) || $_POST['productHight'] <= 0) {
        $errors['productHight'] = "Taille invalide";
    }


    if (empty($_POST['productPrice']) || $_POST['productPrice'] == '' || !is_numeric($_POST['productPrice']) || $_POST['productPrice'] < 0) {
        $errors['productPrice'] = "Veuillez entrer un prix";

    }

    if (!in_array($_POST['productColor'], $colors)) {
        $errors['productColor'] = "Veuillez choisir une couleur";

    }
    if (empty($_POST['photoName']) || $_POST['photoName'] == '') {
        $errors['photoName'] = "Veuillez inséré une url";

    }
    if (empty($_POST['altAtribute']) || $_POST['altAtribute'] == '') {
        $errors['altAtribute'] = "Veuillez entré le nom de la photo ";
    }
    if (empty($_POST['productDescription'])  || $_POST['productDescription'] == '' ) {
        $errors['productDescription'] = "Veuillez ajouté une description";
    }
    if (empty($errors)) {
        $statement->bindValue(':name',$_POST['productName'], PDO::PARAM_STR);
        $statement->bindValue(':photo',$_POST['photoName'], PDO::PARAM_STR);
        $statement->bindValue(':alt_attribute',$_POST['altAtribute'], PDO::PARAM_STR);
        $statement->bindValue(':colors',$_POST['productColor'], PDO::PARAM_STR);
        $statement->bindValue(':description',$_POST['productDescription'], PDO::PARAM_STR);
        $statement->bindValue(':price',$_POST['productPrice'], PDO::PARAM_INT);
        $statement->bindValue(':hight',$_POST['productHight'], PDO::PARAM_INT);
        $statement->bindValue(':pod',$_POST['productPod'], PDO::PARAM_INT);
        $statement->bindValue(':quantity',$_POST['productQuantity'], PDO::PARAM_INT);
        $statement->execute();
        /**
        header('location: add-pens-success.php');
         *
         */
        header('location: add-pens-sucess.php');

    }
}?>




    <section>

        <div class="container ">
            <div class="row justify-content-center">
                <div class="form col-6">
                    <form action="add-pens.php" method="POST">
                        <div class="form-group  ">
                            <div class="row">
                                <label for="nameProduct">Nom du produit</label>
                                <input type="text" class="form-control" id="nameProduct" name="productName"
                                       value="<?php if (isset($_POST['productName'])) {
                                           echo $_POST['productName'];
                                       } ?>">

                                <?php if (!empty($errors['productName'])): ?>
                                    <div class="alert alert-danger sizeFont">
                                        <?= $errors['productName']; ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="form-group row  ">
                            <label for="photo">Url produit</label>
                            <input type="text" class="form-control mb-2" id="photo" name="photoName" value = "<?php if (isset($_POST['photoName'])) {echo $_POST['photoName'];
                            } ?>">
                            <?php if (!empty($errors['photoName'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['photoName']; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group row  ">
                            <label for="Attribute">Description photo</label>
                            <input type="text" class="form-control " id="Attribute" name="altAtribute" value = "<?php if (isset($_POST['altAtribute'])) {echo $_POST['altAtribute'];
                            } ?>">
                            <?php if (!empty($errors['altAtribute'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['altAtribute']; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="form-group row">
                            <label for="colors">Couleur</label>
                            <select class="form-control" id="colors" name="productColor">
                                <option>Couleurs</option>
                                <?php foreach ($colors as $color => $value) : ?>
                                    <option value="<?= $value ?>" <?php if (!empty($_POST['productColor']) && $_POST['productColor'] === $value) : ?>
                                        selected
                                    <?php endif; ?> > <?= $value ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (!empty($errors['productColor'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['productColor']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row  ">

                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="productPrice"
                                   value="<?php if (isset($_POST['productPrice'])) {
                                       echo $_POST['productPrice'];
                                   } ?>">
                            <?php if (!empty($errors['productPrice'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['productPrice']; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="form-group row">
                            <label for="msg">Description</label>
                            <textarea class="form-control" id="msg" name="productDescription"
                                      rows="3"><?php if (isset($_POST['productDescription'])) {echo $_POST['productDescription'];
                                } ?></textarea>
                            <?php if (!empty($errors['productDescription'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['productDescription']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row  ">
                            <div class="form-group col-4">
                                <label for="quantity">Quantité</label>
                                <input type="number" min="1" max="10" class="form-control " id="quantity"
                                       value="<?php if (isset($_POST['productQuantity'])) {
                                           echo $_POST['productQuantity'];
                                       } ?>"
                                       name="productQuantity">
                                <?php if (!empty($errors['productQuantity'])): ?>
                                    <div class="alert alert-danger sizeFont">
                                        <?= $errors['productQuantity']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-4">

                                <label for="hight">Taille</label>
                                <input type="number" step="0.01" class="form-control" id="hight" name="productHight"
                                       value="<?php if (isset($_POST['productHight'])) {
                                           echo $_POST['productHight'];
                                       } ?>">
                                <?php if (!empty($errors['productHight'])): ?>
                                    <div class="alert alert-danger sizeFont">
                                        <?= $errors['productHight']; ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group col-4">
                                <label for="pod">Poids</label>
                                <input type="number" step="0.01" class="form-control" id="pod" name="productPod"
                                       value="<?php if (isset($_POST['productPod'])) {
                                           echo $_POST['productPod'];
                                       } ?>">
                                <?php if (!empty($errors['productPod'])): ?>
                                    <div class="alert alert-danger sizeFont">
                                        <?= $errors['productPod']; ?>
                                    </div>
                                <?php endif; ?>

                            </div>

                        </div>


                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!
                            </button>


                        </div>
                    </form>

                </div>

            </div>
        </div>


    </section>

<?php include 'footer.php' ?>
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
