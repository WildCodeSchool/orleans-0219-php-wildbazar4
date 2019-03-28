<?php

$category = 'mugs';
$titleJumbotron = 'Mugs';
$textJumbotron = 'Ajoutez le mug de vos rêves!';
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
  <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway"
        rel="stylesheet">
  <title>add-<?= $category ?>-success</title>
</head>

<body>

<?php require 'header.php'?>


<p class="successSentence mt-5 mb-5">Votre produit a été ajouté!</p>
<div class="mt-5 mb-5 text-center">
  <a href="add-<?= $category ?>.php">
    <button type="submit" class="btn btn-confirm btn-lg m-t-3 ml-3 mr-3 ">Revenir au formulaire</button>
  </a>
  <a href="index.php">
    <button type="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Revenir à l'accueil</button>
  </a>
</div>

<?php require 'footer.php'?>

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
