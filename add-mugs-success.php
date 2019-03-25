
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway" rel="stylesheet">
    <title>add-mugs-success</title>
</head>

    <?php
    $category = 'mugs';
    $titleJumbotron = 'Mugs';
    $textJumbotron = 'ajoutez le mug de vos rêves!';
    $linkJumbotron = 'addmug.php';
    require 'header.php';
    ?>

<body>
<p class="successSentence mt-5 mb-5">Votre produit a été ajouté!</p>
<div class="mt-5 mb-5 text-center">
    <a href ="add-mugs.php"><button type="submit" class="btn btn-confirm btn-lg m-t-3 ml-3 mr-3 ">revenir au formulaire</button></a>
  <a href ="index.php"><button type="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">revenir à l'accueil</button></a>
</div>

</body>
<footer>
    <?php require 'footer.php'?>
</footer>
</html>