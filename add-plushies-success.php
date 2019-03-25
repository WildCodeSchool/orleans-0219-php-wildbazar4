
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="add-plushies.css" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway" rel="stylesheet">
    <title>add-plushies-success</title>
</head>
<header>
    <?php
    $category = 'plushiesjumbotron';
    $titleJumbotron = 'Peluches';
    $textJumbotron = 'Tout un monde de douceur!';
    require 'header.php';
    ?>
</header>
<body>
<h1 class="successSentence">Votre produit a été ajouté!</h1>
<div class="form-groupPlushSuccess mt-5 text-center">
    <a href ="add-plushies.php"><button type="submit" class="btn btnSuccess-confirm mx-auto btn-lg m-t-3">revenir au formulaire</button></a>
</div>

</body>
<footer>
    <?php include 'footer.php'?>
</footer>
</html>