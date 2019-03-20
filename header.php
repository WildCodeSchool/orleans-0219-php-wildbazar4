  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"> Wild Bazar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="pens.php"><span class="ycat">Stylos</span><span class="ybar ml-3">|</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="plushies.php"><span class="ycat">Peluches</span><span class="ybar ml-3">|</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mugs.php"><span class="ycat">Mugs</span><span class="ybar ml-3">|</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="socks.php" tabindex="-1" aria-disabled="true"><span class="ycat">Chaussettes</span></a>
          </li>
        </ul>
      </div>
    </nav>
      <div class="jumbotron jumbotron-fluid <?php echo $category ?>">
          <h1 class="text-center ytxtban"> <?php echo $titleJumbotron ?></h1>
          <p class="text-center ytxt"> <?php echo $textJumbotron ?></p>
          <div class="text-center p-4">
              <a href="add-<?php echo $category?>.html"> <button type="button" class="text-center btn btn-secondary btn-lg" >
                  ADD NEW</button></a>
          </div>
      </div>

  </header>



    <!-- Coller juste au dessus de H1 NB le header se fermera avec la suite du HTML-->