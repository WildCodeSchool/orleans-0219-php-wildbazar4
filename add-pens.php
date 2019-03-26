<?php
$category = 'pens';
$titleJumbotron = 'Stylos';
$textJumbotron = 'Découvrez notre nouvelle gamme de stylos';
?>
<?php
require 'headcategories.php';
require 'header.php' ?>
<?php
require 'function.php';
$stockagetab = [];
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
    if (empty($_POST['altAttribute']) || $_POST['altAttribute'] == '') {
        $errors['altAttribute'] = "Veuillez entré le nom de la photo ";
    }
    if (empty($_POST['productDescription']) || $_POST['productDescription'] == '') {
        $errors['productDescription'] = "Veuillez ajouté une description";
    }
    if (empty($errors)) {

        unset($_POST);
        header('location: add-pens-success.php');

    }
}


?>

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
                            <label for="photo">Nom photo produit</label>
                            <input type="text" class="form-control mb-2" id="photo" name="photoName">
                            <?php if (!empty($errors['photoName'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['photoName']; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group row  ">
                            <label for="Attribute">Description photo</label>
                            <input type="text" class="form-control " id="Attribute" name="altAttribute">
                            <?php if (!empty($errors['altAttribute'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['altAttribute']; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="form-group row">
                            <label for="colors">Couleur</label>
                            <select class="form-control" id="colors" name="productColor">
                                <option value="0"></option>
                                <option value="1">Noir</option>
                                <option value="2">Bleu</option>
                                <option value="3">Rouge</option>
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
                                      rows="3"><?php if (isset($_POST['productDescription'])) {
                                    echo strip_tags($_POST['productDescription']);
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