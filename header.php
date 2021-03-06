<?php require 'function.php';?>

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
                <li class="nav-item">
                    <a class="nav-link" href="plushies.php"><span class="ycat">Peluches</span><span
                                class="ybar ml-3">|</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mugs.php"><span class="ycat">Mugs</span><span
                                class="ybar ml-3">|</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="socks.php" tabindex="-1" aria-disabled="true"><span class="ycat">Chaussettes</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid <?= $category ?>">
        <h1 class="text-center ytxtban"> <?= $titleJumbotron ?></h1>
        <p class="text-center ytxt"> <?= $textJumbotron ?></p>

        <?php
        if (isset ($typeOfArticle)) {
            echo addButton($category);
        }
        ?>
    </div>
</header>
