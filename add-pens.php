<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway"
          rel="stylesheet">

    <title>Stylos Wild Bazar</title>
</head>
<body>
<?php
$category = 'pens';
$titleJumbotron = 'Stylos';
$textJumbotron = 'Découvrez notre nouvelle gamme de stylos';
?>
<?php include 'header.php' ?>
<?php
$errors = [];
if (array_key_exists('submit', $_POST)) {

    if (empty($_POST['productName']) || $_POST['productName'] == '' || !filter_var($_POST['productName'], FILTER_SANITIZE_STRING)) {
        $errors['productName'] = "Nom invalide ";
    }

    if (empty($_POST['productQuantity']) || $_POST['productQuantity'] == '' || !filter_var($_POST['productQuantity'], FILTER_VALIDATE_INT) || $_POST['productQuantity'] <=0 || $_POST['productQuantity'] >=10) {
        $errors['productQuantity'] = "Quantité invalide";
    }
    if (empty($_POST['productPod']) || $_POST['productPod'] == '' || !filter_var($_POST['productPod'], FILTER_VALIDATE_INT)|| $_POST['productQuantity'] <=0)  {
        $errors['productPod'] = "Poids invalide";
    }
    if (empty($_POST['productHight']) || $_POST['productHight'] == '' || !filter_var($_POST['productHight'], FILTER_VALIDATE_INT)|| $_POST['productQuantity'] <=0)  {
        $errors['productHight'] = "Taille invalide";
    }


    if (empty($_POST['productPrice']) || $_POST['productPrice'] == '' || !is_numeric($_POST['productPrice']) || $_POST['productPrice'] < 0) {
        $errors['productPrice'] = "Veuillez entrer un prix";
    }
    if (empty($_POST['productDescription']) || $_POST['productDescription'] == '' ) {
        $errors['productDescription'] = "Veuillez ajouté une description";
    }
    if (empty($errors)) {
        echo 'message envoyé';
        unset($_POST);
        header('refresh:5;url= add-pens.php' );
    }
}


?>

<section>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="form col-6">
                <form action="add-pens.php" method="POST">
                    <div class="form-group  text-center">
                        <div class="row">
                            <label for="nameProduct">Nom du produit</label>
                            <input type="text" class="form-control" id="nameProduct" name="productName" placeholder="John Doe" value = "<?php if (isset($_POST['productName'])){echo $_POST['productName']; }  ?>">

                            <?php if (!empty($errors['productName'])): ?>
                            <div class="alert alert-danger sizeFont">
                                <?= $errors['productName']; ?>
                            </div>
                                <?php endif ; ?>

                        </div>
                    </div>
                    <div class="form-group row text-center ">

                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="productPrice" value = "<?php if (isset($_POST['productPrice'])){echo $_POST['productPrice']; }  ?>">
                        <?php if (!empty($errors['productPrice'])): ?>
                        <div class="alert alert-danger sizeFont">
                            <?= $errors['productPrice']; ?>
                        </div>
                            <?php endif ; ?>

                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-4">
                            <label for="quantity">Quantité</label>
                            <input type="number" min="1" max="10" class="form-control " id="quantity" value = "<?php if (isset($_POST['productQuantity'])){echo $_POST['productQuantity']; }  ?>"
                                   name="productQuantity">
                            <?php if (!empty($errors['productQuantity'])): ?>
                                <div class="alert alert-danger sizeFont">
                                    <?= $errors['productQuantity']; ?>
                                </div>
                            <?php endif ; ?>
                        </div>

                        <div class="form-group col-4">

                            <label for="hight">Taille</label>
                            <input type="number" step="0.01" class="form-control" id="hight" name="productHight" value = "<?php if (isset($_POST['productHight'])){echo $_POST['productHight']; }  ?>">
                            <?php if (!empty($errors['productHight'])): ?>
                            <div class="alert alert-danger sizeFont">
                                <?= $errors['productHight']; ?>
                            </div>
                                <?php endif; ?>

                        </div>
                        <div class="form-group col-4">
                            <label for="pod">Poids</label>
                            <input type="number" step="0.01" class="form-control" id="pod" name="productPod" value = "<?php if (isset($_POST['productPod'])){echo $_POST['productPod']; }  ?>">
                            <?php if (!empty($errors['productPod'])): ?>
                            <div class="alert alert-danger sizeFont">
                                <?= $errors['productPod']; ?>
                            </div>
                                <?php endif; ?>

                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="msg">Description</label>
                        <textarea class="form-control" id="msg" name="productDescription" rows="3" ><?php if (isset($_POST['productDescription'])){echo strip_tags($_POST['productDescription']); }  ?></textarea>
                        <?php if (!empty($errors['productDescription'])): ?>
                            <div class="alert alert-danger sizeFont">
                                <?= $errors['productDescription']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" name ="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!</button>


                    </div>
                </form>

            </div>

        </div>
    </div>


</section>
<?php include 'footer.php' ?>

</body>

</html>