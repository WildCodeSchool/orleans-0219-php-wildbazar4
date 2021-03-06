<?php
require 'cleanform.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (empty($_POST['plushName'])) {
        $errors['plushNameEmpty'] = "Entrez un nom, s'il vous plait!";
    }
    if (strlen($_POST['plushName']) > 100) {
        $errors['plushNameMaxStrenghtLenght'] = "Le nom ne doit pas faire plus de 100 caractères!";
    }

    if (empty($_POST['plushPrice'])) {
        $errors['plushPriceEmpty'] = "Ajoutez le prix, s'il vous plait!";
    }

    if (empty($_POST['plushDescription'])) {
        $errors['plushDescriptionEmpty'] = "Ajoutez une description, s'il vous plait!";
    }
    if (strlen($_POST['plushDescription']) > 500) {
        $errors['plushDescriptionMaxStrenghtLenght'] = "La description ne doit pas faire plus de 500 caractères!";
    }

    if (empty($_POST['plushSize'])) {
        $errors['plushSizeEmpty'] = "Ajoutez la taille, s'il vous plait!";
    }

    if (strlen($_POST['plushSize']) > 6) {
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


<header>

    <?php
    $category = 'plushies';
    $titleJumbotron = 'Peluches';
    $textJumbotron = 'Tout un monde de douceur!';
    require 'headcategories.php';
    require 'header.php';
    ?>
  <h2 class="E_title">PELUCHES</h2>
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
              <p><input class="form-control" type="text" style='background-color: #F5F7F7;' id="plushName"
                        name="plushName" placeholder="nom..."></p>
              <p class="text-danger"><?php if (isset($errors["plushNameEmpty"])) echo $errors['plushNameEmpty'] ?>
                  <?php if (isset($errors["plushNameMaxStrenghtLenght"])) echo $errors['plushNameMaxStrenghtLenght']; ?></p>
            </div>

            <div class="form-group plushPrice">
              <label for="plushPrice">Prix :</label>
              <p><input class="form-control" type="text" style='background-color: #F5F7F7;' id="plushPrice"
                        name="plushPrice" placeholder="0.00€..."></p>
              <p class="text-danger"><?php if (isset($errors["plushPriceEmpty"])) echo $errors['plushPriceEmpty']; ?></p>
            </div>

            <div class="form-group plushDescription">
              <label for="plushDescription">Description :</label>
              <textarea class="form-control" id="plushDescription" style='background-color: #F5F7F7;'
                        name="plushDescription" rows="3" placeholder="description..."></textarea>
              <p class="text-danger"><?php if (isset($errors["plushDescriptionEmpty"])) echo $errors['plushDescriptionEmpty']; ?>
                  <?php if (isset($errors['plushDescriptionMaxStrenghtLenght'])) echo $errors['plushDescriptionMaxStrenghtLenght']; ?></p>
            </div>

            <div class="form-group plushSize">
              <label for="plushSize">Taille :</label>
              <input class="form-control" type="text" id="plushSize" style='background-color: #F5F7F7;' name="plushSize"
                     placeholder="cm...">
              <p class="text-danger"><?php if (isset($errors["plushSizeEmpty"])) echo $errors['plushSizeEmpty']; ?>
                  <?php if (isset($errors['plushSizeMaxStrenghtLenght'])) echo $errors['plushSizeMaxStrenghtLenght']; ?></p>
            </div>

            <div class="form-group plushColor">
              <label for="plushColor"></label>
              <select class="plushColor" id="plushColor" style='background-color: #F5F7F7;' name="plushColor">
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
              <label for="plushQuantity"></label>
              <select class="plushQuantity" id="plushQuantity" style='background-color: #F5F7F7;' name="plushQuantity">
                <option selected>Quantités...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <button type="submit" class="btn btnSuccess-confirm mx-auto btn-lg m-t-3" name="submit">envoyer!</button>
              <p class="text-danger"><?php if (isset($errors["plushColorEmpty"])) echo $errors['plushColorEmpty']; ?></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php' ?>

