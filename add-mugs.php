<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
  <link href="https://fonts.googleapis.com/css?family=Merienda+One%7CPermanent+Marker%7CRoboto%7CSource+Sans+Pro%7CRaleway"
        rel="stylesheet">
  <title>Mugs Wild Bazar</title>
</head>

<body>
<!-- header -->
<?php


$category = 'mugs';
$titleJumbotron = 'Mugs';
$textJumbotron = 'ajoutez le mug de vos rêves!';
$linkJumbotron = 'addmug.php';
include 'header.php';
?>


<!--Machinerie formulaire-->
<?php if ($_POST){
  if(strlen($_POST['productName']>2)){
    $data['productName']=strip_tags($_POST['productName']);
  }
  else{
    $errors['productName']=strip_tags($_POST['productName']);
  }

    if(is_numeric($_POST['productPrice'])&& 0<$_POST['productPrice']){
        $data['productPrice']=strip_tags($_POST['productPrice']);
    }
    else{
        $errors['productPrice']=strip_tags($_POST['productprice']);
    }


}?>







<!--FORMULAIRE-->




<section class="container-fluid justify-content-center">
  <h2 id="titrepageajouterunmug">Ajouter un mug !</h2>
  <div class="row justify-content-center">
<!--AJOUTER VALUE= VAR-->

    <form class="col-4" action="" method="post">
      <div class="form-group">
        <div>
          <label for="productName">Nom du produit:</label>
          <input type="text" class="form-control mb-2" id="productName" name="productName" placeholder="Mug électronique" value="<?php if (isset($data['productName']))
          {
            echo $data['productName'];
          }?>">
         <?php if(isset($errors['productName']))
         {
           echo 'Le nom de votre produit doit contenir au moins 3 caractères';
         }?>

                 </div>
        <div>
          <label class="" for="productPrice">Prix (Ne pas ajouter la devise):</label>
          <input type="number" step="0.01" class="form-control mb-2" id="productPrice" name="productPrice" placeholder="12,32">

        </div>
      </div>


          <label for="photoName">Nom photo produit</label>
          <input type="text" class="form-control mb-2" id="photoName" name="photoName" placeholder="exemple: a14.jpg">



          <label  for="altAttribute">Description photo:</label>
          <input type="text" class="form-control mb-2" id="altAttribute" name="altAttribute" placeholder="Exemple: mug vert et rouge en forme de cône.">



        <div class="form-group">
          <label for="productDescription">Description du produit</label>
          <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="255 caractères maximum"></textarea>

        </div>


      <div class="form-group container">
        <div class="row">
          <div class="col-4">
        <label for="productRange">Gamme</label>
        <select class="form-control" id="productRange" name="productRange">
          <option></option>
          <option>Luxe</option>
          <option>Standard</option>
          <option>Basique</option>

        </select>
          </div>
        <div class="col-4">
        <label for="productSize">Taille</label>
        <select class="form-control" id="productSize" name="productSize">
          <option></option>
          <option>Petite</option>
          <option>Moyenne</option>
          <option>Grande</option>

        </select>
        </div>

          <div class="col-4">
            <label for="productDrink">Boisson</label>
            <select class="form-control" id="productDrink" name="productDrink">
              <option></option>
              <option>Thé</option>
              <option>Café</option>
              <option>Lait</option>

            </select>
          </div>
      </div>


      <div class="form-group  mt-5 text-center">
        <button type="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!</button>
      </div>

    </form>


      <?php
     /* if ((count($contactForm) >= 5) && (count($errors) < 1)) {
          header('Location:success.php');
      }*/


      ?>


  </div>


</section>


<?php include 'footer.php'; ?>

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