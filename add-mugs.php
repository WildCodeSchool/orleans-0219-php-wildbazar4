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


<!--FORMULAIRE-->




<section class="container-fluid justify-content-center">
  <h1>Ajouter un mug !</h1>
  <div class="row justify-content-center">


    <form action="" method="post">
      <div class="form-group">
        <div>
          <label class="" for="name">Nom:</label>
          <input type="text" class="form-control mb-2" id="name" name="userName" placeholder="Dupont" required>
            <?php
            if (!empty($_POST)) {
                if (strlen($_POST['userName']) > 2) {
                    $contactForm['userName'] = $_POST['userName'];
                } else {
                    $errors['userName'] = $_POST['userName'];
                    echo "Votre nom ne peut pas faire moins de deux lettres!";
                }
            }
            ?>
        </div>
        <div>
          <label class="" for="firstName">Prénom :</label>
          <input type="text" class="form-control mb-2" id="firstName" name="userFirstName" placeholder="Jeanne"
                 required>
            <?php
            if (!empty($_POST)) {
                if (strlen($_POST['userFirstName']) > 2) {
                    $contactForm['firstName'] = $_POST['userFirstName'];
                } else {
                    $errors['firstName'] = $_POST['userFirstName'];
                    echo "Votre prénom ne peut pas faire moins deux lettres! (ou changez-en)";
                }
            }
            ?>
        </div>
        <div>
          <label for="emailAdress">Adresse e-mail</label>
          <input type="email" class="form-control" id="emailAdress" name="userEmail" placeholder="nom@example.com"
                 required>
            <?php
            if (!empty($_POST)) {

                if (filter_var($_POST['userEmail'], (FILTER_VALIDATE_EMAIL))) {
                    $contactForm['userMail'] = $_POST['userEmail'];
                } else {
                    $errors['userMail'] = $_POST['userEmail'];
                    echo "Les adresses mail de moins de cinq caractères ou sans @ sont réservées à Chuck Norris";
                }
            }
            ?>
          <label for="phoneNumber">Numéro de téléphone</label>
          <input type="tel" class="form-control" id="phoneNumber" name="userPhoneNumber" placeholder="0607080910"
                 required>
            <?php
            if (!empty($_POST)) {
                if (strlen($_POST['userPhoneNumber']) > 9) {
                    $contactForm['phonenumber'] = $_POST['userPhoneNumber'];
                } else {
                    $errors['phonenumber'] = $_POST['userPhoneNumber'];
                    echo "Les numéros de téléphones de moins de 10 chiffres sont réservés aux utilisateurs du XIe siècle ";
                }
            }
            ?>
        </div>
      </div>
      <div class="form-group">
        <label for="messageSubject">Sujet du message</label>
        <select class="form-control" id="messageSubject" name="messageSubject" required>
          <option>Je voudrais envoyer un message</option>
          <option>Je n'ai rien à dire</option>
          <option>Je ne sais pas utiliser un formulaire de contact</option>
          <option>La réponse D</option>

        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Votre message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="userMessage" rows="3" required></textarea>
          <?php
          if (!empty($_POST)) {
              if (strlen($_POST['userPhoneNumber']) > 10) {
                  $contactForm['message'] = $_POST['userMessage'];
              } else {
                  $errors['message'] = $_POST['userMessage'];
                  echo "Au moins dix caractères sont nécessaires pour être intelligible";
              }
          }


          ?>
      </div>
      <div class="form-group col-3 text-center">
        <button type="submit" class="btn btn-primary m-t-2 lg">Envoyer!</button>
      </div>
    </form>


      <?php
     /* if ((count($contactForm) >= 5) && (count($errors) < 1)) {
          header('Location:success.php');
      }*/


      ?>


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