<?php
require "../orleans-0219-php-wildbazar4/cleanform.php";

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $data = cleanForm ($_POST);

    if (empty($_POST['plushName'])) {
        $errors['plushNameEmpty'] = "Entrez un nom, s'il vous plait!";
    }
    if (strlen($_POST['plushName']) > 100){
        $errors['plushNameMaxStrenghtLenght'] = "Le nom ne doit pas faire plus de 100 caractères!";
    }

    if (empty($_POST['plushPrice'])) {
        $errors['plushPriceEmpty'] = "Ajoutez le prix, s'il vous plait!";
    }

    if (empty($_POST['plushDescription'])) {
        $errors['plushDescriptionEmpty'] = "Ajoutez une description, s'il vous plait!";
    }
    if (strlen($_POST['plushDescription']) > 500){
        $errors['plushDescriptionMaxStrenghtLenght'] = "La description ne doit pas faire plus de 500 caractères!";
    }

    if (empty($_POST['plushSize'])) {
        $errors['plushSizeEmpty'] = "Ajoutez la taille, s'il vous plait!";
    }

    if (strlen($_POST['plushSize']) > 6){
        $errors['plushSizeMaxStrenghtLenght'] = "La taille ne doit pas faire plus de 6 caractères!";
    }

    if (empty($_POST['plushColor'])) {
        $errors['plushColorEmpty'] = "Sélectionnez la couleur, s'il vous plait!";
    }

    if (empty($errors)) {
        header("location: add-plushies-success.php");

    }
}

?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="add-plushies.css" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway" rel="stylesheet">
    <title>add-plushies</title>
</head>
<body>

<header>
    <?php
    $category = 'plushiesjumbotron';
    $jumbotronH1 = 'Peluches';
    $jumbotronP = 'Tout un monde de douceur!';
    include 'header.php';
    ?>
    <h2 class="E_titre">PELUCHES</h2>
</header>



<div class="card mb-3" style="#">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="https://i.goopics.net/m9bVW.jpg" class="card-img" alt="peluche">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <div class="container">
                    <form class="form" method="Post" target="#">
                        <div class="form-group plushName">

                                <label for="plushName">Nom de la peluche :</label>
                            <p><input class="form-control" type="text" style='background-color: #F5F7F7;' id="plushName" name="plushName" placeholder="nom..." required></p>

                            <p class="text-danger"><?php if(isset($errors["plushNameEmpty"])) echo $errors['plushNameEmpty']?><?php if(isset($errors["plushNameMaxStrenghtLenght"])) echo $errors['plushNameMaxStrenghtLenght'];?></p>
                        </div>

                        <div class="form-group plushPrice">

                                <label for="plushPrice">Prix :</label>
                            <p><input class="form-control" type="text" style='background-color: #F5F7F7;' id="plushPrice" name="plushPrice" placeholder="0.00€..." required></p>

                            <p class="text-danger"><?php if(isset($errors["plushPriceEmpty"])) echo $errors['plushPriceEmpty'];?></p>
                        </div>

                        <div class="form-group plushDescription">

                                <label for="plushDescription">Description :</label>
                                <textarea class="form-control" id="plushDescription" style='background-color: #F5F7F7;' name="plushDescription" rows="3" placeholder="description..." required></textarea>

                            <p class="text-danger"><?php if(isset($errors["plushDescriptionEmpty"])) echo $errors['plushDescriptionEmpty'];?><?php if(isset($errors['plushDescriptionMaxStrenghtLenght'])) echo $errors['plushDescriptionMaxStrenghtLenght'];?></p>
                        </div>

                        <div class="form-group plushSize">

                                <label for="plushSize">Taille :</label>
                                <input class="form-control" type="text" id="plushSize" style='background-color: #F5F7F7;' name="plushSize" placeholder="cm..." required>

                            <p class="text-danger"><?php if(isset($errors["plushSizeEmpty"])) echo $errors['plushSizeEmpty'];?><?php if(isset($errors['plushSizeMaxStrenghtLenght'])) echo $errors['plushSizeMaxStrenghtLenght'];?></p>
                        </div>

                        <div class="form-group plushColor">

                                <label for="plushColor"></label>
                                <select class="plushColor" id="plushColor" style='background-color: #F5F7F7;' name="plushColor" required>
                                    <option selected>Couleurs...</option>
                                    <option value="blanc">blanc</option>
                                    <option value="jaune">jaune</option>
                                    <option value="vert">vert</option>
                                    <option value="bleu">bleu</option>
                                    <option value="violet">violet</option>
                                    <option value="rouge">rouge</option>
                                    <option value="orange">orange</option>
                                    <option value="marron">marron</option>
                                </select>

                            <p class="text-danger"><?php if(isset($errors["plushColorEmpty"])) echo $errors['plushColorEmpty'];?></p>
                        </div>
                        <div class="form-group button">
                            <button type="submit" class="btn btnSuccess-confirm mx-auto btn-lg m-t-3" name="submit">envoyer!</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<footer>
    <?php include 'footer.php'?>
</footer>
</html>
