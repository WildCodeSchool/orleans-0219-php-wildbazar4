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

require 'function.php';


$category = 'mugs';
$titleJumbotron = 'Mugs';
$textJumbotron = 'ajoutez le mug de vos rêves!';
$linkJumbotron = 'addmug.php';
$data=[];
$errors=[];
$globalData=[];

require 'header.php';
?>


<!--Machinerie formulaire-->
<?php if ($_POST){
  cleanArray($_POST);




  if(strlen($_POST['productName'])<255){
    $data['productName']=($_POST['productName']);


  }
  else{
    $errors['productName']=($_POST['productName']);

      $errorMessage['productName']='<div class="text-danger">Le nom de votre produit doit contenir au moins 3 caractères, mais moins de 255</div>';
  }

    if(is_numeric($_POST['productPrice'])&& 0<$_POST['productPrice']){
        $data['productPrice']=($_POST['productPrice']);

    }
    else{
        $errors['productPrice']=($_POST['productPrice']);

        $errorMessage['productPrice']='<div class="text-danger">Le prix de votre produit ne peut pas être inférieur à 0, ou contenir des caractères autres que 1 2 3 4 5 6 7 8 9 ,</div>';
    }

    if(strlen($_POST['photoName'])>0&& strlen($_POST['productName'])<255){
        $data['photoName']=($_POST['photoName']);

    }
    else{
        $errors['photoName']=($_POST['photoName']);

        $errorMessage['photoName']='<div class="text-danger">Le nom de votre photo doit être compris entre 1 et 255 caractères</div>';
    }


    if(strlen($_POST['altAttribute'])>0 && strlen($_POST['productName'])<255){
      $data['altAttribute']=($_POST['altAttribute']);

    }
    else{
      $errors['altAttribute']=($_POST['altAttribute']);
      $errorMessage['altAttribute']='<div class="text-danger">La description doit être remplie et faire moins de 255 caractères!</div>';
    }

    if(strlen($_POST['productDescription'])>0 && strlen($_POST['productDescription'])<255){
        $data['productDescription']=($_POST['productDescription']);
    }
    else{
        $errors['productDescription']=($_POST['productDescription']);
        $errorMessage['productDescription']='<div class="text-danger">La description doit être remplie et faire moins de 255 caractères!</div>';
    }

    if(strlen($_POST['productRange'])>3 && strlen($_POST['productRange'])<255){
        $data['productRange']=($_POST['productRange']);
    }
    else{
        $errors['productRange']=($_POST['productRange']);
        $errorMessage['productRange']='<div class="text-danger">Choisissez!</div>';
    }


    if(strlen($_POST['productDrink'])>3 && strlen($_POST['productDrink'])<255){
        $data['productDrink']=($_POST['productDrink']);
    }
    else{
        $errors['productDrink']=($_POST['productDrink']);
        $errorMessage['productDrink']='<div class="text-danger">Choisissez!</div>';
    }

    if(strlen($_POST['productSize'])>3 && strlen($_POST['productSize'])<255){
        $data['productSize']=($_POST['productSize']);
    }
    else{
        $errors['productSize']=($_POST['productSize']);
        $errorMessage['productSize']='<div class="text-danger">Choisissez! </div>';
    }

}
      if ((count($data) >= 5) && (count($errors) < 1)&&($_POST)) {
        header('location:add-mugs-success.php');






      }


/*Machinerie selected*/
$range=['Luxe', 'Standard', 'Basique'];
$size=['Petite','Moyenne','Grande'];
$drink=['Café', 'Thé', 'Lait'];

      ?>










<!--FORMULAIRE-->




<section class="container-fluid justify-content-center">
  <h2>Ajouter un mug !</h2>
  <div class="row justify-content-center">
<!--AJOUTER VALUE= VAR-->

    <form class="col-4" action="" method="post">
      <div class="form-group">
        <div>
          <label for="productName">Nom du produit:</label>
          <input type="text" class="form-control mb-2" id="productName" name='productName' placeholder="Mug électronique" value="<?=$data['productName']??''?>">

         <?=$errorMessage['productName']??''?>

                 </div>
        <div>
          <label for="productPrice">Prix (Ne pas ajouter la devise):</label>
          <input type="number" step="0.01" class="form-control mb-2" id="productPrice" name="productPrice" placeholder="12,32" value="<?= $data['productPrice']??'';?>">
            <?= $errorMessage['productPrice']??'' ?>

        </div>
      </div>


          <label for="photoName">Nom photo produit</label>
          <input type="text" class="form-control mb-2" id="photoName" name="photoName" placeholder="exemple: a14.jpg" value="<?= $data['photoName']??'';?>">

        <?=$errorMessage['photoName']??''?>


          <label  for="altAttribute">Description photo:</label>
          <input type="text" class="form-control mb-2" id="altAttribute" name="altAttribute" placeholder="Exemple: mug vert et rouge en forme de cône."value="<?=$data['altAttribute']??''?>">

<?=$errorMessage['altAttribute']??''?>


        <div class="form-group">
          <label for="productDescription">Description du produit</label>
          <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="255 caractères maximum"><?= $data['productDescription']??''?></textarea>
            <?=$errorMessage['productDescription']??''?>
        </div>


      <div class="form-group container">
        <div class="row">
          <div class="col-4">
        <label for="productRange">Gamme</label>
        <select class="form-control" id="productRange" name="productRange">
          <option></option>
          <?php foreach ($range as $item)
         {if ($item==$data['productRange']){
                      echo '<option selected>'.$item.'</option>';
                  }
                  else {
                      echo '<option' . '>' . $item . '</option>';
                  }
                }

            ?>


        </select>
              <?=$errorMessage['productRange']??''?>
          </div>
        <div class="col-4">
        <label for="productSize">Taille</label>
        <select class="form-control" id="productSize" name="productSize">
          <option></option>
            <?php foreach ($size as $item)
            {if ($item==$data['productSize']){
                      echo '<option selected>'.$item.'</option>';
                  }
                  else {
                      echo '<option' . '>' . $item . '</option>';
                  }

            }
            ?>

        </select>
            <?=$errorMessage['productSize']??''?>
        </div>

          <div class="col-4">
            <label for="productDrink">Boisson</label>
            <select class="form-control" id="productDrink" name="productDrink">
              <option></option>
                <?php foreach ($drink as $item){
                  if ($item==$data['productDrink']){
                      echo '<option selected>'.$item.'</option>';
                  }
                  else {
                      echo '<option' . '>' . $item . '</option>';
                  }
                }
                ?>


            </select>
              <?=$errorMessage['productDrink']??''?>
          </div>
      </div>


      <div class="form-group  mt-5 text-center">
        <button type="submit" class="btn btn-confirm mx-auto btn-lg m-t-3">Envoyer!</button>
      </div>

    </form>





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