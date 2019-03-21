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

?>
<?php
    $category = 'socks';
    $titleJumbotron = 'Chaussettes';
    $textJumbotron = 'Ajoutez vos chaussettes ici';
    include 'header.php';

    // define variables and set to empty values
    $nameErr = $priceErr = $descriptionErr = $clothErr = $availableErr = $imageErr = $altErr = "";
    $name = $price = $description = $quantity = $cloth = $available = $image = $alt = "";
    $errorCount = 0;
    $emptyField = 'Le champ ne peut pas être vide';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $quantity = ($_POST["quantity"]);

        if (empty($_POST["name"])){
            $nameErr = $emptyField;
            $errorCount++;
        } elseif ((strlen($_POST["name"]) > 255)) {
            $nameErr = "Votre nom de produit est trop long.";
            $errorCount++;
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["price"])) {
            $priceErr = $emptyField;
            $errorCount++;
        } elseif (!is_numeric($_POST["price"])) {
            $priceErr = "Vous ne pouvez entrez que des chiffres.";
            $errorCount++;
        } else {
            $price = test_input($_POST["price"]);
        }

        if (empty($_POST["description"])) {
            $descriptionErr = $emptyField;
            $errorCount++;
        } elseif ((strlen($_POST["description"]) > 255)) {
            $descriptionErr = "Votre description est trop longue.";
            $errorCount++;
        } else {
            $description = test_input($_POST["description"]);
        }

        if (empty($_POST["cloth"])) {
            $clothErr = $emptyField;
            $errorCount++;
        } elseif ((strlen($_POST["cloth"]) > 255)) {
            $clothErr = "Votre description est trop longue.";
            $errorCount++;
        } else {
            $cloth = test_input($_POST["cloth"]);
        }

        if (empty($_POST["available"])) {
            $availableErr = $emptyField;
            $errorCount++;
        } elseif ((strlen($_POST["available"]) > 255)) {
            $availableErr = "Votre texte est trop long.";
            $errorCount++;
        } else {
            $available = test_input($_POST["available"]);
        }

        if (empty($_POST["image"])) {
            $imageErr = $emptyField;
            $errorCount++;
        } elseif ((strlen($_POST["image"]) > 255)) {
            $imageErr = "Le nom de votre image est trop long.";
            $errorCount++;
        } else {
            $image = test_input($_POST["image"]);
        }

        if (empty($_POST["alt"])) {
            $altErr = $emptyField;
            $errorCount++;
        } elseif ((strlen($_POST["alt"]) > 255)) {
            $altErr = "La description de votre image est trop longue.";
            $errorCount++;
        } else {
            $alt = test_input($_POST["alt"]);
        }


        if(isset($_POST['submit']) && $errorCount == 0){
            header( "Location: add-socks.php");
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
<section class="container-fluid">
    <div class="justify-content-center" >
        <h2>Ajouter des chaussettes</h2>
        <form method="POST" action="add-socks.php" >
            <div>
                <label for="name">Nom du produit</label>
                <input type="text"  id="name"  name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span>
            </div>

            <div>
                <label for="price">Prix du produit</label>
                <input type="number" step="0.01" id="price" name="price" value="<?php echo $price;?>">
                <span class="error">* <?php echo $priceErr;?></span>
            </div>

            <div>
                <label for="description">Description du produit</label>
                <textarea id="description" name="description"><?php echo $description;?></textarea>
                <span class="error">* <?php echo $descriptionErr;?></span>
            </div>

            <div>
                <label for="quantity">Lot</label>
                <select id="quantity" name="quantity" value="<?php echo $quantity;?>">
                    <option value="socks-quantity-one">1 paire</option>
                    <option value="socks-quantity-two">Lot de 2 paires</option>
                    <option value="socks-quantity-three">Lot de 3 paires</option>
                    <option value="socks-quantity-four">Lot de 4 paires</option>
                    <option value="socks-quantity-five">Lot de 5 paires</option>
                    <span>*</span>
                </select>
            </div>
            <div>
                <label for="cloth">Matière</label>
                <input type="text"  id="cloth"  name="cloth" value="<?php echo $cloth;?>">
                <span class="error">* <?php echo $clothErr;?></span>
            </div>
            <div>
                <label for="available">Disponibilité</label>
                <input type="text"  id="available"  name="available" value="<?php echo $available;?>">
                <span class="error">* <?php echo $availableErr;?></span>
            </div>

            <div>
                <label for="image">Photo</label>
                <input type="text"  id="image"  name="image" value="<?php echo $image;?>">
                <span class="error">* <?php echo $imageErr;?></span>
            </div>

            <div>
                <label for="alt">Description de la photo</label>
                <input type="text"  id="alt"  name="alt" value="<?php echo $alt;?>">
                <span class="error">* <?php echo $altErr;?></span>
            </div>


            <div class="form-group mt-5 text-center">
                <button type="submit" name="submit" value="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!</button>
            </div>
        </form>
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